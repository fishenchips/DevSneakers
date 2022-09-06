<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?= the_title(); ?> </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="header-nav">
        <!-- Adding ACF color picker choice for admin -->
        <h3 class="site-header" style="color: <?php the_field("header_name_color");
                                                rm - rf . git ?> "><?php the_title(); ?></h3>
        <nav>
            <?php wp_nav_menu(array("theme_location" => "header-menu"));  ?>
        </nav>
    </div>

    <?php wp_body_open(); ?>