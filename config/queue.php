];

    ],
        'table' => 'failed_jobs',
        'database' => env('DB_CONNECTION', 'mysql'),
        'driver' => env('QUEUE_FAILED_DRIVER', 'database'),
    'failed' => [

    */
    |
    | have failed. You may change them to any database / table you wish.
    | can control which database and table are used to store the jobs that
    | These options configure the behavior of failed queue job logging so you
    |
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    /*

    ],

        ],
            'block_for' => null,
            'retry_after' => 90,
            'queue' => env('REDIS_QUEUE', 'default'),
            'connection' => 'default',
            'driver' => 'redis',
        'redis' => [

        ],
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'key' => env('AWS_ACCESS_KEY_ID'),
            'driver' => 'sqs',
        'sqs' => [

        ],
            'block_for' => 0,
            'retry_after' => 90,
            'queue' => 'default',
            'host' => 'localhost',
            'driver' => 'beanstalkd',
        'beanstalkd' => [

        ],
            'retry_after' => 90,
            'queue' => 'default',
            'table' => 'jobs',
            'driver' => 'database',
        'database' => [

        ],
            'driver' => 'sync',
        'sync' => [

    'connections' => [

    */
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    | for each back-end shipped with Laravel. You are free to add more.
    | is used by your application. A default configuration has been added
    | Here you may configure the connection information for each server that
    |
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    /*

    'default' => env('QUEUE_CONNECTION', 'sync'),

    */
    |
    | syntax for every one. Here you may define a default connection.
    | API, giving you convenient access to each back-end using the same
    | Laravel's queue API supports an assortment of back-ends via a single
    |
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    /*

return [

<?php
