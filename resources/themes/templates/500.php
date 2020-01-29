<?php
/**
 * Example WordPress Template MVC
 */
\TypeRocket\Http\Template::respond(function() {
    $title = 'Error 500';

    return tr_view('master', compact('title'));
});