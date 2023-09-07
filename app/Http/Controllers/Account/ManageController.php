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
use App\Models\Layout;
use App\Models\Author;

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
        'body_blocks' => ['required'],
        'headline' => ['required'],
        'section_uri' => ['required'],
        'in_language' => ['required'],
        'work_status' => ['required'],
        'image' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
        'abstract' => ['required'],
        'image_caption' => [],
        'video_embed' => [],
        'video_provider' => [],
        'video_ratio' => [],
        'author_is_anonymous' => [],
        'author_display_name' => [],
        'author_username' => []
      ]);

      $headline_uri = strtolower($data['headline']);
      $headline_uri = str_replace([' ', '.', ',', '!', ':', ';', '?'], '-', $headline_uri);
      $headline_uri = str_replace('æ', 'ae', $headline_uri);
      $headline_uri = str_replace('ø', 'oe', $headline_uri);
      $headline_uri = str_replace('å', 'aa', $headline_uri);

      $currentUser = Auth::user();

      $token = env('SUPERBASE_API_SECRET_KEY');

      $body_url = sprintf('%s/storage/v1/object/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $headline_uri, 'body.html');
      $response = Http::withToken($token)
                      ->withBody($data["body_html"], 'text/html')
                      ->post($body_url);

      $blocks_url = sprintf('%s/storage/v1/object/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $headline_uri, 'blocks.json');
      $response = Http::withToken($token)
                      ->withBody($data["body_blocks"], 'application/json')
                      ->post($blocks_url);

      $image = $request->file('image');
      $image_url = sprintf('%s/storage/v1/object/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $headline_uri, 'image');
      $response = Http::withToken($token)
                      ->withBody(file_get_contents($image), $image->getClientMimeType())
                      ->post($image_url);

      $public_image_url = sprintf('%s/storage/v1/object/public/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $headline_uri, 'image');
      $public_body_url = sprintf("%s/storage/v1/object/public/users/%s/articles/%s/%s", env('SUPERBASE_URL'), $currentUser->username, $headline_uri, 'body.html');

      $emptyAbstract = $data["in_language"] == 'da' ? 'Ingen beskrivelse' : 'No description';

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
      
      $article = Article::create([
        'body_url' => $public_body_url,
        'section_uri' => $data["section_uri"],
        'abstract' => $data["abstract"] ?? emptyAbstract,
        'author_id' => $author->id,
        'editor_id' => $currentUser->id,
        'work_status' => $data["work_status"],
        'published_at' => now(),
        'headline' => $data["headline"],
        'headline_uri' => $headline_uri,
        'in_language' => $data["in_language"],
        'image_url' => $public_image_url,
        'image_caption' => $data["image_caption"] ?? null,
        'video_embed' => $data["video_embed"] ?? null,
        'video_provider' => $data["video_provider"] ?? null,
        'video_ratio' => $data["video_ratio"] ?? null,
        'time_required' => 'PT30M',
        'keywords' => 'One,Two,Three,Four,Five',
      ]);

      return redirect()->route('article', [$article->section_uri, $article->headline_uri]);
    }

    public function showManageLayout(Request $request) {
      $darkMode = Cookie::get('dark_mode') == 'true';
      $locale = App::currentLocale();
      $sections = Section::where('is_active', true)
                          ->where('language_code', $locale)
                          ->orderBy('position', 'asc')
                          ->get();
      
      $layouts = [];

      $frontpage = Layout::where('section_uri', null)
                            ->limit(3)
                            ->orderBy('position', 'asc')
                            ->get();
      $layouts += ['frontpage' => $frontpage];

      foreach ($sections as $section) {
        $layout = Layout::where('section_uri', $section->uri)
                        ->limit(5)
                        ->orderBy('position', 'asc')
                        ->get();
        $layouts += [$section->uri => $layout];
      }

      $currentUser = Auth::user();
      
      return view('account.manage-layout', [
        'darkMode' => $darkMode,
        'sections' => $sections,
        'currentUser' => $currentUser,
        'layouts' => $layouts
      ]);
    }
    
    public function createLayout(Request $request) {
      $section_uri = $request->query('section', null);

      $is_frontpage = $section_uri == null;
      $n_articles = $is_frontpage ? 3 : 5;

      $data = $request->validate([
        'article_1' => [],
        'article_2' => [],
        'article_3' => [],
        'article_4' => [],
        'article_5' => []
      ]);

      $n1 = array_filter(array_values($data));
      $n2 = array_fill(0, $n_articles, null);
      $values = array_slice(array_merge($n1, $n2), 0, $n_articles);

      foreach ($values as $key => $value) {
        $position = (int) $key;
        $shouldDeleteIfNeeded = $value == null;

        if ($shouldDeleteIfNeeded) {
          Layout::where('section_uri', $section_uri)
                ->where('position', $position)
                ->delete();

        } else {
          $url_components = parse_url($value);
          $paths = explode('/', $url_components['path']);
          
          if (count($paths) == 0) {
            continue;
          }

          $headline_uri = $paths[count($paths) - 1];
          if ($is_frontpage) {    
            $article = Article::where('section_uri', $paths[count($paths) - 2])
                              ->where('headline_uri', $headline_uri)
                              ->first();

          } else {
            $article = Article::where('section_uri', $section_uri)
                              ->where('headline_uri', $headline_uri)
                              ->first();
          }

          if ($article == null) {
            continue;
          }

          $layout = Layout::where('section_uri', $section_uri)
                          ->where('position', $position)
                          ->first();

          if ($layout == null) {
            $layout = Layout::create([
              'article_id' => $article->id,
              'section_uri' => $section_uri,
              'position' => $position
            ]);
          } else {
            $layout->article_id = $article->id;
            $layout->save();
          }
        }
      }

      return redirect()->back();
    }

    public function createSection(Request $request) {
      $data = $request->validate([
        'position' => [],
        'name_en' => [],
        'name_da' => []
      ]);

      $sections = Section::where('position', '>=', (int) $data['position'])->increment('position', 1);

      $uri = strtolower($data['name_en']);
      $uri = str_replace([' ', '.', ',', '!', ':', ';', '?'], '-', $uri);
      $uri = str_replace('æ', 'ae', $uri);
      $uri = str_replace('ø', 'oe', $uri);
      $uri = str_replace('å', 'aa', $uri); 

      $en_section = Section::create([
        'name' => $data['name_en'],
        'uri' => $uri,
        'position' => (int) $data['position'],
        'language_code' => 'en'
      ]);

      $da_section = Section::create([
        'name' => $data['name_da'],
        'uri' => $uri,
        'position' => (int) $data['position'],
        'language_code' => 'da'
      ]);

      return redirect()->back();
    }

    public function showManageSections(Request $request) {
      $action = $request->query('action', null);
      $section_uri = $request->query('uri', null);

      if ($action && $section_uri) {
        switch ($action) {
          case 'up':
            $en_section = Section::where('uri', $section_uri)->where('language_code', 'en')->first();
            $da_section = Section::where('uri', $section_uri)->where('language_code', 'da')->first();

            $en_above_section = Section::where('position', $en_section->position - 1)->where('language_code', 'en')->first();
            $da_above_section = Section::where('position', $da_section->position - 1)->where('language_code', 'da')->first();

            $en_above_section->position = $en_above_section->position + 1;
            $da_above_section->position = $da_above_section->position + 1;

            $en_section->position = $en_section->position - 1;
            $da_section->position = $da_section->position - 1;

            $en_section->save();
            $da_section->save();

            $en_above_section->save();
            $da_above_section->save();

            break;
          case 'down':
            $en_section = Section::where('uri', $section_uri)->where('language_code', 'en')->first();
            $da_section = Section::where('uri', $section_uri)->where('language_code', 'da')->first();

            $en_below_section = Section::where('position', $en_section->position + 1)->where('language_code', 'en')->first();
            $da_below_section = Section::where('position', $da_section->position + 1)->where('language_code', 'da')->first();
            
            $en_below_section->position = $en_below_section->position - 1;
            $da_below_section->position = $da_below_section->position - 1;

            $en_section->position = $en_section->position + 1;
            $da_section->position = $da_section->position + 1;

            $en_section->save();
            $da_section->save();

            $en_below_section->save();
            $da_below_section->save();
            break;
          
          case 'delete':
            $en_section = Section::where('uri', $section_uri)->where('language_code', 'en')->first();
            $da_section = Section::where('uri', $section_uri)->where('language_code', 'da')->first();

            $sections_below = Section::where('position', '>', $en_section->position)->decrement('position', 1);
            
            $en_section->delete();
            $da_section->delete();
            break;
        }

        return redirect()->back();
      }

      $darkMode = Cookie::get('dark_mode') == 'true';
      $locale = App::currentLocale();
      
      $sections = Section::where('is_active', true)
                          ->where('language_code', $locale)
                          ->orderBy('position', 'asc')
                          ->get();

      $all_sections = Section::orderBy('position', 'asc')
                              ->get();

      $currentUser = Auth::user();

      return view('account.manage-sections', [
        'darkMode' => $darkMode,
        'sections' => $sections,
        'all_sections' => $all_sections,
        'currentUser' => $currentUser
      ]);
    }

    public function showEditArticle(Request $request)
    {
      $section_uri = $request->query('section_uri', null);
      $headline_uri = $request->query('headline_uri', null);

      if ($section_uri == null && $headline_uri == null) {
        return redirect()->to('/write');
      }

      $darkMode = Cookie::get('dark_mode') == 'true';
      $locale = App::currentLocale();
      $sections = Section::where('is_active', true)
                          ->where('language_code', $locale)
                          ->orderBy('position', 'asc')
                          ->get();

      $currentUser = Auth::user();

      $article = Article::where('section_uri', $section_uri)
                        ->where('headline_uri', $headline_uri)
                        ->firstOrFail();

      $public_blocks_url = sprintf('%s/storage/v1/object/public/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $headline_uri, 'blocks.json');
      $blocks = file_get_contents($public_blocks_url);
      $body_html = file_get_contents($article->body_url);

      return view('account.edit-article', [
        'darkMode' => $darkMode,
        'sections' => $sections,
        'currentUser' => $currentUser,
        'article' => $article,
        'body_html' => $body_html,
        'blocks' => $blocks
      ]);
    }

    public function editArticle(Request $request) {
      $section_uri = $request->query('section_uri', null);
      $headline_uri = $request->query('headline_uri', null);

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
        'video_embed' => [],
        'video_provider' => [],
        'video_ratio' => [],
        'author_is_anonymous' => [],
        'author_display_name' => [],
        'author_username' => []
      ]);

      $new_headline_uri = strtolower($data['headline']);
      $new_headline_uri = str_replace([' ', '.', ',', '!', ':', ';', '?'], '-', $new_headline_uri);
      $new_headline_uri = str_replace('æ', 'ae', $new_headline_uri);
      $new_headline_uri = str_replace('ø', 'oe', $new_headline_uri);
      $new_headline_uri = str_replace('å', 'aa', $new_headline_uri);

      $currentUser = Auth::user();

      $token = env('SUPERBASE_API_SECRET_KEY');

      $body_url = sprintf('%s/storage/v1/object/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $new_headline_uri, 'body.html');
      $response = Http::withToken($token)
                      ->withBody($data["body_html"], 'text/html')
                      ->post($body_url);

      if ($response->status() >= 400) {
        $response = Http::withToken($token)
                      ->withBody($data["body_html"], 'text/html')
                      ->put($body_url);
      }

      $blocks_url = sprintf('%s/storage/v1/object/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $new_headline_uri, 'blocks.json');
      $response = Http::withToken($token)
                      ->withBody($data["body_blocks"], 'application/json')
                      ->post($blocks_url);

      if ($response->status() >= 400) {
        $response = Http::withToken($token)
                        ->withBody($data["body_blocks"], 'application/json')
                        ->put($blocks_url);
      }

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

      $article = Article::where('section_uri', $section_uri)
                        ->where('headline_uri', $headline_uri)
                        ->firstOrFail();

      $image = $request->file('image');
      $image_url = sprintf('%s/storage/v1/object/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $new_headline_uri, 'image');
      $response = Http::withToken($token)
                      ->withBody(file_get_contents($image ? $image : $article->image_url), $image ? $image->getClientMimeType() : 'image/png')
                      ->post($image_url);

      if ($response->status() >= 400) {
        $response = Http::withToken($token)
                        ->withBody(file_get_contents($image ? $image : $article->image_url), $image ? $image->getClientMimeType() : 'image/png')
                        ->put($image_url);
      }

      $public_image_url = sprintf('%s/storage/v1/object/public/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $currentUser->username, $new_headline_uri, 'image');
      $public_body_url = sprintf("%s/storage/v1/object/public/users/%s/articles/%s/%s", env('SUPERBASE_URL'), $currentUser->username, $new_headline_uri, 'body.html');

      $emptyAbstract = $data["in_language"] == 'da' ? 'Ingen beskrivelse' : 'No description';

      $article->update([
        'body_url' => $public_body_url,
        'section_uri' => $data["section_uri"],
        'abstract' => $data["abstract"] ?? emptyAbstract,
        'author_id' => $author->id,
        'editor_id' => $currentUser->id,
        'work_status' => $data["work_status"],
        'published_at' => now(),
        'headline' => $data["headline"],
        'headline_uri' => $new_headline_uri,
        'in_language' => $data["in_language"],
        'image_url' => $public_image_url,
        'image_caption' => $data["image_caption"] ?? null,
        'video_embed' => $data["video_embed"] ?? null,
        'video_provider' => $data["video_provider"] ?? null,
        'video_ratio' => $data["video_ratio"] ?? null,
        'time_required' => 'PT30M',
        'keywords' => 'One,Two,Three,Four,Five',
      ]);

      return redirect()->route('article', [$data["section_uri"], $new_headline_uri]);
    }
}
