];

    ],
        ],
            resource_path('views/vendor/mail'),
        'paths' => [

        'theme' => 'default',
    'markdown' => [

    */
    |
    | of the emails. Or, you may simply stick with the Laravel defaults!
    | theme and component paths here, allowing you to customize the design
    | If you are using Markdown based email rendering, you may configure your
    |
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    /*

    ],
        'name' => env('MAIL_FROM_NAME', 'Example'),
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
    'from' => [

    */
    |
    | used globally for all e-mails that are sent by your application.
    | the same address. Here, you may specify a name and address that is
    | You may wish for all e-mails sent by your application to be sent from
    |
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    /*

    ],
        ],
            'transport' => 'array',
        'array' => [

        ],
            'channel' => env('MAIL_LOG_CHANNEL'),
            'transport' => 'log',
        'log' => [

        ],
            'path' => '/usr/sbin/sendmail -bs',
            'transport' => 'sendmail',
        'sendmail' => [

        ],
            'transport' => 'ses',
        'ses' => [

        ],
            'password' => env('MAIL_PASSWORD'),
            'username' => env('MAIL_USERNAME'),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'port' => env('MAIL_PORT', 587),
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'transport' => 'smtp',
        'smtp' => [
    'mailers' => [

    */
    |
    |            "postmark", "log", "array"
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |
    | mailers below. You are free to add additional mailers as required.
    | sending an e-mail. You will specify which one you are using for your
    | Laravel supports a variety of mail "transport" drivers to be used while
    |
    | you and you are free to add your own as your application requires.
    | their respective settings. Several examples have been configured for
    | Here you may configure all of the mailers used by your application plus
    |
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    /*

    'default' => env('MAIL_MAILER', 'smtp'),

    */
    |
    | and used as needed; however, this mailer will be used by default.
    | messages sent by your application. Alternative mailers may be setup
    | This option controls the default mailer that is used to send any email
    |
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    /*

return [

<?php
