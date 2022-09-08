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

<!-- the_content(); with styling -->
<?php get_template_part("the-content"); ?>

<?php get_footer();
