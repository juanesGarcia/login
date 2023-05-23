<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [    
        'client_id' => 28380013924-bfde9glto0ksg6cjcme5uaidrc8dji0c.apps.googleusercontent.com,  
        'client_secret' => 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,  
        'redirect' => "/google-callback", 
    ],
    'facebook' => [    
        'client_id' => 3448057475459141,  
        'client_secret' =>cd5074a74891ea44fd30059775e55613,  
        'redirect' => "https://pruebadevops2.azurewebsites.net/facebook-callback",
    ],

];
