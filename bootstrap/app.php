return $app;

*/
|
| from the actual running of the application and sending responses.
| the calling script so we can separate the building of the instances
| This script returns the application instance. The instance is given to
|
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
/*

);
    App\Exceptions\Handler::class
    Illuminate\Contracts\Debug\ExceptionHandler::class,
$app->singleton(

);
    App\Console\Kernel::class
    Illuminate\Contracts\Console\Kernel::class,
$app->singleton(

);
    App\Http\Kernel::class
    Illuminate\Contracts\Http\Kernel::class,
$app->singleton(

*/
|
| incoming requests to this application from both the web and CLI.
| we will be able to resolve them when needed. The kernels serve the
| Next, we need to bind some important interfaces into the container so
|
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
/*

);
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
$app = new Illuminate\Foundation\Application(

*/
|
| the IoC container for the system binding all of the various parts.
| which serves as the "glue" for all the components of Laravel, and is
| The first thing we will do is create a new Laravel application instance
|
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
/*

<?php
