<?php
add_action('wp_enqueue_scripts', function () {
    /*wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');*/
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/style.e2e1a33c.css');
    wp_enqueue_style('fix', get_stylesheet_uri());
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/main.ef23f591.js', [], false, true);
});
