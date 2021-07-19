<?php 
/*
Template Name: lp001
*/
?>
<?php get_header('lp'); ?>
        <main>
            <section class="kv">
                <picture>
                    <source srcset="<?php the_field('kv__pc'); ?>" media="(min-width: 768px)"/>
                    <img src="<?php the_field('kv__sp'); ?>" alt="マンション投資被害・不動産投資詐欺 / その契約、白紙に戻せるかもしれません！あなたの大切なお金を取り返しましょう！">
                </picture>
            </section>
            
            
            <section class="cta">
                <div class="l-contentInner">
                    <picture class="cta__txt01">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption01__pc.svg" media="(min-width: 768px)"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption01__sp.svg" alt="契約してから時間がたつほど交渉の難易度は上がっていきます。より良い解決を得るために、今すぐお問い合わせを！">
                    </picture>
                    <?php include("include/lp001_cta.php"); ?>
                </div>
            </section>
            
            
            
            <section class="question01 l-content">
                <div class="l-contentInner">
                    <picture class="question01__txt01">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec1_catch__pc.svg" media="(min-width: 768px)"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec1_catch__sp.svg" alt="あなたは投資用マンション被害にあっているかもしれません！">
                    </picture>
                    <div class="question01__frame">
                        <img class="question01__txt02" src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec1_cap01__cmn.svg" alt="こんなお悩みありませんか？">
                        <img class="question01__img01" src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec1_img01__cmn.svg" alt="">
                        <img class="question01__img02" src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec1_img02__cmn.svg" alt="">
                        <ul class="m-list">
<?php
if(have_rows('question01_list')) :
while (have_rows('question01_list')): the_row();
        $text = get_sub_field('question01_text');
?>
                        <li class="m-listItem"><?php echo $text; ?></li>
<?php                           
endwhile;
endif;
wp_reset_postdata();
?>
                        </ul>         
                        <picture class="question01__txt03">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec1_cap02__pc.svg" media="(min-width: 768px)"/>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec1_cap02__sp.svg" alt="">
                        </picture>
                    </div>
                    <div class="e-arrow"></div>
                </div>
                <div class="l-contentBgblue">
                    <picture class="l-contentBgblueInner">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec1_img03__pc.png" media="(min-width: 768px)"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec1_img03__sp.png" alt="">
                    </picture>
                </div>
            </section>

           
           
            <section class="cta">
                <div class="l-contentInner">
                    <picture class="cta__txt01">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption02__pc.svg" media="(min-width: 768px)"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption02__sp.svg" alt="">
                    </picture>
                    <?php include("include/lp001_cta.php"); ?>
                </div>
            </section>
            
            
            
            <section class="question02 l-content">
                <div class="l-contentInner">
                    <img class="question02__txt01" src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec2_cap01__cmn.svg" alt="">
                    <div class="question02__frame">
                
                        <picture class="question02__txt02">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec2_cap02__pc.svg" media="(min-width: 768px)"/>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec2_cap02__sp.svg" alt="">
                        </picture>
                        <ul class="m-list">
<?php
if(have_rows('question02_list')) :
while (have_rows('question02_list')): the_row();
		$img = get_sub_field('question02_img');
		$text = get_sub_field('question02_text');
?>
                        <li class="m-listItem">
                            <p><?php echo $text; ?></p>
                            <img src="<?php echo $img; ?>" alt="">
                        </li>
<?php                           
endwhile;
endif;
wp_reset_postdata();
?>
                        </ul>
                    </div>
                
                <picture class="question02__txt03">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec2_cap03__pc.svg" media="(min-width: 768px)"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec2_cap03__sp.svg" alt="">
                </picture>
                </div>
            </section>
            
            
            
            <section id="case" class="l-content">
                <div class="l-contentInner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec3_title__cmn.svg" alt="">
                <p class="case__txt">投資用マンション被害を専門的に取り扱っている<br>弁護士だからこそ解決できる！</p>   
<?php
if(have_rows('case_list')) :
	while (have_rows('case_list')): the_row();
		$img_pc = get_sub_field('case_img__pc');
		$img_sp = get_sub_field('case_img__sp');
?>
                    <picture>
                        <source srcset="<?php echo $img_pc; ?>" media="(min-width: 768px)"/>
                        <img src="<?php echo $img_sp; ?>" alt="">
                    </picture>
<?php                           
endwhile;
endif;
wp_reset_postdata();
?> 
                </div>
            </section>
            
            
            
            <section class="cta">
                <div class="l-contentInner">
                    <picture class="cta__txt01">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption03__pc.svg" media="(min-width: 768px)"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption03__sp.svg" alt="">
                    </picture>
                    <?php include("include/lp001_cta.php"); ?>
                </div>
            </section>
            
            
            
            <section id="reason" class="l-content">
                <div class="l-contentInner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec4_title__cmn.svg" alt="">
                    <p class="reason__txt01">投資用マンション被害は、<br>経験豊富な弁護士にお任せください！</p>
                    
                        <ul class="m-list">
<?php
if(have_rows('reason_list')) :
$count = 1;
while (have_rows('reason_list')): the_row();
		$title = get_sub_field('reason_title');
		$img = get_sub_field('reason_img');
		$text = get_sub_field('reason_text');
?>
                        <li class="m-listItem">
                            <img src="<?php echo $img; ?>" alt="<?php echo "理由その".$count; ?>">
                            <div>
                                <div class="reason__txt02">
                                    <span><?php echo $count; ?></span>
                                    <p><?php echo $title; ?></p>
                                </div>
                                <p class="reason__txt03"><?php echo $text; ?></p>
                            </div>
                        </li>
