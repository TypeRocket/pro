<?php
/**
 * Example WordPress Template MVC
 *
 * @var WP_Post[] $posts
 */
\TypeRocket\Http\Template::respond(function() use ($posts) {
    $title = 'Pro';

    return tr_view('master', compact('posts', 'title'));
});