<header id="sidebar-1" class="sidebar fleft" role="complementary">

    <?php
    if ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) {
        ?>
        <h1 class="blog-title">
            <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ) . ' &mdash; ' . esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
        </h1>
        <?php
    }
    ?>
    <?php

    global $bp;

    //force define BP displayed user so we can show the BP sidebar
    if ( !bp_displayed_user_id() && bp_loggedin_user_id() ){
        $bp->displayed_user = $bp->loggedin_user;
    }

    if ( bp_displayed_user_id() ){
        ?>

        <div class="widget widget-bp-account">
            <div id="item-header" role="complementary">

                <?php
                /**
                 * If the cover image feature is enabled, use a specific header
                 */
                if ( bp_displayed_user_use_cover_image_header() ) :
                    bp_get_template_part( 'members/single/cover-image-header' );
                else :
                    bp_get_template_part( 'members/single/member-header' );
                endif;
                ?>

            </div><!-- #item-header -->

            <div id="item-nav">
                <div class="item-list-tabs no-ajax" id="object-nav" aria-label="<?php esc_attr_e( 'Member primary navigation', 'buddypress' ); ?>" role="navigation">
                    <ul>

                        <?php 
                        if ( bp_displayed_user_id() == bp_loggedin_user_id() ){
                            bp_get_loggedin_user_nav();
                        }else{
                            bp_get_displayed_user_nav();
                        }

                        ?>

                        <?php

                        /**
                         * Fires after the display of member options navigation.
                         *
                         * @since 1.2.4
                         */
                        do_action( 'bp_member_options_nav' ); ?>

                    </ul>
                </div>
            </div><!-- #item-nav -->
        </div>
        <?php
    }else{ //no user displayed
        ?>
        <aside id="buddypress-sidebar" class="bp-sidebar sidebar fleft" role="complementary">
            Register now !
        </aside>
        <?php
    }
    ?>
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>

<?php }else{ ?>
		
    <div id="search" class="widget widget_search">

        <div class="widget-content">

            <?php get_search_form(); ?>

        </div>

    </div><!-- .widget_search -->

    <div class="widget widget_recent_entries">

        <div class="widget-content">

            <h3 class="widget-title"><?php _e("Latest posts", "baskerculte") ?></h3>

            <ul>
                <?php
                    $args = array( 'numberposts' => '5', 'post_status' => 'publish' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        echo '<li><a href="' . get_permalink( $recent["ID"]) . '" title="' . esc_attr( $recent["post_title"]).'" >' .   $recent["post_title"] . '</a></li>';
                    }
                ?>
            </ul>

        </div>

        <div class="clear"></div>

    </div><!-- .widget_recent_entries -->

    <div class="widget widget_text">

        <div class="widget-content">

            <h3 class="widget-title"><?php _e( "Text widget", "baskerculte" ); ?></h3>

            <div class="textwidget">

                <p><?php _e( "These widgets are displayed because you haven't added any widgets of your own yet. You can do so at Appearance > Widgets in the WordPress settings.", "baskerculte" ); ?></p>

            </div>	

        </div>

        <div class="clear"></div>

    </div><!-- .widget_recent_entries -->
								
	

<?php
}
?>
</header><!-- .sidebar -->
<?php /*if ( is_active_sidebar( 'sidebar-2' ) ) { ?>

	<aside id="sidebar-2" class="sidebar fleft" role="complementary">
	
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		
	</aside><!-- .sidebar -->

<?php }*/ ?>

<?php

if ( bp_displayed_user_id() ){
    ?>

    <aside id="buddypress-sidebar" class="bp-sidebar sidebar fleft" role="complementary">
        <div id="item-header" role="complementary">

            <?php
            /**
             * If the cover image feature is enabled, use a specific header
             */
            if ( bp_displayed_user_use_cover_image_header() ) :
                bp_get_template_part( 'members/single/cover-image-header' );
            else :
                bp_get_template_part( 'members/single/member-header' );
            endif;
            ?>

        </div><!-- #item-header -->

        <div id="item-nav">
            <div class="item-list-tabs no-ajax" id="object-nav" aria-label="<?php esc_attr_e( 'Member primary navigation', 'buddypress' ); ?>" role="navigation">
                <ul>

                    <?php 
                    bp_get_displayed_user_nav();

                    /**
                     * Fires after the display of member options navigation.
                     *
                     * @since 1.2.4
                     */
                    do_action( 'bp_member_options_nav' ); ?>

                </ul>
            </div>
        </div><!-- #item-nav -->
    </aside>
    <?php
}else{ //no user displayed
    ?>
    <aside id="buddypress-sidebar" class="bp-sidebar sidebar fleft" role="complementary">
    </aside>
    <?php
}


