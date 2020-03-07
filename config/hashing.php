];

    ],
        'time' => 2,
        'threads' => 2,
        'memory' => 1024,
    'argon' => [

    */
    |
    | to control the amount of time it takes to hash the given password.
    | passwords are hashed using the Argon algorithm. These will allow you
    | Here you may specify the configuration options that should be used when
    |
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    /*

    ],
        'rounds' => env('BCRYPT_ROUNDS', 10),
    'bcrypt' => [

    */
    |
    | to control the amount of time it takes to hash the given password.
    | passwords are hashed using the Bcrypt algorithm. This will allow you
    | Here you may specify the configuration options that should be used when
    |
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    /*

    'driver' => 'bcrypt',

    */
    |
    | Supported: "bcrypt", "argon", "argon2id"
    |
    | used; however, you remain free to modify this option if you wish.
    | passwords for your application. By default, the bcrypt algorithm is
    | This option controls the default hash driver that will be used to hash
    |
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    /*

return [

<?php
