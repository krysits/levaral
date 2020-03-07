];

    ],
        public_path('storage') => storage_path('app/public'),
    'links' => [

    */
    |
    | the locations of the links and the values should be their targets.
    | `storage:link` Artisan command is executed. The array keys should be
    | Here you may configure the symbolic links that will be created when the
    |
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    /*

    ],

        ],
            'url' => env('AWS_URL'),
            'bucket' => env('AWS_BUCKET'),
            'region' => env('AWS_DEFAULT_REGION'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'key' => env('AWS_ACCESS_KEY_ID'),
            'driver' => 's3',
        's3' => [

        ],
            'visibility' => 'public',
            'url' => env('APP_URL').'/storage',
            'root' => storage_path('app/public'),
            'driver' => 'local',
        'public' => [

        ],
            'root' => storage_path('app'),
            'driver' => 'local',
        'local' => [

    'disks' => [

    */
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    | been setup for each driver as an example of the required options.
    | may even configure multiple disks of the same driver. Defaults have
    | Here you may configure as many filesystem "disks" as you wish, and you
    |
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    /*

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    */
    |
    | will be bound as the Cloud disk implementation in the container.
    | reason, you may specify a default "cloud" driver here. This driver
    | Many applications store files both locally and in the cloud. For this
    |
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    /*

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    */
    |
    | based disks are available to your application. Just store away!
    | by the framework. The "local" disk, as well as a variety of cloud
    | Here you may specify the default filesystem disk that should be used
    |
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    /*

return [

<?php
