<?php
/**
 * Example WordPress Template MVC
 *
 * @var WP_Post[] $posts
 */
\TypeRocket\Http\Template::respond(function() use ($posts) {
    $title = 'Error 401';

    return tr_view('master', compact('posts', 'title'));
});