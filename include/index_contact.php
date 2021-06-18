<?php
/*

case

*/

$the_query = new WP_Query( array(
	'post_type' => 'case',
	'posts_per_page' => 3,
) );

if ( $the_query->have_posts() ) :
?>


                    <div class="m-slide b-widthS">
					    <ul class="m-slideList">


<?php
	while ( $the_query->have_posts() ) : $the_query->the_post();

		global $post;
		$post_id = get_the_ID();

		// カテゴリの取得
		$cat_list = get_the_terms($post_id, 'cat_case');
		$cat_label = '';
        
		if (is_array($cat_list)) {
            if ( count( $cat_list ) > 0 ) 
            $cat_label = $cat_list[0]->name;
		}
                        
        $case_img   = get_field('case_img');
        $case_text  = get_field('case_text');

?>

				            <li class="m-slideListItem">
				                <img src="<?php echo $case_img; ?>" alt="">
    				            <p><?php echo $case_text; ?></p>
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

