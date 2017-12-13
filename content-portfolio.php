<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
    <figure>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('post-thumbnail-portfolio'); ?>
        <?php endif; ?>
        <figcaption>
            <h3 class="post-title"><?php the_title(); ?></h3>

            <div class="post-metas portfolio-post-metas">
                <p class="term-metas">
                    <?php 
                    if ( has_category() ) {
                        ?>
                        <span class="post-meta post-categories"><?php the_category(', '); ?></span>
                        <?php
                    }
                    if ( has_tag() ) {
                        ?>
                        <span class="post-meta post-tags"><?php the_tags('', ', '); ?></span>
                        <?php 
                    } 
                    ?>
                </p>
            </div>
        </figcaption>
    </figure>
</a>