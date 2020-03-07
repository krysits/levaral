];

    ],

        ],
            'database' => env('REDIS_CACHE_DB', '1'),
            'port' => env('REDIS_PORT', '6379'),
            'password' => env('REDIS_PASSWORD', null),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'url' => env('REDIS_URL'),
        'cache' => [

        ],
            'database' => env('REDIS_DB', '0'),
            'port' => env('REDIS_PORT', '6379'),
            'password' => env('REDIS_PASSWORD', null),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'url' => env('REDIS_URL'),
        'default' => [

        ],
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
            'cluster' => env('REDIS_CLUSTER', 'redis'),
        'options' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

    'redis' => [

    */
    |
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    | provides a richer body of commands than a typical key-value system
    | Redis is an open source, fast, and advanced key-value store that also
    |
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    /*

    'migrations' => 'migrations',

    */
    |
    | the migrations on disk haven't actually been run in the database.
    | your application. Using this information, we can determine which of
    | This table keeps track of all the migrations that have already run for
    |
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    /*

    ],

        ],
            'prefix_indexes' => true,
            'prefix' => '',
            'charset' => 'utf8',
            'password' => env('DB_PASSWORD', ''),
            'username' => env('DB_USERNAME', 'forge'),
            'database' => env('DB_DATABASE', 'forge'),
            'port' => env('DB_PORT', '1433'),
            'host' => env('DB_HOST', 'localhost'),
            'url' => env('DATABASE_URL'),
            'driver' => 'sqlsrv',
        'sqlsrv' => [

        ],
            'sslmode' => 'prefer',
            'schema' => 'public',
            'prefix_indexes' => true,
            'prefix' => '',
            'charset' => 'utf8',
            'password' => env('DB_PASSWORD', ''),
            'username' => env('DB_USERNAME', 'forge'),
            'database' => env('DB_DATABASE', 'forge'),
            'port' => env('DB_PORT', '5432'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'url' => env('DATABASE_URL'),
            'driver' => 'pgsql',
        'pgsql' => [

        ],
            ]) : [],
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            'options' => extension_loaded('pdo_mysql') ? array_filter([
            'engine' => null,
            'strict' => true,
            'prefix_indexes' => true,
            'prefix' => '',
            'collation' => 'utf8mb4_unicode_ci',
            'charset' => 'utf8mb4',
            'unix_socket' => env('DB_SOCKET', ''),
            'password' => env('DB_PASSWORD', ''),
            'username' => env('DB_USERNAME', 'forge'),
            'database' => env('DB_DATABASE', 'forge'),
            'port' => env('DB_PORT', '3306'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'url' => env('DATABASE_URL'),
            'driver' => 'mysql',
        'mysql' => [

        ],
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'prefix' => '',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'url' => env('DATABASE_URL'),
            'driver' => 'sqlite',
        'sqlite' => [

    'connections' => [

    */
    |
    | choice installed on your machine before you begin development.
    | so make sure you have the driver for your particular database of
    | All database work in Laravel is done through the PHP PDO facilities
    |
    |
    | supported by Laravel is shown below to make development simple.
    | Of course, examples of configuring each database platform that is
    | Here are each of the database connections setup for your application.
    |
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    /*

    'default' => env('DB_CONNECTION', 'mysql'),

    */
    |
    | you may use many connections at once using the Database library.
    | to use as your default connection for all database work. Of course
    | Here you may specify which of the database connections below you wish
    |
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    /*

return [

use Illuminate\Support\Str;

<?php
