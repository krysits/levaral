];

    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache'),

    */
    |
    | value to get prefixed to all our keys so we can avoid collisions.
    | be other applications utilizing the same cache. So, we'll specify a
    | When utilizing a RAM based store such as APC or Memcached, there might
    |
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    /*

    ],

        ],
            'endpoint' => env('DYNAMODB_ENDPOINT'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'key' => env('AWS_ACCESS_KEY_ID'),
            'driver' => 'dynamodb',
        'dynamodb' => [

        ],
            'connection' => 'cache',
            'driver' => 'redis',
        'redis' => [

        ],
            ],
                ],
                    'weight' => 100,
                    'port' => env('MEMCACHED_PORT', 11211),
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                [
            'servers' => [
            ],
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            'options' => [
            ],
                env('MEMCACHED_PASSWORD'),
                env('MEMCACHED_USERNAME'),
            'sasl' => [
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'driver' => 'memcached',
        'memcached' => [

        ],
            'path' => storage_path('framework/cache/data'),
            'driver' => 'file',
        'file' => [

        ],
            'connection' => null,
            'table' => 'cache',
            'driver' => 'database',
        'database' => [

        ],
            'driver' => 'array',
        'array' => [

        ],
            'driver' => 'apc',
        'apc' => [

    'stores' => [

    */
    |
    | same cache driver to group types of items stored in your caches.
    | well as their drivers. You may even define multiple stores for the
    | Here you may define all of the cache "stores" for your application as
    |
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    /*

    'default' => env('CACHE_DRIVER', 'file'),

    */
    |
    |            "memcached", "redis", "dynamodb"
    | Supported: "apc", "array", "database", "file",
    |
    | not explicitly specified when executing a given caching function.
    | using this caching library. This connection is used when another is
    | This option controls the default cache connection that gets used while
    |
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    /*

return [

use Illuminate\Support\Str;

<?php
