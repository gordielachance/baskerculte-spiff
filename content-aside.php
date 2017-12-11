<div class="post-excerpt">

	<?php the_excerpt( 100 ); ?>

</div><!-- .post-excerpt -->

<?php if ( is_sticky() ) echo '<span class="sticky-post">' . __( 'Sticky post', 'baskerculte' ) . '</span>'; ?>

<?php baskerculte_meta(); ?>

<div class="clear"></div>