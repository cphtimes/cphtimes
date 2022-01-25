<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SignUpController;

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

Route::post('/auth/signin', [HomepageController::class, 'signIn']);
Route::get('/auth/signout', [HomepageController::class, 'signOut']);

Route::get('/create-checkout-session', [HomepageController::class, 'upgradeToPremium']);
Route::get('/manage-subscription', [HomepageController::class, 'manageSubscription']);
Route::post('/webhook', [HomepageController::class, 'webhook']);

Route::get('/section/{section}', [SectionController::class, 'show']);
Route::get('/{year}/{month}/{day}/{section}/{headline}', [ArticleController::class, 'show']);
Route::get('/subscribe', [SubscriptionController::class, 'show']);

Route::get('/sign-up', [SignUpController::class, 'show']);
