<div class="cc-polaroid-content">
    <header>
        <span class="post-date"><?php the_time( 'Y/m/d' ); ?></span>
        <div class="post-meta">
            <?php $categories = get_the_category();
            if ($categories){
                $cats = array();
                foreach ($categories as $category){
                    $cats[] = $category->name;
                }
                ?>
                <span class="hentry-categories"><i class="fa fa-folder" aria-hidden="true"></i> <?php echo implode(", ",$cats);?></span>
                <?php
            }
            ?>
        </div>
    </header>

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
        <!-- post title -->
        <?php if ( get_the_title() ) : ?>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <?php endif; ?>
        <!-- /post title -->
        <div class="post-excerpt">
            <?php the_excerpt( 100 ); ?>
        </div><!-- .post-excerpt -->
    </figcaption>

</div>