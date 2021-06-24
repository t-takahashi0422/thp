<?php
/*

case

*/

$the_query = new WP_Query( array(
	'post_type' => 'case',
	'posts_per_page' => 3,
) );
?>
                    <div class="m-slide">
					    <ul class="m-slideList">
<?php
if(have_rows('case_list', 68)) :
	while (have_rows('case_list', 68)): the_row();
		$case_img = get_sub_field('case_img');
        $case_text01   = get_sub_field('case_text01');
        $case_text02   = get_sub_field('case_text02');
?>
                            <li class="m-slideListItem">
                                <div class="m-slideListItemImg">
				                    <img src="<?php echo $case_img; ?>" alt="">
				                </div>
				                <div class="m-slideListItemTxt">
    				                <p class="e-text"><?php echo $case_text01; ?></p>
    				                <p class="e-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_material.svg" alt=""></p>
    				                <p class="e-cap"><?php echo $case_text02; ?></p>
                                </div>
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

