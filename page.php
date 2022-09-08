<?php get_header(); ?>

<div class="hero-div">
    <!-- Rendering the Featured Img and giving it a new class -->
    <?php the_post_thumbnail("full", array("class" => "hero-img")); ?>
    <h2 class="test">test</h2>
</div>

<div class="the-content">
    <p>
        <?php the_content(); ?>
    </p>
</div>


<?php
get_footer();
