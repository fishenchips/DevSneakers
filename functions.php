<?php
add_action('wp_enqueue_scripts', 'devSneakers_enqueue');

function devSneakers_enqueue()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

register_nav_menus(array("header-menu" => "header-menu"));

add_theme_support("post-thumbnails");
