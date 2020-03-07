];

    'same_site' => 'lax',

    */
    |
    | Supported: "lax", "strict", "none"
    |
    | do not enable this as other CSRF protection services are in place.
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | This option determines how your cookies behave when cross-site requests
    |
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    /*

    'http_only' => true,

    */
    |
    | the HTTP protocol. You are free to modify this option if needed.
    | value of the cookie and the cookie will only be accessible through
    | Setting this value to true will prevent JavaScript from accessing the
    |
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    /*

    'secure' => env('SESSION_SECURE_COOKIE', null),

    */
    |
    | the cookie from being sent to you if it can not be done securely.
    | to the server if the browser has a HTTPS connection. This will keep
    | By setting this option to true, session cookies will only be sent back
    |
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    /*

    'domain' => env('SESSION_DOMAIN', null),

    */
    |
    | available to in your application. A sensible default has been set.
    | in your application. This will determine which domains the cookie is
    | Here you may change the domain of the cookie used to identify a session
    |
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    /*

    'path' => '/',

    */
    |
    | your application but you are free to change this when necessary.
    | be regarded as available. Typically, this will be the root path of
    | The session cookie path determines the path for which the cookie will
    |
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    /*

    ),
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
        'SESSION_COOKIE',
    'cookie' => env(

    */
    |
    | new session cookie is created by the framework for every driver.
    | instance by ID. The name specified here will get used every time a
    | Here you may change the name of the cookie used to identify a session
    |
    |--------------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    /*

    'lottery' => [2, 100],

    */
    |
    | happen on a given request. By default, the odds are 2 out of 100.
    | rid of old sessions from storage. Here are the chances that it will
    | Some session drivers must manually sweep their storage location to get
    |
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    /*

    'store' => env('SESSION_STORE', null),

    */
    |
    | must match with one of the application's configured cache "stores".
    | list a cache store that should be used for these sessions. This value
    | When using the "apc", "memcached", or "dynamodb" session drivers you may
    |
    |--------------------------------------------------------------------------
    | Session Cache Store
    |--------------------------------------------------------------------------
    /*

    'table' => 'sessions',

    */
    |
    | provided for you; however, you are free to change this as needed.
    | should use to manage the sessions. Of course, a sensible default is
    | When using the "database" session driver, you may specify the table we
    |
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    /*

    'connection' => env('SESSION_CONNECTION', null),

    */
    |
    | correspond to a connection in your database configuration options.
    | connection that should be used to manage these sessions. This should
    | When using the "database" or "redis" session drivers, you may specify a
    |
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    /*

    'files' => storage_path('framework/sessions'),

    */
    |
    | location may be specified. This is only needed for file sessions.
    | files may be stored. A default has been set for you but a different
    | When using the native session driver, we need a location where session
    |
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    /*

    'encrypt' => false,

    */
    |
    | automatically by Laravel and you can use the Session like normal.
    | should be encrypted before it is stored. All encryption will be run
    | This option allows you to easily specify that all of your session data
    |
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    /*

    'expire_on_close' => false,

    'lifetime' => env('SESSION_LIFETIME', 120),

    */
    |
    | to immediately expire on the browser closing, set that option.
    | to be allowed to remain idle before it expires. If you want them
    | Here you may specify the number of minutes that you wish the session
    |
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    /*

    'driver' => env('SESSION_DRIVER', 'file'),

    */
    |
    |            "memcached", "redis", "dynamodb", "array"
    | Supported: "file", "cookie", "database", "apc",
    |
    | you may specify any of the other wonderful drivers provided here.
    | requests. By default, we will use the lightweight native driver but
    | This option controls the default session "driver" that will be used on
    |
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    /*

return [

use Illuminate\Support\Str;

<?php
