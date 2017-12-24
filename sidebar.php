<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

	<div class="sidebar fleft" role="complementary">
	
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		
	</div><!-- .sidebar -->

<?php } ?>
<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>

	<div class="sidebar fleft" role="complementary">
	
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		
	</div><!-- .sidebar -->

<?php } ?>