<?php get_header(); ?>

<div class="hero-div">
    <?php the_post_thumbnail("full", array("class" => "hero-img")); ?>
    <h2 class="test">test</h2>
</div>

<?php
/*   If admin has entered Page header, show page header */
$page_header = get_field("page_header");
if ($page_header) : ?>
    <div>
        <h3>
            <?php the_field("page_header"); ?>
        </h3>
    </div>
<?php endif; ?>
<div>
    <p>
        <?php the_content(); ?>
    </p>
</div>


<?php
get_footer();
