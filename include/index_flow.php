<?php
/*

flow

*/

$the_query = new WP_Query( array(
	'post_type' => 'flow',
	'posts_per_page' => -1,
	'order' => 'asc',
) );


if ( $the_query->have_posts() ) :

$number = 0
?>


					    <ul class="l-bcBlue">


<?php
	while ( $the_query->have_posts() ) : $the_query->the_post();

		global $post;
		$post_id = get_the_ID();

		// カテゴリの取得
		$cat_list = get_the_terms($post_id, 'cat_flow');
		$cat_label = '';
        
		if (is_array($cat_list)) {
            if ( count( $cat_list ) > 0 ) 
            $cat_label = $cat_list[0]->name;
		}
                        
        $flow_title  = get_field('flow_title');
        $flow_text  = get_field('flow_text');
        $flow_icon  = get_field('flow_icon');
        $number++;
?>

				            <li class="e-tcWhite e-parent">
                                <p class="e-catch">0<?php echo $number; ?></p>
    				            <p class="e-cap"><?php echo $flow_title; ?></p>
    				            <p class="e-txt"><?php echo $flow_text; ?></p>
    				            <img class="e-child"src="<?php echo $flow_icon; ?>" alt=""> 				            
				    	    </li>

<?php
	endwhile;
?>

      
					    </ul>

<?php
endif;

// 投稿データをリセット
wp_reset_postdata();

