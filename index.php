<?php get_header(); ?>

<div class="content">

    <div class="page-title">
    <?php

    //posts header

    $title = null;
    $subtitle = null;

    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $pagination = ( $paged > 1 ) ? sprintf( __( 'Page %s of %s', 'baskerculte' ), $paged, $wp_query->max_num_pages ) : null;

    if ( is_search() ){

        $title = __( 'Search results', 'baskerculte');
        $subtitle = sprintf( '"%s"', get_search_query() );

    }elseif( is_archive() ){
        if ( is_day() ){
            $title = __( 'Date', 'baskerculte' );
            $subtitle = get_the_date();
        }elseif ( is_month() ){
            $title = __( 'Month', 'baskerculte' );
            $subtitle = get_the_date('F Y');
        }elseif( is_year() ){
            $title = __( 'Year', 'baskerculte' );
            $subtitle = get_the_date('Y');
        }elseif( is_category() ){
            $title = __( 'Category', 'baskerculte' );
            $subtitle = single_cat_title( '', false );
        }elseif( is_tag() ){
            $title = __( 'Tag', 'baskerculte' );
            $subtitle = single_tag_title( '', false );
        /*
        if ( $tag_description = tag_description() ) {
            echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
        }
        */

        }elseif( is_author() ){
            $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
            $title = __( 'Author', 'baskerculte' );
            $subtitle = $curauth->display_name;
        }
    }

    if ($title){
        printf('<h5>%s</h5>',$title);
    }
    if ($subtitle){
        printf('<h3>%s</h3>',$subtitle);
    }
    if ($pagination){
        printf('<h5 class="title-pagination">%s</h5>',$pagination);
    }
    ?>
</div>

    <?php if ( have_posts() ) : ?>

        <div class="posts infinite-posts grid-posts">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="post-container">

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <?php get_template_part( 'content', get_post_format() ); ?>

                    </article><!-- .post -->

                </div>

            <?php endwhile; ?>

        <?php endif; ?>

    </div><!-- .posts -->

    <?php if ( $wp_query->max_num_pages > 1 ) : ?>

        <div class="archive-nav section-inner">

            <?php echo get_next_posts_link( '&laquo; ' . __( 'Older posts', 'baskerculte' ) ); ?>

            <?php echo get_previous_posts_link( __( 'Newer posts', 'baskerculte') . ' &raquo;' ); ?>

            <div class="clear"></div>

        </div><!-- .post-nav archive-nav -->

    <?php endif; ?>

</div>      	        
<?php get_footer(); ?>