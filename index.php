<?php get_header(); ?>
        <main>
        
<!--キービジュアル-->
            <section id="hero" class="l-hero">
                <div class="b-widthS b-paddingBottom">
                    <img class="b-imgL" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.svg" alt="">
                    <div class="b-txt">
                        <p class="e-cap">投資用マンションを購入して後悔していませんか？</p>
                        <h2 class="e-catch">それって<br>「投資用マンション被害」!?</h2>
                        <p class="e-cap">専門の弁護士が契約解消・売却をサポートします！</p>
                    </div>
                    <div class="b-widthS l-heroPoint">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_point_01.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_point_02.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_point_03.svg" alt="">
                    </div>
                </div>
            </section>
<!--キービジュアル-->
            <section id="may" class="l-contents l-bcBlue">
                <div class="b-widthL m-parallaxX">
                    <img class="m-parallaxItem" src="<?php echo get_template_directory_uri(); ?>/assets/img/may.svg" alt="">
                </div>
                <div class="b-txt b-padding">
                    <p class="e-catch e-tcWhite">あなたは<br>投資用マンション被害に<br>あっているかもしれません。</p>
                    <p class="e-cap e-tcWhite">不動産問題に精通している弁護士が<br>親身になって丁寧に対応します。<br>契約解消、売却のお手伝いなど、<br>身内よりも優しく丁寧に、<br>あなたの不安を解消するために尽力いたします。</p>
                </div>
            </section>
            <section id="question" class="l-contents l-bcDgray l-arrow">
                <div class="b-widthL m-parallaxX">
                    <img class="m-parallaxItem" src="<?php echo get_template_directory_uri(); ?>/assets/img/question.svg" alt="">
                </div>
                <div class="b-txt b-paddingArrow e-tcWhite">
                    <p class="e-catch">こんなお悩みは、ありませんか？</p>
                    <ul class="m-list">
                        <li class="m-listItem b-grid"><p class="e-txt">不動産会社から言われるままに購入してしまった</p></li>
                        <li class="m-listItem b-grid"><p class="e-txt">将来のためにと思い投資用マンションを購入をしたが、不安でしょうがない。</p></li>
                        <li class="m-listItem b-grid"><p class="e-txt">強引な勧誘を受けて物件を購入してしまったが、無かった事にしたい</p></li>
                        <li class="m-listItem b-grid"><p class="e-txt">節税対策になるって言われたから購入したのに・・・</p></li>
                        <li class="m-listItem b-grid"><p class="e-txt">資産になるどころか毎月の持ち出し金が増えて返済が苦しい。</p></li>
                    </ul>
                </div>
            </section>
            <section id="case" class="l-contents l-bcGray l-arrow">
                <div class="b-txt b-paddingBottom">
                    <p class="e-catch e-tbOrange">そんなあなたの悩みに、<br>弁護士法人ＴＨＰが親身に<br>相談に乗ります。</p>
                    <p class="e-cap">他人に悩みを話すことは、勇気がいることかもしれませんが、あなたの幸せな生活を取り戻すために一度お話を聞かせてください。</p>
                </div>
                <div class="b-widthM b-paddingArrow">
                    <h2 class="e-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_title.svg" alt=""></h2>
                    <?php include("include/index_case.php"); ?>
                </div>
            </section>
            <section id="reason" class="l-contents">
                <div class="b-widthM b-paddingTop">
                    <h2 class="e-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason_title.svg" alt=""></h2>
                    <?php include("include/index_reason.php"); ?>
<!--include acf-->
                </div>
            </section>
            <section id="flow" class="l-contents">
                <div class="b-widthS b-padding">
                    <h2 class="e-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_title.svg" alt=""></h2>
                    <?php include("include/index_flow.php"); ?>
                </div>
            </section>
            <section id="price" class="l-contents">
                <div class="b-widthS b-paddingBottom">
                    <h2 class="e-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/price_title.svg" alt=""></h2>
                            <table class="m-tbl e-cap">
	                            <tbody>
                                    <tr><td colspan="2">通常プラン</td></tr>
		                            <tr><td>着手金</td><td>３０万円/税別</td></tr>
		                            <tr><td>成果報酬</td><td>４％〜</td></tr>
                                </tbody>
                            </table>
                </div>
            </section>
            <section id="qa" class="l-contents l-bcBlue">
                <div class="b-widthS b-paddingTop">
                    <h2 class="e-title e-tcWhite"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/qa_title.svg" alt=""></h2>
                    <?php include("include/index_qa.php"); ?>
                </div>
                <div class="b-widthS b-paddingBottom">
                    <img class="b-imgL" src="<?php echo get_template_directory_uri(); ?>/assets/img/qa.svg" alt="">
                    <p class="e-tcWhite e-cap">投資マンション被害増えてます</p>
                    <p class="e-tcWhite e-txt">投資用マンションの被害は、年々増加しています。断り切れず契約してしまい、後悔している人が後を立ちません。</p>
                </div>
            </section>
            <section id="cv" class="l-contents l-bcGray">
                <div class="b-widthS b-padding e-parent">
                    <p class="e-catch e-tbOrange">契約してから時間がたつほど交渉の難易度は上がっていきます。より良い解決を得るために、今すぐお問い合わせを！</p>
                    <img class="e-child" src="<?php echo get_template_directory_uri(); ?>/assets/img/cv.svg" alt="">
                </div>
                <?php include("include/index_form.php"); ?>
            </section>
        </main>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script>
            $(function(){
                function sliderSetting(){
 
                    var width = $(window).width();
 
                    if(width <= 768){
                        $('.m-slideList').not('.slick-initialized').slick({
                            autoplay: true,
                            fade: false,
                            dots: false,
                            arrows: true,
                            autoplay: false
                        });
                    } else {
                        $('.m-slideList.slick-initialized').slick('unslick');
                    }
                }
 
                sliderSetting();
 
                $(window).resize( function() {
                    sliderSetting();
                });
            });
        </script>
<?php get_footer(); ?>