<?php

namespace App\Http;

use Vinala\Kernel\Http\Middleware\Filters;

/**
* Filters class
*/
class Filter extends Filters
{

    /**
    * A list of application's global HTTP middleware stack.
    *
    * These middleware are run during every request to your application.
    *
    * @var array
    */
    public static $middleware = [
        //
    ];


    /**
    * The application's route middleware.
    *
    * These middleware may be assigned to groups or used individually.
    *
    * @var array
    */
    public static $routeMiddleware = [
        'CsrfToken' => \App\Http\Middleware\CsrfToken::class,
        'Guest' => \App\Http\Middleware\Guest::class,
        'Authentication' => \App\Http\Middleware\Authentication::class,
    ];
}
