<?php get_header(); ?>

<main id="main">
	<div class="main_container">
		<div class="sidebar">
			<h2>ABOUT</h2>
			<ul>
				<li>
					<a href="/cat_movie/promotion" id="profile_link" class="js_typing">Profile</a>
				</li> 
				<li>
					<a href="" id="story_link" class="js_typing">Story</a>
				</li>
				<li>
					<a href="" id="price_link" class="js_typing">Price</a>
				</li>
				<li>
					<a href="" id="contact_link" class="js_typing">Contact</a>
				</li>
			</ul>
		</div>
		<!-- //sidebar -->

		<div class="main_content">
            <h2 class="sp_ttl sp">ABOUT</h2>
            <section id="profile" class="profile_wrap now">
                <span class="profile_ttl_sp sp">Profile</span>
                <h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="munico">
                </h1>
            
                <ul>
                    <li>
                        <p>フリーランスクリエイター</p>
                        <a href="" target="_blank">@munico_625</a>
                    </li>

                    <li><p>photo｜movie｜illustration｜animation｜<br class="sp">graphic design</p></li>

                    <li>
                        <p>
                            会社名　株式会社munico<br>
                            設立　2021/2/2
                        </p>
                    </li>
                </ul>
            </section>
            <!-- /profile_wrap  -->

            <section id="story" class="story_wrap now">
                <h2>Story</h2>
                <p>
                municoとして活動するまでの経歴だったり、現在の思いやビジョンなど、簡単なストーリーをご紹介できるといいなと思います。municoとして活動するまでの経歴だったり、現在の思いやビジョンなど、簡単なストーリーをご紹介できるといいなと思います。municoとして活動するまでの経歴だったり、現在の思いやビジョンなど、簡単なストーリーをご紹介できるといいなと思います。municoとして活動するまでの経歴だったり、現在の思いやビジョンなど、簡単なストーリーをご紹介できるといいなと思います。municoとして活動するまでの経歴だったり、現在の思いやビジョンなど、簡単なストーリーをご紹介できるといいなと思います。municoとして活動するまでの経歴だったり、現在の思いやビジョンなど、簡単なストーリーをご紹介できるといいなと思います。municoとして活動するまでの経歴だったり、現在の思いやビジョンなど、簡単なストーリーをご紹介できるといいなと思います。
                </p>
            </section>
            <!-- /story_wrap -->

		</div>
		<!-- //main_content -->

        <section id="price" class="price_wrap now">
            <div class="main_content">
                <h2>Price</h2>
                <dl>
                    <dt><span>セット（素材撮影・動画制作）</span><br class="sp">¥00,000〜</dt>
                    <dd>
                        （内訳）<br>
                        ディレクション費<br>
                        撮影（スタジオ/ヘアメイク/モデル手配）<br>
                        動画制作
                    </dd>
                </dl>
                <dl>
                    <dt><span>単品（素材撮影のみ）</span><br class="sp">¥00,000〜</dt>
                    <dd>
                        （内訳）<br>
                        ディレクション費<br>
                        撮影（スタジオ/ヘアメイク/モデル手配）<br>
                        動画制作
                    </dd>
                </dl>
                <dl>
                    <dt><span>提供素材での動画制作</span><br class="sp">¥00,000〜</dt>
                    <dd>
                        （内訳）<br>
                        ディレクション費<br>
                        撮影（スタジオ/ヘアメイク/モデル手配）<br>
                        動画制作
                    </dd>
                </dl>
            </div>
            <!-- /main_content -->
        </section>
        <!-- /price_wrap -->

        <section id="contact" class="contact now">
            <div class="main_content">
                <h2>Contact</h2>
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
        </section>
        <!-- /contact -->
	</div>
	<!-- //main_container -->
</main>

<?php get_footer(); ?>