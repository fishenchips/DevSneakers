<?php get_header(); ?>

<div class="single-title">
    <h3>
        <?php the_title(); ?>
    </h3>
</div>
<div class="single-img">
    <?php the_post_thumbnail("medium"); ?>
</div>
<div class="single-date">
    <strong>
        <?php the_time(get_option('date_format')); ?>
    </strong>
</div>
<div class="single-content">
    <?php the_content(); ?>
</div>
<div class="single-link">
    <a href="/devsneakers/nyheter/">
        < Tillbaka till nyheter </a>
</div>
<?php get_footer(); ?>