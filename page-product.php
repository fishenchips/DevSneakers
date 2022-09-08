<?php /* Template Name: Product Template */
get_header(); ?>

<div class="page-title">
    <h2>
        <?php the_title(); ?>
    </h2>
</div>

<div class="product-page">
    <?php the_post_thumbnail("full", array("class" => "product-img")); ?>
</div>

<?php the_content(); ?>

<?php get_footer();
