<?php
/*
Plugin Name: TypeRocket Pro Root
Description: Root installation.
Author: TypeRocket
Version: 1
Author URI: http://typerocket.com
*/
namespace TypeRocket\Core;

if(!defined('TR_ROOT_INSTALL'))
    define('TR_ROOT_INSTALL', true);

if( defined('TR_PATH') ) {
    (new System)->boot();
    (new Rooter)->boot();
}