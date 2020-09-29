<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */
    'default' => immutable('TR_LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application.
    |
    | Available Drivers: "stack", "file", "slack", "null"
    */
    'channels' => [
        'stack' => [
            'file',
            'slack',
        ],

        'slack' => [
            'driver' => '\TypeRocket\Utility\Loggers\SlackLogger',
            'url' => immutable('TR_LOG_SLACK_WEBHOOK_URL'),
            'emoji' => ':boom:',
        ],

        'file' => [
            'driver' => '\TypeRocket\Utility\Loggers\FileLogger',
        ],

        'null' => [
            'driver' => '\TypeRocket\Utility\Loggers\NullLogger',
        ],
    ],

];