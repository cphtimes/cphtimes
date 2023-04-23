<?php

namespace App\Http\Controllers;

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
use App;

class AuthorController extends Controller
{
    /**
     * Show the Homepage
     * @return \Illuminate\View\View
    */
    public function show($username, Request $request)
    {

      $sort = $request->query('sort', 'newest');
      if ($request->isMethod('post')) {
        $sort = $request->sort;
        $url = $request->fullUrlWithQuery([
            'sort' => $sort
        ]);
        return redirect()->to($url);
      }

      $darkMode = Cookie::get('dark_mode') == 'true';
      $locale = App::currentLocale();
      $sections = Section::where('is_active', true)
                          ->where('language_code', $locale)
                          ->orderBy('position', 'asc')
                          ->get();
      
      $author = User::where('username', $username)->firstOrFail();      
      
      $articles = $author->articles()->orderBy('created_at', $sort == 'newest' ? 'desc' : 'asc')
                                     ->paginate(20);

      $currentUser = Auth::user();
      
      return view('author', [
        'darkMode' => $darkMode,
        'sections' => $sections,
        'articles' => $articles,
        'author' => $author,
        'currentUser' => $currentUser
      ]);
    }
}
