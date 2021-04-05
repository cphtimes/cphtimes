<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ArticleController;

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
Route::get('/{year}/{month}/{day}/{topic}/{title}', [ArticleController::class, 'show']);
