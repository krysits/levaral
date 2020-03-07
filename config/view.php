];

    'expires' => env('VIEW_CHECK_EXPIRATION', true),

     */
     |
     | and precompiling views this feature may be disabled to save time.
     | to determine if it needs to be recompiled. If you are in production
     | On every request the framework will check to see if a view has expired
     |
     |--------------------------------------------------------------------------
     | Blade View Modification Checking
     |--------------------------------------------------------------------------
    /*

    ),
        realpath(storage_path('framework/views'))
        'VIEW_COMPILED_PATH',
    'compiled' => env(

    */
    |
    | directory. However, as usual, you are free to change this value.
    | stored for your application. Typically, this is within the storage
    | This option determines where all the compiled Blade templates will be
    |
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    /*

    ],
        resource_path('views'),
    'paths' => [

    */
    |
    | the usual Laravel view path has already been registered for you.
    | an array of paths that should be checked for your views. Of course
    | Most templating systems load templates from disk. Here you may specify
    |
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    /*

return [

<?php
