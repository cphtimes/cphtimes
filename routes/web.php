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
Route::get('/section/{section}', [SectionController::class, 'show']);
Route::get('/section/{section}/{article}', [ArticleController::class, 'show'])->name('article');
Route::post('/section/{section}/{article}/comments/{comment?}', [ArticleController::class, 'storeComment']);

Route::match(['get', 'post'], '/by/{username}', [AuthorController::class, 'show']);

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

Route::get('/new', [ManageController::class, 'showCreateArticle']);
Route::post('/manage/new-article', [ManageController::class, 'createArticle']);

// /policy, /terms, /support