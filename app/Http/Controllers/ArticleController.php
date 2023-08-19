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
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Notifications\ArticleComment;
use App\Notifications\ReplyComment;
use Exception;
use App;

class ArticleController extends Controller
{

    public function storeComment($section_uri, $headline_uri, Request $request, $reply_comment_id=null) {
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
        ["user_id" => $user->id,
        "reply_article_id" => $article->id,
        "reply_comment_id" => $reply_comment_id],
        $validated
      );
      $comment = Comment::create($validated);
      $article->increment('comment_count');

      if ($article->author->notifications != null &&
          $article->author->notifications->article_comment_notifications == true) {
          
        $article->author->notify(new ArticleComment($article, $comment));
      }

      if ($comment->reply_comment_id != null &&
          $comment->user->notifications != null &&
          $comment->user->reply_comment_notifications == true) {
        
        $repliedToComment = Comment::where('id', $comment->reply_comment_id)->first();
        $comment->user->notify(new ReplyComment($article, $comment, $repliedToComment));
      }

      return redirect()->to(sprintf('/section/%s/%s#comments', $section_uri, $headline_uri));
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
      
      $section = $sections->where('uri', $article->section_uri)
                          ->where('language_code', $locale)
                          ->first();

      $trendingArticles = Article::orderBy('comment_count', 'desc')
                                  ->limit(3)
                                  ->get();

      $recentArticles = Article::orderBy('published_at', 'desc')
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
}
