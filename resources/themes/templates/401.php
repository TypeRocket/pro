<?php
/**
 * Example WordPress Template MVC
 */
tr_template_controller(function() {
    $title = 'Error 401';

    return tr_view('master', compact('title'));
});