<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Mail Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
    */
    'default' => immutable('TR_MAIL_MAILER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Options: "mailgun", "log"
    |
    */
    'mailers' => [
        'mailgun' => [
            'driver' => \TypeRocket\Mail\Driver\MailGunMailDriver::class,
            'region' => immutable('TR_MAILGUN_REGION', 'us'),
            'api_key' => immutable('TR_MAILGUN_API_KEY'),
            'domain' => immutable('TR_MAILGUN_DOMAIN'),
            'from_override' => immutable('TR_MAILGUN_FROM_OVERRIDE', false),
            'from_address' => immutable('TR_MAILGUN_FROM_ADDRESS'),
            'from_name' => immutable('TR_MAILGUN_FROM_NAME'),
        ],

        'log' => [
            'driver' => \TypeRocket\Mail\Driver\LogMailDriver::class,
        ],
    ],
];