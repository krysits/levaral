];

    ],
        ],
            'path' => storage_path('logs/laravel.log'),
        'emergency' => [

        ],
            'handler' => NullHandler::class,
            'driver' => 'monolog',
        'null' => [

        ],
            'level' => 'debug',
            'driver' => 'errorlog',
        'errorlog' => [

        ],
            'level' => 'debug',
            'driver' => 'syslog',
        'syslog' => [

        ],
            ],
                'stream' => 'php://stderr',
            'with' => [
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'handler' => StreamHandler::class,
            'driver' => 'monolog',
        'stderr' => [

        ],
            ],
                'port' => env('PAPERTRAIL_PORT'),
                'host' => env('PAPERTRAIL_URL'),
            'handler_with' => [
            'handler' => SyslogUdpHandler::class,
            'level' => 'debug',
            'driver' => 'monolog',
        'papertrail' => [

        ],
            'level' => 'critical',
            'emoji' => ':boom:',
            'username' => 'Laravel Log',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'driver' => 'slack',
        'slack' => [

        ],
            'days' => 14,
            'level' => 'debug',
            'path' => storage_path('logs/laravel.log'),
            'driver' => 'daily',
        'daily' => [

        ],
            'level' => 'debug',
            'path' => storage_path('logs/laravel.log'),
            'driver' => 'single',
        'single' => [

        ],
            'ignore_exceptions' => false,
            'channels' => ['single'],
            'driver' => 'stack',
        'stack' => [
    'channels' => [

    */
    |
    |                    "custom", "stack"
    |                    "errorlog", "monolog",
    | Available Drivers: "single", "daily", "slack", "syslog",
    |
    | you a variety of powerful log handlers / formatters to utilize.
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | Here you may configure the log channels for your application. Out of
    |
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    /*

    'default' => env('LOG_CHANNEL', 'stack'),

    */
    |
    | one of the channels defined in the "channels" configuration array.
    | messages to the logs. The name specified in this option should match
    | This option defines the default log channel that gets used when writing
    |
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    /*

return [

use Monolog\Handler\SyslogUdpHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NullHandler;

<?php
