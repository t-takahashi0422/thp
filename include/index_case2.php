<?php
/*

case

*/

$the_query = new WP_Query( array(
	'post_type' => 'case2',
	'posts_per_page' => 3,
) );

if ( $the_query->have_posts() ) :
?>


                    <div class="m-slide">
					    <ul class="m-slideList">


<?php
	while ( $the_query->have_posts() ) : $the_query->the_post();

		global $post;
		$post_id = get_the_ID();

		// カテゴリの取得
		$cat2_list = get_the_terms($post_id, 'cat_case2');
		$cat2_label = '';
        
		if (is_array($cat2_list)) {
            if ( count( $cat2_list ) > 0 ) 
            $cat2_label = $cat2_list[0]->name;
		}
                        
        $case2_text  = get_field('case2_text');

?>

				            <li class="m-slideListItem">
    				            <p class="e-cap"><?php echo $case2_text; ?></p>
				    	    </li>

<?php
	endwhile;
?>
					    </ul>
                    </div>

<?php
endif;

// 投稿データをリセット
wp_reset_postdata();

