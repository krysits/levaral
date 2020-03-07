];

    'password_timeout' => 10800,

    */
    |
    | confirmation screen. By default, the timeout lasts for three hours.
    | times out and the user is prompted to re-enter their password via the
    | Here you may define the amount of seconds before a password confirmation
    |
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    /*

    ],
        ],
            'throttle' => 60,
            'expire' => 60,
            'table' => 'password_resets',
            'provider' => 'users',
        'users' => [
    'passwords' => [

    */
    |
    | they have less time to be guessed. You may change this as needed.
    | considered valid. This security feature keeps tokens short-lived so
    | The expire time is the number of minutes that the reset token should be
    |
    | separate password reset settings based on the specific user types.
    | than one user table or model in the application and you want to have
    | You may specify multiple password reset configurations if you have more
    |
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    /*

    ],
        // ],
        //     'table' => 'users',
        //     'driver' => 'database',
        // 'users' => [

        ],
            'model' => App\User::class,
            'driver' => 'eloquent',
        'users' => [
    'providers' => [

    */
    |
    | Supported: "database", "eloquent"
    |
    | be assigned to any extra authentication guards you have defined.
    | sources which represent each model / table. These sources may then
    | If you have multiple user tables or models you may configure multiple
    |
    | mechanisms used by this application to persist your user's data.
    | users are actually retrieved out of your database or other storage
    | All authentication drivers have a user provider. This defines how the
    |
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    /*

    ],
        ],
            'hash' => false,
            'provider' => 'users',
            'driver' => 'token',
        'api' => [

        ],
            'provider' => 'users',
            'driver' => 'session',
        'web' => [
    'guards' => [

    */
    |
    | Supported: "session", "token"
    |
    | mechanisms used by this application to persist your user's data.
    | users are actually retrieved out of your database or other storage
    | All authentication drivers have a user provider. This defines how the
    |
    | here which uses session storage and the Eloquent user provider.
    | Of course, a great default configuration has been defined for you
    | Next, you may define every authentication guard for your application.
    |
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    /*

    ],
        'passwords' => 'users',
        'guard' => 'web',
    'defaults' => [

    */
    |
    | as required, but they're a perfect start for most applications.
    | reset options for your application. You may change these defaults
    | This option controls the default authentication "guard" and password
    |
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    /*

return [

<?php
