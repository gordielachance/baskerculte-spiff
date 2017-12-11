<?php
/**
 * The Loops Template: CC Films List
 *
 * Display a post title and excerpt
 *
 * The "The Loops Template:" bit above allows this to be selectable
 * from a dropdown menu on the edit loop screen.
 *
 * @package The Loops
 * @since 0.2
 */
?>

<div class="tl-loop cc-films-loop">
    <?php if ( have_posts() ) : ?>

            <?php while( have_posts() ) : the_post(); ?>
    
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                        <div class="post-thumbnail">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php endif; ?>
                        </div>
                        <div class="post-excerpt">
                            <h4 class="post-title"><?php the_title(); ?></h4>
                        </div>
                        
                    </a>
                </article>


            <?php endwhile; ?>

    <?php else : ?>

            <div class="tl-not-found"><?php tl_not_found_text(); ?></div>

    <?php endif; ?>

    <div class="tl-pagination"><?php tl_pagination(); ?></div>

</div>
