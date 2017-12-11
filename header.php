<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
						 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>

		<header class="section no-padding bg-dark">
		
			<div class="header-inner section-inner">
			
                <?php
                if ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) {
                    ?>
					<h1 class="blog-title">
						<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ) . ' &mdash; ' . esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
					</h1>
                    <?php
                }
                ?>
                
				<div class="nav-toggle fleft hidden">
					
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
					
					<div class="clear"></div>
					
				</div>		
				<ul class="main-menu">
				
					<?php 
					
					if ( has_nav_menu( 'primary' ) ) {

						$nav_args = array( 
							'container' 		=> '', 
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'primary', 
							'walker' 			=> new baskerculte_nav_walker,
						);
																		
						wp_nav_menu( $nav_args ); 

					} else {

						$list_pages_args = array(
							'container' => '',
							'title_li' 	=> '',
						);
					
						wp_list_pages( $list_pages_args );
						
					} 
					
					?>
											
				 </ul><!-- .main-menu -->
                
                <!--search -->
                <?php get_template_part( 'searchform' ); ?>
				 
				 <div class="clear"></div>
				 
			</div><!-- .navigation-inner -->
			
		</header><!-- .navigation -->
		
		<div class="mobile-navigation section bg-graphite no-padding hidden">
					
			<ul class="mobile-menu">
			
				<?php

				if ( has_nav_menu( 'primary' ) ) {
																	
					wp_nav_menu( $nav_args ); 

				} else {
				
					wp_list_pages( $list_pages_args );
					
				} 
				
				?>
										
			 </ul><!-- .main-menu -->
		
		</div><!-- .mobile-navigation -->