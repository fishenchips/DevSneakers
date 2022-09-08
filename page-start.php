<?php /* Template Name: Start Page Template */

get_header(); ?>

<div class="hero-div">
    <!-- Rendering the Featured Img and giving it a new class -->
    <?php the_post_thumbnail("full", array("class" => "hero-img")); ?>
</div>

<?php get_template_part("/template-parts/page-content"); ?>

<?php
get_footer();
