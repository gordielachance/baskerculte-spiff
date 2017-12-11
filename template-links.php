<?php
/*
 Template Name: CC Links
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div class="wrapper section medium-padding">						

	<div class="section-inner">
            	
		<div class="content fleft">
					
			<div <?php post_class('single post notice'); ?>>
			
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                    <div class="post-header">

                                        <h2 class="post-title"><?php the_title(); ?></h2>

                                </div> <!-- /post-header -->

                                    <?php if($post->post_content != "") : ?>

                                            <div class="post-content">

                                                    <?php the_content(); ?>

                                            </div> <!-- /post-content -->

                                    <?php endif; ?>


                            <?php endwhile; endif; ?>
                                                
                            <hr class="dashed"/>
                            <div id="cc-links">
                                <?php 
                                        $args = array(
                                                'orderby'    	=> 'rand', 
                                                'exclude'	=>  120, //networks 
                                        );
                                        $bookmarks = get_bookmarks( $args );
                                        foreach((array)$bookmarks as $bookmark){
                                            $cc_bookmark = $bookmark;
                                            $cc_bookmark->category_name = $term->name;
                                            ?>
                                            <div class="cc-bookmark">
                                                <a href="<?php echo $cc_bookmark->link_url; ?>" rel="bookmark" target="_blank" title="<?php echo $cc_bookmark->link_name; ?>">
                                                    <figure>
                                                        <?php if ( $cc_bookmark->link_image ) : ?>
                                                        <img src="<?php echo $cc_bookmark->link_image;?>"/>
                                                        <?php endif; ?>
                                                        <figcaption>
                                                        <h4 class="bookmark-title"><?php echo $cc_bookmark->link_name; ?></h4>
                                                        <span class="bookmark-category"><?php echo $cc_bookmark->category_name;?></span>
                                                        <p class="bookmark-description"><?php echo $cc_bookmark->link_description; ?></p>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                ?>
                            </div>
	
			</div> <!-- /post -->
				
		</div> <!-- /content -->
		
		<?php get_sidebar(); ?>
			
		<div class="clear"></div>
	
	</div> <!-- /section-inner -->
	
</div> <!-- /wrapper -->
								
<?php get_footer(); ?>