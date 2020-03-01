<?php
/**
 * Example WordPress Template MVC
 *
 * @var WP_Post[] $posts
 */
tr_template_router(function() use ($posts) {
    $title = 'Pro';

    return tr_view('master', compact('posts', 'title'));
});