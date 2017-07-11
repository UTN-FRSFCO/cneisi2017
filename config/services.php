<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '246985385793401',
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect' => env('APP_URL') . 'callback/facebook',
    ],

    'twitter' => [
        'client_id' => 'I2netUCnDLN2yogCS7cfzf7eS',
        'client_secret' => env('TWITTER_SECRET'),
        'redirect' => env('APP_URL') . 'callback/twitter',
    ],

    'google' => [
        'client_id' => '616276544246-lsfhg36ebfd4lcciev02hjqh0mrt412q.apps.googleusercontent.com',
        'client_secret' => env('GOOGLE_SECRET'),
        'redirect' => env('APP_URL') . 'callback/google',
    ],

    'sendgrid' => [
        'api_key' => env('SENDGRID_API_KEY'),
        'version' => 'v3',
    ],

];
