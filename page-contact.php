<?php /* Template Name: Contact Template */
get_header(); ?>

<div class="page-title">
    <h2>
        <?php the_title(); ?>
    </h2>
</div>

<!-- the_content(); with styling -->
<?php get_template_part("/template-parts/page-content"); ?>

<?php get_footer();
