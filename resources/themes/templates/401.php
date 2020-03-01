<?php
/**
 * Example WordPress Template MVC
 */
tr_template_router(function() {
    $title = 'Error 401';

    return tr_view('master', compact('title'));
});