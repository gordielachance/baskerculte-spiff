<div class="cc-polaroid-content">
    <figure>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="featured-media">

                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail( 'post-thumbnail' ); ?>
                </a>
            </div><!-- .featured-media -->
        <?php endif; ?>
    </figure>
    <figcaption>
        <header>
            <div class="post-metas portfolio-post-metas">
                <p class="post-meta post-date"><?php the_time( 'Y/m/d' ); ?></span>
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
        </header>
        <!-- post title -->
        <?php if ( get_the_title() ) : ?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <?php endif; ?>
        <!-- /post title -->
    </figcaption>
</div>