<?php
$args = array( 'exclude'=>'1,176' );
$categories = get_categories( $args );
$current_cat = get_category(get_query_var('cat'),false);
$portfolio_link = get_permalink();
$all_text = 'All';

if (is_wp_error($current_cat))unset($current_cat);

if (!isset($current_cat)){
    $selected_text = $all_text;
}else{
    $selected_text = $current_cat->name;
}

?>

<ul id="posts-filter" class="dropit">
    <li>
        <small>show</small> <a class="posts-filter-item posts-filter-item-highlighted" href="#"><strong><?php echo ucfirst($selected_text);?></strong> <i class="fa fa-angle-down"></i></a>
        <ul>
            <?php

            if (isset($current_cat)){
                ?>
                <li><strong><a class="posts-filter-item posts-filter-item-current" href="<?php echo $portfolio_link;?>"><?php echo $all_text;?></a></strong></li>
                <?php
            }

            foreach ((array)$categories as $category){

                if (isset($current_cat) && ($category->term_id == $current_cat->term_id)) continue;

                $cat_link = add_query_arg(array('cat'=>$category->term_id),$portfolio_link);
                ?>
                <li><strong><a class="posts-filter-item" href="<?php echo $cat_link;?>"><?php echo ucfirst($category->name);?></a></strong></li>
                <?php
            }
            ?>
        </ul>
    </li>
</ul>