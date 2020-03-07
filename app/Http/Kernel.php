}
    ];
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'auth' => \App\Http\Middleware\Authenticate::class,
    protected $routeMiddleware = [
     */
     * @var array
     *
     * These middleware may be assigned to groups or used individually.
     *
     * The application's route middleware.
    /**

    ];
        ],
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            'throttle:60,1',
        'api' => [

        ],
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \App\Http\Middleware\EncryptCookies::class,
        'web' => [
    protected $middlewareGroups = [
     */
     * @var array
     *
     * The application's route middleware groups.
    /**

    ];
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\TrustProxies::class,
    protected $middleware = [
     */
     * @var array
     *
     * These middleware are run during every request to your application.
     *
     * The application's global HTTP middleware stack.
    /**
{
class Kernel extends HttpKernel

use Illuminate\Foundation\Http\Kernel as HttpKernel;

namespace App\Http;

<?php
