<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append([
            \Illuminate\Http\Middleware\TrustHosts::class,
            \Illuminate\Http\Middleware\TrustProxies::class,
            \Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance::class,
            \Illuminate\Http\Middleware\ValidatePostSize::class
        ]);

        $middleware->alias([
            'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'guest' => \Illuminate\Auth\Middleware\RedirectIfAuthenticated::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
