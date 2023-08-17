<?php

namespace App\Http\Controllers\Account;
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
use App;
use Illuminate\Support\Facades\Http;

class ManageController extends Controller
{
    /**
     * Show the Homepage
     * @return \Illuminate\View\View
    */
    public function showCreateArticle(Request $request)
    {
      $darkMode = Cookie::get('dark_mode') == 'true';
      $locale = App::currentLocale();
      $sections = Section::where('is_active', true)
                          ->where('language_code', $locale)
                          ->orderBy('position', 'asc')
                          ->get();

      $currentUser = Auth::user();
      
      return view('account.create-article', [
        'darkMode' => $darkMode,
        'sections' => $sections,
        'currentUser' => $currentUser
      ]);
    }

    public function createArticle(Request $request) {
      $data = $request->validate([
        'body_html' => ['required'],
        'headline' => ['required'],
        'section_uri' => ['required'],
        'in_language' => ['required'],
        'work_status' => ['required'],
        'image_url' => ['required'],
        'abstract' => ['required'],
        'image_caption' => [],
        'video_embed' => [],
        'video_provider' => [],
        'video_ratio' => []
      ]);

      $headline_uri = strtolower($data['headline']);
      $headline_uri = str_replace([' ', '.', ',', '!', ':', ';', '?'], '-', $headline_uri);
      $headline_uri = str_replace('æ', 'ae', $headline_uri);
      $headline_uri = str_replace('ø', 'oe', $headline_uri);
      $headline_uri = str_replace('å', 'aa', $headline_uri);

      $currentUser = Auth::user();

      $storageURL = sprintf('%s/storage/v1/object/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $headline_uri, 'body.html');

      $mimeType = 'text/html';

      $token = env('SUPERBASE_API_SECRET_KEY');
      $response = Http::withToken($token)
                      ->withBody($data["body_html"], $mimeType)
                      ->post($storageURL);

      $body_url = sprintf("%s/storage/v1/object/public/users/%s/articles/%s/%s", env('SUPERBASE_URL'), $currentUser->username, $headline_uri, 'body.html');

      $emptyAbstract = $data["in_language"] == 'da' ? 'Ingen beskrivelse' : 'No description';

      $article = Article::create([
        'body_url' => $body_url,
        'section_uri' => $data["section_uri"],
        'abstract' => $data["abstract"] ?? emptyAbstract,
        'author_id' => $currentUser->id,
        'work_status' => $data["work_status"],
        'published_at' => now(),
        'headline' => $data["headline"],
        'headline_uri' => $headline_uri,
        'in_language' => $data["in_language"],
        'image_url' => $data["image_url"],
        'image_caption' => $data["image_caption"] ?? null,
        'video_embed' => $data["video_embed"] ?? null,
        'video_provider' => $data["video_provider"] ?? null,
        'video_ratio' => $data["video_ratio"] ?? null,
        'time_required' => 'PT30M',
        'keywords' => 'One,Two,Three,Four,Five',
      ]);

      return redirect()->route('article', [$article->section_uri, $article->headline_uri]);
    }
}
