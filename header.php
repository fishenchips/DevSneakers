<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?= the_title(); ?> </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Adding color choice class for easy styling -->
    <div class="header-nav <?php get_field("header_color", "option") ?>">
        <!-- Adding ACF color picker choice for admin in options page -->
        <a class="header-link" href="<?php echo site_url(); ?>">

            <h3 class="site-header">
                <!-- Creating a tag so user can go back to start page -->
                <?= get_bloginfo("name"); ?>

            </h3>
        </a>
        <nav>
            <?php wp_nav_menu(array("theme_location" => "header-menu"));  ?>
        </nav>
    </div>

    <?php wp_body_open(); ?>