];

    ],

        ],
            'driver' => 'null',
        'null' => [

        ],
            'driver' => 'log',
        'log' => [

        ],
            'connection' => 'default',
            'driver' => 'redis',
        'redis' => [

        ],
            ],
                'useTLS' => true,
                'cluster' => env('PUSHER_APP_CLUSTER'),
            'options' => [
            'app_id' => env('PUSHER_APP_ID'),
            'secret' => env('PUSHER_APP_SECRET'),
            'key' => env('PUSHER_APP_KEY'),
            'driver' => 'pusher',
        'pusher' => [

    'connections' => [

    */
    |
    | each available type of connection are provided inside this array.
    | to broadcast events to other systems or over websockets. Samples of
    | Here you may define all of the broadcast connections that will be used
    |
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    /*

    'default' => env('BROADCAST_DRIVER', 'null'),

    */
    |
    | Supported: "pusher", "redis", "log", "null"
    |
    | any of the connections defined in the "connections" array below.
    | framework when an event needs to be broadcast. You may set this to
    | This option controls the default broadcaster that will be used by the
    |
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    /*

return [

<?php
