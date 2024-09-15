<?php

use App\Http\Middleware\IsLogin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Test;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware ->alias([
            'test'=>Test::class,
            'IsLogin'=>IsLogin::class,

        ]);
        
        // $middleware->append([
        //     App\Http\Middleware\Test::class
        // ]);
        // $middleware->web(append:[
        //     Test::class,
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
