<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . "/../routes/web.php",
        api: __DIR__ . "/../routes/api.php",
        apiPrefix: "api/",
        commands: __DIR__ . "/../routes/console.php",
        health: "/api/healthz"
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            "localize" =>
                \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
            "localizationRedirect" =>
                \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
            "localeSessionRedirect" =>
                \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
            "localeCookieRedirect" =>
                \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
            "localeViewPath" =>
                \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();
