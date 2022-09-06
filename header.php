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
        <a class="header-link" href="<?php site_url(); ?>">

            <h3 class="site-header">
                <!-- Creating a tag so user can go back to start page -->

                <!-- NEED TO CHANGE TO CORRECT VERSION -->
                <?php the_title(); ?>

            </h3>
        </a>
        <nav>
            <?php wp_nav_menu(array("theme_location" => "header-menu"));  ?>
        </nav>

        <!-- FRÅGA HUR MAN NÅR A-taggen här, ingen klass kan man köra Li active? -->

        <!-- CREATE  -->
    </div>

    <?php wp_body_open(); ?>