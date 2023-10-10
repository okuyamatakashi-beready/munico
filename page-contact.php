<?php get_header(); ?>

<main id="main">
	<div class="main_container">
		<div class="sidebar">
			<h2>CONTACT</h2>

		</div>
		<!-- //sidebar -->

        

        <div class="contact">
            <div class="main_content">
                <h2 class="sp_ttl sp">CONTACT</h2>
                <?php echo do_shortcode('[contact-form-7 id="444" title="munico様お問い合わせフォーム"]'); ?>

                <!-- <dl>
                    <dt>お名前 *</dt>
                    <dd>[text* namae]</dd>
                </dl>
                <dl>
                    <dt>フリガナ</dt>
                    <dd>[text furigana]</dd>
                </dl>
                <dl>
                    <dt>メールアドレス *</dt>
                    <dd>[email* email]</dd>
                </dl>
                <dl>
                    <dt>お電話番号</dt>
                    <dd>[tel tel-number]</dd>
                </dl>
                <dl>
                    <dt>お問い合わせ内容 *</dt>
                    <dd>[textarea* naiyo]</dd>
                </dl>

                <div class="btn_wrap">
                [submit class:contact_btn "確認"]
                </div> -->
            </div>
        </div>
        <!-- /contact -->
	</div>
	<!-- //main_container -->
</main>

<?php get_footer(); ?>