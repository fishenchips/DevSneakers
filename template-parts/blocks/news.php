<div class="news-block">
    <ul>
        <!-- loading news content -->
        <?php $news =  new WP_Query("posts_per_page=4"); ?>
        <?php while ($news->have_posts()) : $news->the_post(); ?>

            <?php get_template_part("/template-parts/news-content"); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
</div>