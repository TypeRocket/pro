<?php
/**
 * Example WordPress Template MVC
 */
tr_template_controller(function() {
    $title = 'Error 404';

    return tr_view('master', compact('title'));
});