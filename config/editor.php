<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Redactor Plugins
    |--------------------------------------------------------------------------
    |
    | Customize the plugins installed with redactor.
    |
    | @link https://imperavi.com/redactor/plugins/
    |
    | Options:
    |
    | `alignment`, `beyondgrammar`, `clips`, `counter`, `definedlinks`,
    | `filemanager`, `fontcolor`, `fontfamily`, `fontsize`, `fullscreen`,
    | `handle`, `imagemanager`, `inlinestyle`, `limiter`, `properties`,
    | `specialchars`, `table`, `textdirection`, `textexpander`,
    | `variable`, `video`, `widget`, and `wpmedia`
    |
    */
    'plugins' => [
        'wpmedia',
        'specialchars',
    ],

    /*
    |--------------------------------------------------------------------------
    | Redactor Load File
    |--------------------------------------------------------------------------
    |
    | Options include: `minified` and `dev`
    |
    */
    'load' => 'minified',

    /*
    |--------------------------------------------------------------------------
    | Redactor Language
    |--------------------------------------------------------------------------
    |
    | Options can be found @link https://imperavi.com/redactor/docs/get-started/languages/
    |
    */
    'lang' => 'en'

];