<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Assets
    |--------------------------------------------------------------------------
    |
    | The URL where TypeRocket assets can be found.
    |
    */
    'assets' => tr_assets_url_build(),

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | The URL where TypeRocket component assets can be found.
    |
    */
    'components' => tr_assets_url_build( '/components' ),

    /*
    |--------------------------------------------------------------------------
    | Typerocket Assets
    |--------------------------------------------------------------------------
    |
    | The URL where TypeRocket assets can be found.
    |
    */
    'typerocket' => tr_assets_url_build( '/typerocket' ),
];
