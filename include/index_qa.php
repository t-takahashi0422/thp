<?php
/*

qa

*/

$the_query = new WP_Query( array(
	'post_type' => 'qa',
	'posts_per_page' => -1,
	'order' => 'asc',
) );

?>
                        <dl class="m-acc">
<?php
if(have_rows('qa_list', 40)) :
	while (have_rows('qa_list', 40)): the_row();
		$qa_question = get_sub_field('qa_question');
        $qa_answer   = get_sub_field('qa_answer');
?>
                            <div class="m-accList">
                                <dt class="m-accListQ e-cap"><?php echo $qa_question; ?></dt>
                                <dd class="m-accListA e-txt"><?php echo $qa_answer; ?></dd>
                            </div>
<?php                           
	endwhile;
?>
                        </dl>
<?php
endif;

// 投稿データをリセット
wp_reset_postdata();

