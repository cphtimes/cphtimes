<?php

use Illuminate\Support\Facades\Route;
/*
use App\Http\Controllers\Account;
use App\Http\Controllers\Account\Auth;
*/
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MeetingsController;
use App\Http\Controllers\AuthorController;

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Account\Auth\LoginController;
use App\Http\Controllers\Account\Auth\RegisterController;
use App\Http\Controllers\Account\Auth\PasswordController;

use App\Http\Controllers\Account\ManageController;
use Illuminate\Support\Facades\Request;


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

/*
Route::get('/{locale}', function ($locale) {
    // supportedLocaleSpec.isSatisfiedBy($locale);
    if (! in_array($locale, ['en', 'da', 'ar'])) {
        abort(400);
    }
    App::setLocale($locale);
});
*/

Route::get('/', [HomepageController::class, 'show']);

/*
if (config('app.env') === 'production') {
    Route::group(['domain' => env('DOMAIN_DANISH', 'kbhporte.dk')], function() {
        Route::get('/sektion/{section}', [SectionController::class, 'show'])->name('section');
        Route::get('/sektion/{section}/{article}', [ArticleController::class, 'show'])->name('article');
        Route::match(['get', 'post'], '/af/{username}', [AuthorController::class, 'show'])->name('author');
    });
    
    Route::group(['domain' => env('DOMAIN_ENGLISH', 'cphgates.com')], function() {
        Route::get('/section/{section}', [SectionController::class, 'show'])->name('section');
        Route::get('/section/{section}/{article}', [ArticleController::class, 'show'])->name('article');
        Route::match(['get', 'post'], '/by/{username}', [AuthorController::class, 'show'])->name('author');
    });

} else {
    Route::get('/section/{section}', [SectionController::class, 'show'])->name('section');
    Route::get('/section/{section}/{article}', [ArticleController::class, 'show'])->name('article');
    Route::match(['get', 'post'], '/by/{username}', [AuthorController::class, 'show'])->name('author'); 
}
*/

Route::group(['domain' => env('DOMAIN_DANISH', 'kbhporte.dk')], function() {
    Route::get('/sektion/{section}', [SectionController::class, 'show'])->name('section');
    Route::get('/sektion/{section}/{article}', [ArticleController::class, 'show'])->name('article');
    Route::match(['get', 'post'], '/af/{username}', [AuthorController::class, 'show'])->name('author');
});

Route::group(['domain' => env('DOMAIN_ENGLISH', 'cphgates.com')], function() {
    Route::get('/section/{section}', [SectionController::class, 'show'])->name('section');
    Route::get('/section/{section}/{article}', [ArticleController::class, 'show'])->name('article');
    Route::match(['get', 'post'], '/by/{username}', [AuthorController::class, 'show'])->name('author');
});

/*
Route::group(['domain' => env('local')], function() {
    Route::get('/section/{section}', [SectionController::class, 'show'])->name('section');
    Route::get('/section/{section}/{article}', [ArticleController::class, 'show'])->name('article');
    Route::match(['get', 'post'], '/by/{username}', [AuthorController::class, 'show'])->name('author'); 
});
*/

Route::post('/section/{section}/{article}/comments/{comment?}', [ArticleController::class, 'storeComment']);

Route::get('/account/settings', [SettingsController::class, 'show']);
Route::post('/account/settings/basic-info', [SettingsController::class, 'saveBasicInfo']);
Route::post('/account/settings/password-change', [SettingsController::class, 'savePasswordChange']);
Route::post('/account/settings/notifications', [SettingsController::class, 'saveNotificationChange']);
Route::post('/account/settings/delete', [SettingsController::class, 'deleteAccount']);
Route::post('/account/settings/articles/{article}/delete', [SettingsController::class, 'deleteArticle']);

Route::get('/meetings', [MeetingsController::class, 'show']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/login', [LoginController::class, 'show']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'show']);

Route::get('/forgot', [PasswordController::class, 'showForgot']);
Route::post('/forgot', [PasswordController::class, 'sendResetLink']);
Route::get('/reset-password/{token}', [PasswordController::class, 'showResetPassword']);
Route::post('/reset-password', [PasswordController::class, 'resetPassword']);

Route::get('/write', [ManageController::class, 'showCreateArticle']);
Route::post('/manage/new-article', [ManageController::class, 'createArticle']);

Route::get('/edit', [ManageController::class, 'showEditArticle']);
Route::post('/manage/edit-article', [ManageController::class, 'editArticle']);

Route::get('/manage/layout', [ManageController::class, 'showManageLayout']);
Route::post('/manage/layout', [ManageController::class, 'createLayout']);

Route::get('/manage/sections', [ManageController::class, 'showManageSections']);
Route::post('/manage/sections', [ManageController::class, 'createSection']);

// /policy, /terms, /support
