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
use App\Models\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Notifications\ArticleComment;
use App\Notifications\ReplyComment;
use Exception;
use App;
use App\Services\SupportedLangsService;
use App\Services\UploadBodyService;
use App\Services\UploadBlocksService;
use App\Services\UploadImageService;
use Facades\Str;
use App\Services\AboveFoldArticlesService;
use App\Services\ArticleRawSQLService;
use App\Specs\ArticleRawSQLSpec;
use Illuminate\Support\Facades\App as FacadesApp;
use Illuminate\Support\Facades\Log;
use PHPSQLParser\PHPSQLParser;

class ArticleController extends Controller
{
    public function storeComment(
        $section_uri,
        $headline_uri,
        Request $request,
        $reply_comment_id = null
    ) {
        $validator = Validator::make($request->all(), ["text" => ["required"]]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $validated = $validator->safe()->except([]);
        $article = Article::where("section_uri", $section_uri)
            ->where("headline_uri", $headline_uri)
            ->first();
        $user = Auth::user();
        $validated = array_merge(
            [
                "user_id" => $user->id,
                "reply_article_id" => $article->id,
                "reply_comment_id" => $reply_comment_id,
            ],
            $validated
        );
        $comment = Comment::create($validated);
        $article->increment("comment_count");

        if (
            $article->author->notifications != null &&
            $article->author->notifications->article_comment_notifications ==
                true
        ) {
            $article->author->notify(new ArticleComment($article, $comment));
        }

        if (
            $comment->reply_comment_id != null &&
            $comment->user->notifications != null &&
            $comment->user->reply_comment_notifications == true
        ) {
            $repliedToComment = Comment::where(
                "id",
                $comment->reply_comment_id
            )->first();
            $comment->user->notify(
                new ReplyComment($article, $comment, $repliedToComment)
            );
        }

        return redirect()->route("article", [
            "section" => $section_uri,
            "article" => $headline_uri,
        ]);
    }

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show($section_uri, $headline_uri)
    {
        $currentUser = Auth::user();
        $locale = App::currentLocale();

        $languages = [];
        if ($currentUser) {
            $languages = $currentUser->reads_languages;
        } elseif ($locale == "da") {
            $languages = ["da", "en"];
        } else {
            $languages = ["en"];
        }

        $sections = Section::where("is_active", true)
            ->where("language_code", $locale)
            ->orderBy("position", "asc")
            ->get();

        $article = Article::where("section_uri", $section_uri)
            ->where("headline_uri", $headline_uri)
            ->firstOrFail();

        try {
            $body = file_get_contents($article->body_url);
        } catch (Exception $e) {
            abort(404);
        }

        $relatedArticles = $article->related()->limit(5)->get();
        if ($relatedArticles->count() == 0) {
            $relatedArticles = Article::whereIn("in_language", $languages)
                ->where("id", "!=", $article->id)
                ->orderByRaw(
                    sprintf(
                        "extensions.SIMILARITY(headline, '%s'::text) DESC",
                        htmlspecialchars($article->headline, ENT_QUOTES)
                    )
                )
                ->limit(5)
                ->get();
        }

        $section = $sections
            ->where("uri", $article->section_uri)
            ->where("language_code", $locale)
            ->first();

        $trendingArticles = Article::orderBy("comment_count", "desc")
            ->whereIn("in_language", $languages)
            ->limit(3)
            ->get();

        $recentArticles = Article::orderBy("created_at", "desc")
            ->whereIn("in_language", $languages)
            ->limit(4)
            ->get();

        $comments = $article
            ->comments()
            ->where("reply_article_id", $article->id)
            ->where("reply_comment_id", null)
            ->orderBy("created_at", "desc")
            ->paginate(20);

        return view("article", [
            "section" => $section,
            "trendingArticles" => $trendingArticles,
            "recentArticles" => $recentArticles,
            "article" => $article,
            "body" => $body,
            "sections" => $sections,
            "comments" => $comments,
            "currentUser" => $currentUser,
            "relatedArticles" => $relatedArticles,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "body_html" => ["required"],
            "body_blocks" => ["required"],
            "headline" => ["required"],
            "section_uri" => ["required"],
            "in_language" => ["required"],
            "work_status" => ["required"],
            "image" => "image|mimes:jpg,png,jpeg,gif|max:2048",
            "abstract" => ["required"],
            "image_caption" => [],
            "author_is_anonymous" => [],
            "author_display_name" => [],
            "author_username" => [],
            "about" => [],
            "correction" => [],
            "credit" => [],
        ]);

        $headline_uri = Str::slug($data["headline"]);

        $currentUser = Auth::user();

        $is_anonymous = $data["author_is_anonymous"] ?? false;
        $display_name = $data["author_display_name"];
        $username = $data["author_username"];

        $author = null;

        if ($is_anonymous) {
            $author = Author::firstOrCreate(["is_anonymous" => true]);
        } elseif ($username) {
            $author = Author::firstOrCreate(["username" => $username]);
            $author->display_name = $display_name;
        } else {
            $author = Author::firstOrCreate(["user_id" => $currentUser->id]);
        }

        $author->save();

        try {
            $user = $username ? $author->username : $currentUser->username;
            $articlePath = $user . "/articles/" . $headline_uri;

            $public_body_url = UploadBodyService::withData(
                $data["body_html"],
                $articlePath
            );
            UploadBlocksService::withData($data["body_blocks"], $articlePath);

            $image = $request->file("image");
            $public_image_url = UploadImageService::withFile(
                $image,
                $articlePath
            );
        } catch (Exception $e) {
            abort(500);
        }

        $emptyAbstract =
            $data["in_language"] == "da"
                ? "Ingen beskrivelse"
                : "No description";

        $article = Article::create([
            "body_url" => $public_body_url,
            "section_uri" => $data["section_uri"],
            "abstract" => $data["abstract"] ?? $emptyAbstract,
            "author_id" => $author->id,
            "editor_id" => $currentUser->id,
            "work_status" => $data["work_status"],
            "published_at" => $data["work_status"] ? now() : null,
            "headline" => $data["headline"],
            "headline_uri" => $headline_uri,
            "in_language" => $data["in_language"],
            "image_url" => $public_image_url,
            "image_caption" => $data["image_caption"] ?? null,
            "correction" => $data["correction"] ?? null,
            "about" => $data["about"] ?? null,
            "credit" => $data["credit"] ?? null,
            "time_required" => "PT30M",
            "keywords" => "",
        ]);

        return redirect()->route("article", [
            $article->section_uri,
            $article->headline_uri,
        ]);
    }

    public function edit(Request $request)
    {
        $section_uri = $request->query("section_uri", null);
        $headline_uri = $request->query("headline_uri", null);

        $article = Article::where("section_uri", $section_uri)
            ->where("headline_uri", $headline_uri)
            ->firstOrFail();

        $data = $request->validate([
            "body_html" => ["required"],
            "body_blocks" => ["required"],
            "headline" => ["required"],
            "section_uri" => ["required"],
            "in_language" => ["required"],
            "work_status" => ["required"],
            "image" => "image|mimes:jpg,png,jpeg,gif|max:2048",
            "abstract" => ["required"],
            "image_caption" => [],
            "about" => [],
            "credit" => [],
            "correction" => [],
            "author_is_anonymous" => [],
            "author_display_name" => [],
            "author_username" => [],
        ]);

        $new_headline_uri = Str::slug($data["headline"]);

        $currentUser = Auth::user();

        $is_anonymous = $data["author_is_anonymous"] ?? false;
        $display_name = $data["author_display_name"];
        $username = $data["author_username"];

        $author = null;

        if ($is_anonymous) {
            $author = Author::firstOrCreate([
                "is_anonymous" => true,
            ]);
        } else {
            $author = Author::firstOrCreate(["username" => $username]);
            $author->user_id = $display_name == null ? $currentUser->id : null;
            $author->display_name = $display_name;
        }

        $author->save();

        try {
            $user = $username ? $author->username : $currentUser->username;
            $articlePath = $user . "/articles/" . $new_headline_uri;

            $public_body_url = UploadBodyService::withData(
                $data["body_html"],
                $articlePath,
                $replace = true
            );
            UploadBlocksService::withData(
                $data["body_blocks"],
                $articlePath,
                $replace = true
            );

            $image = $request->file("image");
            if ($image) {
                $public_image_url = UploadImageService::withFile(
                    $image,
                    $articlePath,
                    $replace = true
                );
            } elseif ($new_headline_uri != $headline_uri) {
                // copy existing image from one article folder to the new. (based on the new_headline_uri)
                $base_url = env("SUPERBASE_URL");
                $token = env("SUPERBASE_API_SECRET_KEY");

                $fragments = explode("/", $article->image_url);
                $image_name = $fragments[count($fragments) - 1];

                $response = Http::withToken($token)
                    ->withBody(
                        file_get_contents($article->image_url),
                        "application/octet-stream"
                    )
                    ->post(
                        $base_url .
                            "/storage/v1/object/users/" .
                            $articlePath .
                            "/" .
                            $image_name
                    );
                if ($response->status() >= 400) {
                    abort(500);
                }
                $public_image_url =
                    $base_url .
                    "/storage/v1/object/public/users/" .
                    $articlePath .
                    "/" .
                    $image_name;
            } else {
                $public_image_url = $article->image_url;
            }
        } catch (Exception $e) {
            abort(500);
        }

        $emptyAbstract =
            $data["in_language"] == "da"
                ? "Ing en beskrivelse"
                : "No description";

        $article->update([
            "body_url" => $public_body_url,
            "section_uri" => $data["section_uri"],
            "abstract" => $data["abstract"] ?? $emptyAbstract,
            "author_id" => $author->id,
            "editor_id" => $currentUser->id,
            "work_status" => $data["work_status"],
            "published_at" => $data["work_status"] ? now() : null,
            "headline" => $data["headline"],
            "headline_uri" => $new_headline_uri,
            "in_language" => $data["in_language"],
            "image_url" => $public_image_url,
            "image_caption" => $data["image_caption"] ?? null,
            "correction" => $data["correction"] ?? null,
            "about" => $data["about"] ?? null,
            "credit" => $data["credit"] ?? null,
            "time_required" => "PT30M",
            "keywords" => "",
        ]);

        // NOTE: cleanup / remove old storage folder with article files.
        // DeleteArticlesFolder.forUser(username, "old"headline_uri)

        return redirect()->route("article", [
            $data["section_uri"],
            $new_headline_uri,
        ]);
    }

    public function showArticleGrid(Request $request)
    {
        $sql = $request->query("sql", null);

        if ($sql == null) {
            return null;
        }

        if (ArticleRawSQLSpec::isSatisfiedBy($sql) == false) {
            return null;
        }

        $languages = SupportedLangsService::get();

        $articles = Article::whereRaw(
            ArticleRawSQLService::whereRaw($sql)
        )->whereIn("in_language", $languages);
        $sql_new = $articles->toSqlWithBindings();

        $nColumns = 4;
        $nRows = 2;

        $articles = $articles->paginate($nColumns * $nRows);

        $locale = FacadesApp::currentLocale();

        $sections = Section::where("is_active", true)
            ->where("language_code", $locale)
            ->orderBy("position", "asc")
            ->get();

        return view("components.article-grid", [
            "articles" => $articles,
            "sections" => $sections,
            "sql" => $sql_new,
        ]);
    }

    // NO TE: Also  delete storage entry in the future.
    public function delete($headline_uri, Request $request)
    {
        $currentUser = Auth::user();
        $article = $currentUser
            ->articles()
            ->where("headline_uri", $headline_uri)
            ->firstOrFail();
        $article->delete();
        return redirect()->back();
    }
}
