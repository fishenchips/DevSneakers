<?php get_header(); ?>

<div class="hero-div">
    <!-- Rendering the Featured Img and giving it a new class -->
    <?php the_post_thumbnail("full", array("class" => "hero-img")); ?>
    <h2 class="page-header">
        <?php the_title(); ?>
    </h2>
</div>

<?php get_template_part("/template-parts/page-content"); ?>

<?php
get_footer();
