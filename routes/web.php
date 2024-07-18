<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Account\Auth\LoginController;
use App\Http\Controllers\Account\Auth\RegisterController;
use App\Http\Controllers\Account\Auth\PasswordController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\Account\ManageController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get("/", function (Request $request) {
    if (Request::getHost() == "kbhporte.dk") {
        App::setLocale("da");
        return redirect()->to("/da");
    } else {
        App::setLocale("en");
        return redirect()->to("/en");
    }
});

Route::prefix(LaravelLocalization::setLocale())
    ->middleware(["localize", "localeSessionRedirect", "localizationRedirect"])
    ->group(function () {
        Route::get("/", [FrontpageController::class, "show"])->name(
            "frontpage"
        );

        Route::get(
            LaravelLocalization::transRoute("routes.section/{section}"),
            [SectionController::class, "show"]
        )->name("section");

        Route::get(
            LaravelLocalization::transRoute(
                "routes.section/{section}/{article}"
            ),
            [ArticleController::class, "show"]
        )->name("article");

        Route::match(
            ["get", "post"],
            LaravelLocalization::transRoute("routes.by/{username}"),
            [AuthorController::class, "show"]
        )->name("author");

        Route::post(
            LaravelLocalization::transRoute(
                "routes.section/{section}/{article}/comments/{comment?}"
            ),
            [ArticleController::class, "storeComment"]
        )->name("store_comment");

        Route::get(LaravelLocalization::transRoute("routes.account/settings"), [
            SettingsController::class,
            "show",
        ])->name("account_settings");

        Route::post(
            LaravelLocalization::transRoute(
                "routes.account/settings/basic-info"
            ),
            [SettingsController::class, "saveBasicInfo"]
        )->name("account_settings_basic_info");

        Route::post(
            LaravelLocalization::transRoute(
                "routes.account/settings/password-change"
            ),
            [SettingsController::class, "savePasswordChange"]
        )->name("account_settings_password_change");

        Route::post(
            LaravelLocalization::transRoute(
                "routes.account/settings/notifications"
            ),
            [SettingsController::class, "saveNotificationChange"]
        )->name("account_settings_notifications");

        Route::post(
            LaravelLocalization::transRoute("routes.account/settings/delete"),
            [SettingsController::class, "deleteAccount"]
        )->name("account_settings_delete");

        Route::post(
            LaravelLocalization::transRoute(
                "routes.account/settings/articles/{article}/delete"
            ),
            [ArticleController::class, "delete"]
        )->name("delete_article");

        Route::post(LaravelLocalization::transRoute("routes.login"), [
            LoginController::class,
            "authenticate",
        ])->name("login_authenticate");

        Route::get(LaravelLocalization::transRoute("routes.login"), [
            LoginController::class,
            "show",
        ])->name("login");

        Route::get(LaravelLocalization::transRoute("routes.logout"), [
            LoginController::class,
            "logout",
        ])->name("logout");

        Route::post(LaravelLocalization::transRoute("routes.register"), [
            RegisterController::class,
            "store",
        ])->name("register_store");

        Route::get(LaravelLocalization::transRoute("routes.register"), [
            RegisterController::class,
            "show",
        ])->name("register");

        Route::get(LaravelLocalization::transRoute("routes.forgot"), [
            PasswordController::class,
            "showForgot",
        ])->name("forgot");

        Route::post(LaravelLocalization::transRoute("routes.forgot"), [
            PasswordController::class,
            "sendResetLink",
        ])->name("forgot_send");

        Route::get(
            LaravelLocalization::transRoute("route.reset-password/{token}"),
            [PasswordController::class, "showResetPassword"]
        )->name("reset_password_token");

        Route::post(LaravelLocalization::transRoute("routes.reset-password"), [
            PasswordController::class,
            "resetPassword",
        ])->name("reset_password");

        Route::middleware("author")->group(function () {
            Route::get(LaravelLocalization::transRoute("routes.write"), [
                ManageController::class,
                "showCreateArticle",
            ])->name("write");
            Route::post(
                LaravelLocalization::transRoute("routes.manage/new-article"),
                [ArticleController::class, "store"]
            )->name("store_article");

            Route::get(LaravelLocalization::transRoute("routes.edit"), [
                ManageController::class,
                "showEditArticle",
            ])->name("edit");
            Route::post(
                LaravelLocalization::transRoute("routes.manage/edit-article"),
                [ArticleController::class, "edit"]
            )->name("edit_article");
        });

        Route::middleware("editor")->group(function () {
            Route::get(
                LaravelLocalization::transRoute("routes.manage/layout"),
                [ManageController::class, "showManageLayout"]
            )->name("manage_layout");
            Route::post(
                LaravelLocalization::transRoute("routes.manage/layout"),
                [ManageController::class, "createLayout"]
            )->name("manage_create_layout");

            Route::get(
                LaravelLocalization::transRoute("routes.manage/sections"),
                [ManageController::class, "showManageSections"]
            )->name("manage_sections");
            Route::post(
                LaravelLocalization::transRoute("routes.manage/sections"),
                [ManageController::class, "createSection"]
            )->name("manage_update_sections");
        });
    });

// HTMX specific routes.
Route::post("/comments", [CommentController::class, "show"]); // ->name('comments.show');
Route::get("/comments", [CommentController::class, "show"])->name(
    "comments.show"
);

Route::post("/article-grid", [ArticleController::class, "showArticleGrid"]); //->name('article_grid.show');
Route::get("/article-grid", [
    ArticleController::class,
    "showArticleGrid",
])->name("article_grid.show");

// /policy, /terms, /support