<?php
$count++;
endwhile;
endif;
wp_reset_postdata();
?>
                        </ul>
                </div>
            </section>
            
            
            
            <section id="flow" class="l-contentBgorange">
                <div class="l-contentBgorangeInner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec5_title__cmn.svg" alt="">
                <p class="flow__txt01">担当弁護士が最適な解決方法をご提案いたします！</p>                    
                    <ul class="m-list">
<?php
if(have_rows('flow_list')) :
$count = 1;
while (have_rows('flow_list')): the_row();
		$title = get_sub_field('flow_title');
		$img = get_sub_field('flow_img');
		$text = get_sub_field('flow_text');
?>
                    <li class="m-listItem">
                        <img src="<?php echo $img; ?>" alt="">
                        <div>
                            <p class="flow__txt02"><?php echo 'STEP '.$count; ?></p>
                            <p class="flow__txt03"><?php echo $title; ?></p>
                            <p class="flow__txt04"><?php echo $text; ?></p>
                        </div>
                    </li>
<?php
$count++;
endwhile;
endif;
wp_reset_postdata();
?>
                    </ul>
                </div>
            </section>
            
            
            
            <section class="cta">
                <div class="l-contentInner">
                    <picture class="cta__txt01">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption04__pc.svg" media="(min-width: 768px)"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption04__sp.svg" alt="">
                    </picture>
                    <?php include("include/lp001_cta.php"); ?>
                </div>
            </section>
            
            
            
            <section id="price" class="l-content">
                <div class="l-contentInner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-sec6_title__cmn.svg" alt="">
                <p class="price__txt">ご相談は無料です。<br>最適なご提案を行います。安心してご相談ください。</p>
                <img src="<?php the_field('price_img'); ?>" alt="">
                </div>
            </section>
            
            
            
            <section id="qa" class="l-contentBgnavy">
                <div class="l-contentBgnavyInner">
                    <p class="qa__txt01">よくあるご質問</p>
<?php
if(have_rows('qa_list')) :
while (have_rows('qa_list')): the_row();
        $text01 = get_sub_field('qa_text01');
        $text02 = get_sub_field('qa_text02');
?>
                    <div class="qa__frame">
                        <p class="qa__txt02"><?php echo "Q ".$text01; ?></p>
                        <p class="qa__txt03"><?php echo $text02; ?></p>
                    </div>
<?php                           
endwhile;
endif;
wp_reset_postdata();
?>
                </div>
            </section>
            
            
            
            <section id="info" class="l-content">
                <div class="l-contentInner">
                <p class="info__txt01">事務所のご案内</p>
                <table>
<?php
if(have_rows('info_list')) :
while (have_rows('info_list')): the_row();
        $title = get_sub_field('info_title');
?>              
		        <tr class="info__txt02">
			        <th colspan="2"><?php echo $title; ?></th>
		        </tr>
                <?php
                if(have_rows('info_listitem')) :
                while (have_rows('info_listitem')): the_row();
                $text01 = get_sub_field('info_text01');
                $text02 = get_sub_field('info_text02');
                ?>
                <tr class="info__txt03">
                    <td><?php echo $text01; ?></td>
                    <td><?php echo $text02; ?></td>
                </tr>
                <?php                           
                endwhile;
                endif;
                wp_reset_postdata();
                ?>
<?php                           
endwhile;
endif;
wp_reset_postdata();
?>
                </table>
                </div>
            </section>
            
            
            
            <section class="cta">
                <div class="l-contentInner">
                    <picture class="cta__txt01">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption01__pc.svg" media="(min-width: 768px)"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-cta-caption01__sp.svg" alt="">
                    </picture>
                    <?php include("include/lp001_cta.php"); ?>
                </div>
            </section>
            
            
            
            <section id="action" class="l-content">
                <div class="l-contentInner">
                    <div class="line">
                        <img class="line__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/e-line_img__cmn.svg" alt="">
                        <div>
                            <p class="line__txt01">LINE公式アカウント</p>
                            <p class="line__txt02">24時間いつでもお問い合わせください。受付後１営業日以内に返信させていただきます。土日祝日、夜間でもラインで問い合わせいただければ、可能な限り迅速に対応させていただきます。</p>
                            <a class="line__btn" href="">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-line_btn__pc.svg" media="(min-width: 768px)"/>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-line_btn__sp.svg" alt="">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="tel">
                        <a href="">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/e-tel_btn__pc.svg" media="(min-width: 768px)"/>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-tel_btn__sp.svg" alt="">
                            </picture>
                        </a>
                    </div>
                </div>
            </section>
            
        
            
            <section id="form" class="l-contentBgorange">
                <div class="l-contentBgorangeInner">
                    <h2 class="form__txt01">メールでお問い合わせ</h2>
                    <p class="form__txt02">お問合せは、こちらのフォームから<br class="sp">24時間いつでも送信可能です。<br>ご希望の返信方法にて、<br class="sp">事務所よりご連絡いたします。</p>
                    <p class="form__txt03">必須項目を入力し、<br class="sp">「お問い合わせ内容確認画面へ進む」ボタンを<br class="sp">押してください。</p>
                    <?php echo do_shortcode( '[contact-form-7 id="56" title="contact"]' ); ?>
                </div>
            </section>
        </main>
<?php get_footer(); ?>