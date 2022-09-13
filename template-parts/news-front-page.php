<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <div>
            <div>
                <?php the_post_thumbnail("thumbnail"); ?>
            </div>
            <div>
                <div>
                    <h4>
                        <?php the_title(); ?>
                    </h4>
                    <strong>
                        <?php the_time(get_option('date_format'));; ?>
                    </strong>
                </div>
                <div>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </a>
</article>