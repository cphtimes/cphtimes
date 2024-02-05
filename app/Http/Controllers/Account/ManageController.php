<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;

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
use Facades\Str;

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

    public function showManageLayout(Request $request)
    {
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

    public function createLayout(Request $request)
    {
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

                $headline_uri = rawurldecode($paths[count($paths) - 1]);

                if ($is_frontpage) {
                    $article = Article::where('section_uri',  rawurldecode(($paths[count($paths) - 2])))
                        ->where('headline_uri', $headline_uri)
                        ->first();
                } else {
                    $article = Article::where('section_uri',  $section_uri)
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

    // Does not support updating at the moment a section name.
    // use firstOrCreate?
    public function createSection(Request $request)
    {
        $data = $request->validate([
            'position' => [],
            'name_en' => [],
            'name_da' => []
        ]);

        $all_sections = Section::where('language_code', 'en')
            ->orderBy('position', 'asc')
            ->get();

        $index = (int) $data['position'];
        $is_new_last_element = $all_sections->count() == $index;
        if ($is_new_last_element) {
            $position = $all_sections->last()->position + 1;
        } else {
            $position = $all_sections[$index]->position;
        }

        $sections = Section::where('position', '>=', $position)->increment('position', 1);

        $uri = Str::slug($data['name_en']);

        $en_section = Section::create([
            'name' => $data['name_en'],
            'uri' => $uri,
            'position' => $position,
            'language_code' => 'en'
        ]);

        $da_section = Section::create([
            'name' => $data['name_da'],
            'uri' => $uri,
            'position' => $position,
            'language_code' => 'da'
        ]);

        return redirect()->back();
    }

    public function showManageSections(Request $request)
    {
        // missing some pre and post conditions here.

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

        $username = $article->author->username ?? $currentUser->username;

        $public_blocks_url = sprintf('%s/storage/v1/object/public/users/%s/articles/%s/%s', env('SUPERBASE_URL'), $username, $headline_uri, 'blocks.json');
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
}
