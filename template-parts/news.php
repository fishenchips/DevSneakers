<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div>
        <div>
            <p>
                <?php the_post_thumbnail("thumbnail"); ?>
            </p>
        </div>
        <div>
            <div>
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <i><?php the_date(); ?></i>
            </div>
            <div>
                <?php the_excerpt(); ?>

            </div>
        </div>
    </div>