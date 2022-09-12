<!-- fråga om denna rad -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="news-div">
            <div class="news-img-div">
                <?php the_post_thumbnail("thumbnail"); ?>
            </div>
            <div>
                <div class="news-text-div">
                    <h4 class="entry-title">
                        <?php the_title(); ?>
                    </h4>
                    <strong><?php the_date(); ?></strong>
                </div>
                <div>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </a>

</article>