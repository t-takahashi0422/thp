<?php
/*

reason

*/

$the_query = new WP_Query( array(
	'post_type' => 'reason',
	'posts_per_page' => 3,
) );

if ( $the_query->have_posts() ) :
?>
				    <ul>
<?php
	while ( $the_query->have_posts() ) : $the_query->the_post();

		global $post;
		$post_id = get_the_ID();

		// カテゴリの取得
		$cat_list = get_the_terms($post_id, 'cat_reason');
		$cat_label = '';
        
		if (is_array($cat_list)) {
            if ( count( $cat_list ) > 0 ) 
            $cat_label = $cat_list[0]->name;
		}
                        
        $reason_img   = get_field('reason_img');
        $reason_lead  = get_field('reason_lead');
        $reason_text  = get_field('reason_text');

?>

				        <li>
				            <img src="<?php echo $reason_img; ?>" alt="">
    				        <p class="e-cap e-tbOrange"><?php echo $reason_lead; ?></p>
    				        <p class="e-txt"><?php echo $reason_text; ?></p>
				        </li>

<?php
	endwhile;
?>    
				    </ul>
<?php
endif;

// 投稿データをリセット
wp_reset_postdata();

