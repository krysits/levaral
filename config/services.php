];

    ],
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'key' => env('AWS_ACCESS_KEY_ID'),
    'ses' => [

    ],
        'token' => env('POSTMARK_TOKEN'),
    'postmark' => [

    ],
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'secret' => env('MAILGUN_SECRET'),
        'domain' => env('MAILGUN_DOMAIN'),
    'mailgun' => [

    */
    |
    | a conventional file to locate the various service credentials.
    | location for this type of information, allowing packages to have
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | This file is for storing the credentials for third party services such
    |
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    /*

return [

<?php
