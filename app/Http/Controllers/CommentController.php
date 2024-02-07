<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function show(Request $request)
    {
        $articleId = $request->query('articleId', null);
        if ($articleId == null) {
            return null;
        }

        $currentUser = Auth::user();

        $article = Article::where('id', $articleId)
            ->firstOrFail();

        $comments = Comment::where('reply_article_id', $articleId)
            ->where('reply_comment_id', null)
            ->paginate(7);

        return view('components.comments', [
            'currentUser' => $currentUser,
            'article' => $article,
            'comments' => $comments
        ]);
    }
}
