<?php

use Illuminate\Support\Facades\Route;
/*
use App\Http\Controllers\Account;
use App\Http\Controllers\Account\Auth;
*/
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Account\Auth\LoginController;
use App\Http\Controllers\Account\Auth\RegisterController;
use App\Http\Controllers\Account\Auth\PasswordController;

use App\Http\Controllers\Account\ManageController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Config;

use App\Models\Section;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Config::set('localized-routes.omit_url_prefix_for_locale', 'en');
// Config::set('localized-routes.omit_url_prefix_for_locale', 'da');

Route::get(Lang::uri('/'), function() {
    $currentUser = Auth::user();
    $darkMode = Cookie::get('dark_mode') == 'true';
    $locale = App::currentLocale();
    $sections = Section::where('is_active', true)
                    ->where('language_code', $locale)
                    ->orderBy('position', 'asc')
                    ->get();
    return view('about', [
        'darkMode' => $darkMode,
        'sections' => $sections,
        'currentUser' => $currentUser
    ]);
})->name('the_project');

/*
Route::get('/', function (Request $request) {
    if (Request::getHost() == 'kbhporte.dk') {
        App::setLocale('da');
        return redirect()->to('/da');
    } else {
        App::setLocale('en');
        return redirect()->to('/en');
    }
});

Route::localized(function () {
    Route::get('/dashboard', function () {
        return redirect('/home/dashboard');
    });

    Route::get('/', [HomepageController::class, 'show'])->name('home');
    Route::get(Lang::uri('section/{section}'), [SectionController::class, 'show'])->name('section');
    Route::get(Lang::uri('section/{section}/{article}'), [ArticleController::class, 'show'])->name('article');
    Route::match(['get', 'post'], Lang::uri('by/{username}'), [AuthorController::class, 'show'])->name('author');

    Route::post(Lang::uri('section/{section}/{article}/comments/{comment?}'), [ArticleController::class, 'storeComment'])->name('store_comment');

    Route::get(Lang::uri('account/settings'), [SettingsController::class, 'show'])->name('account_settings');
    Route::post(Lang::uri('account/settings/basic-info'), [SettingsController::class, 'saveBasicInfo'])->name('account_settings_basic_info');
    Route::post(Lang::uri('account/settings/password-change'), [SettingsController::class, 'savePasswordChange'])->name('account_settings_password_change');
    Route::post(Lang::uri('account/settings/notifications'), [SettingsController::class, 'saveNotificationChange'])->name('account_settings_notifications');
    Route::post(Lang::uri('account/settings/delete'), [SettingsController::class, 'deleteAccount'])->name('account_settings_delete');
    Route::post(Lang::uri('account/settings/articles/{article}/delete'), [ArticleController::class, 'delete'])->name('delete_article');

    Route::post(Lang::uri('login'), [LoginController::class, 'authenticate'])->name('login_authenticate');
    Route::get(Lang::uri('login'), [LoginController::class, 'show'])->name('login');
    Route::get(Lang::uri('logout'), [LoginController::class, 'logout'])->name('logout');

    Route::post(Lang::uri('register'), [RegisterController::class, 'store'])->name('register_store');
    Route::get(Lang::uri('register'), [RegisterController::class, 'show'])->name('register');

    Route::get(Lang::uri('forgot'), [PasswordController::class, 'showForgot'])->name('forgot');
    Route::post(Lang::uri('forgot'), [PasswordController::class, 'sendResetLink'])->name('forgot_send');
    Route::get(Lang::uri('reset-password/{token}'), [PasswordController::class, 'showResetPassword'])->name('reset_password_token');
    Route::post(Lang::uri('reset-password'), [PasswordController::class, 'resetPassword'])->name('reset_password');

    Route::middleware('author')->group(function () {
        Route::get(Lang::uri('write'), [ManageController::class, 'showCreateArticle'])->name('write');
        Route::post(Lang::uri('manage/new-article'), [ArticleController::class, 'store'])->name('store_article');

        Route::get(Lang::uri('edit'), [ManageController::class, 'showEditArticle'])->name('edit');
        Route::post(Lang::uri('manage/edit-article'), [ArticleController::class, 'edit'])->name('edit_article');
    });

    Route::middleware('editor')->group(function () {
        Route::get(Lang::uri('manage/layout'), [ManageController::class, 'showManageLayout'])->name('manage_layout');
        Route::post(Lang::uri('manage/layout'), [ManageController::class, 'createLayout'])->name('manage_create_layout');

        Route::get(Lang::uri('manage/sections'), [ManageController::class, 'showManageSections'])->name('manage_sections');
        Route::post(Lang::uri('manage/sections'), [ManageController::class, 'createSection'])->name('manage_update_sections');
    });
}, [
    'supported_locales' => ['en', 'da']
]);

Route::fallback(\CodeZero\LocalizedRoutes\Controllers\FallbackController::class);
*/

// /policy, /terms, /support
