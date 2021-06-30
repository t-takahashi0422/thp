<?php
/*

reason

*/
?>				   

                <div id="form" class="m-form b-widthS">
                    <div class="m-formLine">
                        <div class="m-formLineTxt">
                            <h2 class="e-cap">LINEで相談する</h2>
                            <a class="e-catch" href="https://line.me/ti/p/2sMyFpUjAY">友達追加はこちら</a>
                            <hr>
                            <span>24時間いつでもお問い合わせください。受付後１営業日以内に必ず返信させていただきます。<br class="pc">土日祝日、夜間でもラインで問い合わせいただければ、可能な限り迅速に対応させていただきます。</span>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line.svg" alt="">
                    </div>
                    <div class="m-formTell">
                        <p class="e-cap">電話でお問い合わせ</p>
                        <a class="e-catch" href="tel:05031597776">050-3159-7776</a>
                        <span class="e-txt">10:00 ~ 19:00（土日祝を除く）</span>
                    </div>
                    <hr>
                    <div class="b-paddingBottom">
                        <?php echo do_shortcode( '[contact-form-7 id="56" title="contact"]' ); ?>
                    </div>
                </div>