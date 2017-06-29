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
        'client_id' => '1714371265528381',
        'client_secret' => '8e4491aebf566471862d5f4b2a67d10f',
        'redirect' => env('APP_URL') . 'callback/facebook',
    ],

    'twitter' => [
        'client_id' => 'I2netUCnDLN2yogCS7cfzf7eS',
        'client_secret' => '7yJw2LkL1SEi40wuQUInsNBPDyphYkYLkC0xaBuVs0RIekaMWU',
        'redirect' => env('APP_URL') . 'callback/twitter',
    ],

    'sendgrid' => [
        'api_key' => env('SENDGRID_API_KEY'),
        'version' => 'v3',
    ],

];
