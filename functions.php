<?php
/* Adding my own CSS  */
add_action('wp_enqueue_scripts', 'devSneakers_enqueue');

function devSneakers_enqueue()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

/* Registering menus */
register_nav_menus(array("header-menu" => "header-menu"));

/* So each page can have a theme image */
add_theme_support("post-thumbnails");

/* Creates Options tab in WP Admin site */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}

/* Ads class to body tag */
add_filter('body_class', 'my_body_classes');
function my_body_classes($classes)
{

    $classes[] = get_field("header_color", "option");

    return $classes;
}

/*  Function for adding blocks  */
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'news',
            'title'             => __('News'),
            'description'       => __('A custom news block.'),
            'render_template'   => '/template-parts/blocks/news.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('news'),
        ));
    }
}
