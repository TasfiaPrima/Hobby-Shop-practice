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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],


    // 'google' => [
    //     'client_id' => env(key: 'GOOGLE_CLIENT_ID'),
    //     'client_secret' => env(key: 'GOOGLE_CLIENT_SECRET'),
    //     'redirect' => env(key: 'GOOGLE_REDIRECT_URL')
    // ],

    'google' => [
        'client_id' => 'GOOGLE_CLIENT_ID',
        'client_secret' => 'GOOGLE_CLIENT_SECRET',
        'redirect' => 'GOOGLE_REDIRECT_URL'
    ],


    // 'google' => [
    //     'client_id' => '343881079356-efet82ar71b7lru09p9urg2nlk46rc36.apps.googleusercontent.com',
    //     'client_secret' => 'oyzswr7_S93DB5zV4AHBu_OM',
    //     'redirect' => 'http://127.0.0.1:8000/callback/google',
    // ],


];
