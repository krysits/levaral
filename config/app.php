];

    ],

        'View' => Illuminate\Support\Facades\View::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Str' => Illuminate\Support\Str::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Arr' => Illuminate\Support\Arr::class,
        'App' => Illuminate\Support\Facades\App::class,

    'aliases' => [

    */
    |
    | the aliases are "lazy" loaded so they don't hinder performance.
    | is started. However, feel free to register as many as you wish as
    | This array of class aliases will be registered when this application
    |
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    /*

    ],

        App\Providers\RouteServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\AppServiceProvider::class,
         */
         * Application Service Providers...
        /*

         */
         * Package Service Providers...
        /*

        Illuminate\View\ViewServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Auth\AuthServiceProvider::class,
         */
         * Laravel Framework Service Providers...
        /*

    'providers' => [

    */
    |
    | this array to grant expanded functionality to your applications.
    | request to your application. Feel free to add your own services to
    | The service providers listed here will be automatically loaded on the
    |
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    /*

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    */
    |
    | will not be safe. Please do this before deploying an application!
    | to a random, 32 character string, otherwise these encrypted strings
    | This key is used by the Illuminate encrypter service and should be set
    |
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    /*

    'faker_locale' => 'en_US',

    */
    |
    | localized telephone numbers, street address information and more.
    | data for your database seeds. For example, this will be used to get
    | This locale will be used by the Faker PHP library when generating fake
    |
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    /*

    'fallback_locale' => 'en',

    */
    |
    | the language folders that are provided through your application.
    | is not available. You may change the value to correspond to any of
    | The fallback locale determines the locale to use when the current one
    |
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    /*

    'locale' => 'en',

    */
    |
    | to any of the locales which will be supported by the application.
    | by the translation service provider. You are free to set this value
    | The application locale determines the default locale that will be used
    |
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    /*

    'timezone' => 'UTC',

    */
    |
    | ahead and set this to a sensible default for you out of the box.
    | will be used by the PHP date and date-time functions. We have gone
    | Here you may specify the default timezone for your application, which
    |
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    /*

    'asset_url' => env('ASSET_URL', null),

    'url' => env('APP_URL', 'http://localhost'),

    */
    |
    | your application so that it is used when running Artisan tasks.
    | the Artisan command line tool. You should set this to the root of
    | This URL is used by the console to properly generate URLs when using
    |
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    /*

    'debug' => env('APP_DEBUG', false),

    */
    |
    | application. If disabled, a simple generic error page is shown.
    | stack traces will be shown on every error that occurs within your
    | When your application is in debug mode, detailed error messages with
    |
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    /*

    'env' => env('APP_ENV', 'production'),

    */
    |
    | services the application utilizes. Set this in your ".env" file.
    | running in. This may determine how you prefer to configure various
    | This value determines the "environment" your application is currently
    |
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    /*

    'name' => env('APP_NAME', 'Laravel'),

    */
    |
    | any other location as required by the application or its packages.
    | framework needs to place the application's name in a notification or
    | This value is the name of your application. This value is used when the
    |
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    /*

return [

<?php
