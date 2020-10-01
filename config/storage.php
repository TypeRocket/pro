<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Storage Location
    |--------------------------------------------------------------------------
    |
    | This option defines the default storage location that gets used when.
    | The name specified in this option should match one of the locations
    | defined in the "channels" configuration array.
    |
    */
    'default' => immutable('TR_STORAGE_LOCATION', 'storage'),

    /*
    |--------------------------------------------------------------------------
    | Storage Locations
    |--------------------------------------------------------------------------
    |
    | Here you may configure the storage locations for your application.
    |
    | Available Drivers: "stack", "local"
    */
    'locations' => [
        'stack' => [
            'storage',
        ],

        'storage' => [
            'driver' => '\TypeRocket\Utility\Drives\StorageDrive',
        ],

        'uploads' => [
            'driver' => '\TypeRocket\Utility\Drives\UploadsDrive',
        ],
    ],

];