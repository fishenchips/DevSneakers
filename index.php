<?php get_header(); ?>
<h2> <?php wp_title(); ?> </h2>
<div class="posts">

    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="post-block">
                <?php get_template_part("/template-parts/news-front-page"); ?>
            </div>
    <?php
        endwhile;
    endif; ?>
</div>
<?php get_footer();
