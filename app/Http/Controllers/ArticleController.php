<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\Article;
use App\Models\User;
use App\Models\Section;
use App\Models\Comment;
use App\Models\Author;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Notifications\ArticleComment;
use App\Notifications\ReplyComment;
use Exception;
use App;
use App\Services\UploadBodyService;
use App\Services\UploadBlocksService;
use App\Services\UploadImageService;
use Facades\Str;

class ArticleController extends Controller
{

    public function storeComment($section_uri, $headline_uri, Request $request, $reply_comment_id = null)
    {
        $validator = Validator::make($request->all(), ['text' => ['required']]);
        if ($validator->fails()) {
            return back()->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->safe()->except([]);
        $article = Article::where('section_uri', $section_uri)
            ->where('headline_uri', $headline_uri)
            ->first();
        $user = Auth::user();
        $validated = array_merge(
            [
                "user_id" => $user->id,
                "reply_article_id" => $article->id,
                "reply_comment_id" => $reply_comment_id
            ],
            $validated
        );
        $comment = Comment::create($validated);
        $article->increment('comment_count');

        if (
            $article->author->notifications != null &&
            $article->author->notifications->article_comment_notifications == true
        ) {

            $article->author->notify(new ArticleComment($article, $comment));
        }

        if (
            $comment->reply_comment_id != null &&
            $comment->user->notifications != null &&
            $comment->user->reply_comment_notifications == true
        ) {

            $repliedToComment = Comment::where('id', $comment->reply_comment_id)->first();
            $comment->user->notify(new ReplyComment($article, $comment, $repliedToComment));
        }

        return  redirect()->route('article', ['section' => $section_uri, 'article' => $headline_uri]);
    }

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show($section_uri, $headline_uri)
    {

        $darkMode = Cookie::get('dark_mode') == 'true';
        $currentUser = Auth::user();
        $locale = App::currentLocale();

        $languages = [];
        if ($currentUser) {
            $languages = $currentUser->reads_languages;
        } else if ($locale == 'da') {
            $languages = ['da', 'en'];
        } else {
            $languages = ['en'];
        }

        $sections = Section::where('is_active', true)
            ->where('language_code', $locale)
            ->orderBy('position', 'asc')
            ->get();

        $article = Article::where('section_uri', $section_uri)
            ->where('headline_uri', $headline_uri)
            ->firstOrFail();

        try {
            $body = file_get_contents($article->body_url);
        } catch (Exception $e) {
            abort(404);
        }

        $relatedArticles = $article->related()->limit(5)->get();
        if ($relatedArticles->count() == 0) {
            $relatedArticles = Article::whereIn('in_language', $languages)
                ->where('id', '!=', $article->id)
                ->orderByRaw(sprintf("extensions.SIMILARITY(headline, '%s'::text) DESC", $article->headline))
                ->limit(5)
                ->get();
        }

        $section = $sections->where('uri', $article->section_uri)
            ->where('language_code', $locale)
            ->first();

        $trendingArticles = Article::orderBy('comment_count', 'desc')
            ->whereIn('in_language', $languages)
            ->limit(3)
            ->get();

        $recentArticles = Article::orderBy('published_at', 'desc')
            ->whereIn('in_language', $languages)
            ->limit(4)
            ->get();

        $comments = $article->comments()->where('reply_article_id', $article->id)
            ->where('reply_comment_id', null)
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('article', [
            'section' => $section,
            'trendingArticles' => $trendingArticles,
            'recentArticles' => $recentArticles,
            'article' => $article,
            'body' => $body,
            'darkMode' => $darkMode,
            'sections' => $sections,
            'comments' => $comments,
            'currentUser' => $currentUser,
            'relatedArticles' => $relatedArticles
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'body_html' => ['required'],
            'body_blocks' => ['required'],
            'headline' => ['required'],
            'section_uri' => ['required'],
            'in_language' => ['required'],
            'work_status' => ['required'],
            'image' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'abstract' => ['required'],
            'image_caption' => [],
            'author_is_anonymous' => [],
            'author_display_name' => [],
            'author_username' => [],
            'about' => [],
            'correction' => [],
            'credit' => [],
        ]);

        $headline_uri = Str::slug($data['headline']);

        $currentUser = Auth::user();

        $is_anonymous = $data["author_is_anonymous"] ?? false;
        $display_name = $data['author_display_name'];
        $username = $data['author_username'];

        $author = null;

        if ($is_anonymous) {
            $author = Author::firstOrCreate(['is_anonymous' => true]);
        } else if ($username) {
            $author = Author::firstOrCreate(['username' => $username]);
            $author->display_name = $display_name;
        } else {
            $author = Author::firstOrCreate(['user_id' => $currentUser->id]);
        }

        $author->save();

        try {
            $articlePath = $username ? $author->username : $currentUser->username . '/articles/' . $headline_uri;

            $public_body_url = UploadBodyService::withData($data["body_html"], $articlePath);
            UploadBlocksService::withData($data["body_blocks"], $articlePath);

            $image = $request->file('image');
            $public_image_url = UploadImageService::withFile($image, $articlePath);
        } catch (Exception $e) {
            abort(500);
        }

        $emptyAbstract = $data["in_language"] == 'da' ? 'Ingen beskrivelse' : 'No description';

        $article = Article::create([
            'body_url' => $public_body_url,
            'section_uri' => $data["section_uri"],
            'abstract' => $data["abstract"] ?? $emptyAbstract,
            'author_id' => $author->id,
            'editor_id' => $currentUser->id,
            'work_status' => $data["work_status"],
            'published_at' => $data["work_status"] ? now() : null,
            'headline' => $data["headline"],
            'headline_uri' => $headline_uri,
            'in_language' => $data["in_language"],
            'image_url' => $public_image_url,
            'image_caption' => $data["image_caption"] ?? null,
            'correction' => $data["correction"] ?? null,
            'about' => $data["about"] ?? null,
            'credit' => $data["credit"] ?? null,
            'time_required' => 'PT30M',
            'keywords' => '',
        ]);

        return redirect()->route('article', [$article->section_uri, $article->headline_uri]);
    }

    public function edit(Request $request)
    {
        $section_uri = $request->query('section_uri', null);
        $headline_uri = $request->query('headline_uri', null);

        $article = Article::where('section_uri', $section_uri)
            ->where('headline_uri', $headline_uri)
            ->firstOrFail();

        $data = $request->validate([
            'body_html' => ['required'],
            'body_blocks' => ['required'],
            'headline' => ['required'],
            'section_uri' => ['required'],
            'in_language' => ['required'],
            'work_status' => ['required'],
            'image' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'abstract' => ['required'],
            'image_caption' => [],
            'about' => [],
            'credit' => [],
            'correction' => [],
            'author_is_anonymous' => [],
            'author_display_name' => [],
            'author_username' => []
        ]);

        $new_headline_uri = Str::slug($data['headline']);

        $currentUser = Auth::user();

        $is_anonymous = $data["author_is_anonymous"] ?? false;
        $display_name = $data['author_display_name'];
        $username = $data['author_username'];

        $author = null;

        if ($is_anonymous) {
            $author = Author::firstOrCreate([
                'is_anonymous' => true
            ]);
        } else {
            $author = Author::firstOrCreate(['username' => $username]);
            $author->user_id = $display_name == null ? $currentUser->id : null;
            $author->display_name = $display_name;
        }

        $author->save();

        try {
            $articlePath = $username ? $author->username : $currentUser->username . '/articles/' . $headline_uri;

            $public_body_url = UploadBodyService::withData($data["body_html"], $articlePath, $replace = true);
            UploadBlocksService::withData($data["body_blocks"], $articlePath, $replace = true);

            $image = $request->file('image');
            if ($image) {
                $public_image_url = UploadImageService::withFile($image, $articlePath, $replace = true);
            }
        } catch (Exception $e) {
            abort(500);
        }

        $emptyAbstract = $data["in_language"] == 'da' ? 'Ingen beskrivelse' : 'No description';

        $article->update([
            'body_url' => $public_body_url,
            'section_uri' => $data["section_uri"],
            'abstract' => $data["abstract"] ?? $emptyAbstract,
            'author_id' => $author->id,
            'editor_id' => $currentUser->id,
            'work_status' => $data["work_status"],
            'published_at' => $data["work_status"] ? now() : null,
            'headline' => $data["headline"],
            'headline_uri' => $new_headline_uri,
            'in_language' => $data["in_language"],
            'image_url' => $image ? $public_image_url : $article->image_url,
            'image_caption' => $data["image_caption"] ?? null,
            'correction' => $data["correction"] ?? null,
            'about' => $data["about"] ?? null,
            'credit' => $data["credit"] ?? null,
            'time_required' => 'PT30M',
            'keywords' => '',
        ]);

        return redirect()->route('article', [$data["section_uri"], $new_headline_uri]);
    }

    public function delete($headline_uri, Request $request)
    {
        $currentUser = Auth::user();
        $article = $currentUser->articles()
            ->where('headline_uri', $headline_uri)
            ->firstOrFail();
        // NOTE: Also delete storage entry in the future.
        $article->delete();
        return redirect()->back();
    }
}
