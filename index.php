
<!DOCTYPE html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name=”description” content="3月21日は、1万人で「3・2・1・いただきます！ 」をしましょう。One Dining Table FES.は、「いただきます」は楽しい。を知ってもらうためのイベントです。美味しいものを食べること、大切な人と一緒に食べること、皆で食べることって楽しい！ それができるしあわせを改めて感じられるイベントにしていきます。目指せ、1万人でいただきます。">
    
    <title> </title>


    <!-- CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/scss/main.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" id="favicon">

    <link rel="stylesheet" href="https://use.typekit.net/hts1iis.css">

    
    <?php wp_head(); ?>
</head>
<body>

<header id="header" class="flex">

<a href="" class="h_logo sp">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
</a>

    <nav class="gnav pc">
        <a href="" class="h_logo pc">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
        </a>
        <ul class="center_nav flex pc_flex">
            <li>
                <a href="/movie" class="js_typing">MOVIE</a>
            </li>
            <li>
                <a href="/photo" class="js_typing">PHOTO</a>
            </li>
            <li>
                <a href="/brand" class="js_typing">BRAND</a>
            </li>
            <li>
                <a href="/salon" class="js_typing">SALON</a>
            </li>
            <li>
                <a href="/company" class="js_typing">COMPANY</a>
            </li>
            <li>
                <a href="/photo" class="js_typing">ABOUT</a>
            </li>
            <li>
                <a href="/photo" class="js_typing">CONTACT</a>
            </li>

        </ul>


    </nav>

    <div class="sp_nav sp">
        <dl class="active">
            <dt><a href="/movie">MOVIE</a></dt>
            <dd>
                <ul class="flex">
                    <li>
                        <a href="/cat_movie/promotion">- Promotion</a>
                    </li> 
                    <li>
                        <a href="/cat_movie/interview">- Interview</a>
                    </li>
                    <li>
                        <a href="/cat_movie/seminar">- Seminar</a>
                    </li>
                    <li>
                        <a href="/cat_movie/crosstalk">- Crosstalk</a>
                    </li>
                    <li>
                        <a href="/cat_movie/recruit">- Recruit</a>
                    </li>
                    <li>
                        <a href="/cat_movie/reel">- Reel</a>
                    </li>
                    <li>
                        <a href="/cat_movie/youtube">- Youtube</a>
                    </li>
                    <li>
                        <a href="/cat_movie/wedding">- Wedding</a>
                    </li>
                    <li>
                        <a href="/cat_movie/closecoverage">- Close coverage</a>
                    </li>
                    <li>
                        <a href="/cat_movie/entertainment">- Entertainment</a>
                    </li>
                </ul>
            </dd>
        </dl>
        <dl class="active">
            <dt><a href="/photo">PHOTO</a></dt>
            <dd>
                <ul class="flex">
                    <li>
                        <a href="/cat_photo/look">Look</a>
                    </li> 
                    <li>
                        <a href="/cat_photo/salonmodel">Salon model</a>
                    </li>
                    <li>
                        <a href="/cat_photo/product/">Product</a>
                    </li>
                    <li>
                        <a href="/cat_photo/wedding">Wedding</a>
                    </li>
                    <li>
                        <a href="/cat_photo/creative">Creative</a>
                    </li> 
                    <li>
                        <a href="/cat_photo/staff">Staff</a>
                    </li>
                    <li>
                        <a href="/cat_photo/salon">Salon</a>
                    </li>
                </ul>
            </dd>
        </dl>
        <dl>
            <dt>SEMINAR</dt>
            <dd>

            </dd>
        </dl>
    </div>
    <!-- //sp_nav -->
</header>


<div id="toggle">
    <div class="toggle_wrap">
        <span></span>
        <span></span>
    </div>
</div>

<div class="fixed_insta_link">
    <a href="" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/insta_icon.svg" alt="">
    </a>
</div>

<div class="top_border"></div>
<div class="right_border"></div>
<div class="bottom_border"></div>
<div class="left_border"></div>

<main>

    <section id="movie">
        <h1 class="sec_ttl">
            <span>MOVIE</span>
            <small>動画</small>
        </h1>
        <div class="top_container">
            <div class="movie_work_list">
                <ul class="flex">

                <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                    $args = array(
                        'posts_per_page' => '6', //表示件数。-1なら全件表示
                        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                        'paged' => $paged,
                        'post_type' => 'work-movie',
                            );
                ?>
                <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                <?php if ( $wp_query->have_posts() ) :

                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="thumbnail bg" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
                            <h3 class="works_title"><?php the_title(); ?></h3>
                        </a>
                    </li>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>	

                </ul>
            </div>
            <!-- //work_list -->

            <a href="/movie" class="more_btn">MORE</a>
        </div>
        <!-- //top_container -->
    </section>

    <section id="photo">
        <h1 class="sec_ttl">
            <span>PHOTO</span>
            <small>写真</small>
        </h1>
        <div class="top_container">

            <div class="movie_work_list photo_work_list">
				<ul class="flex">

                <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                    $args = array(
                        'posts_per_page' => '15', //表示件数。-1なら全件表示
                        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                        'paged' => $paged,
                        'post_type' => 'work-photo',
                            );
                ?>
                <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                <?php if ( $wp_query->have_posts() ) :

                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
                            <div class="thumbnail bg" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
                            <h3 class="works_title"><?php the_title(); ?></h3>
						</a>
					</li>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>	

				</ul>
			</div>
			<!-- //work_list -->

            <a href="/movie" class="more_btn">MORE</a>
        </div>
        <!-- //top_container -->
    </section>
    <section id="brand">
        <h1 class="sec_ttl">
            <span>BRAND</span>
            <small>ブランド</small>
        </h1>
        <div class="top_container">

            <div class="movie_work_list brand_list">
				<ul class="flex">
                

                <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                    $args = array(
                        'posts_per_page' => '15', //表示件数。-1なら全件表示
                        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                        'paged' => $paged,
                        'post_type' => 'brand',
                            );
                ?>
                <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                <?php if ( $wp_query->have_posts() ) :

                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <?php 
                        $brand_logo = get_field('brand_logo');
                        $brand_url = get_field('brand_url');
                        ?>
					<li>
						<a href="<?php echo $brand_url;?>">
                            <div class="thumbnail bg" style="background-image: url(<?php echo $brand_logo;?>)"></div>
						</a>
					</li>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>	

				</ul>
			</div>
			<!-- //work_list -->
        </div>
        <!-- //top_container -->
    </section>

    <section id="salon">
        <h1 class="sec_ttl">
            <span>SALON</span>
            <small>サロン</small>
        </h1>

        <div class="top_container">
            <ul class="salon_list flex">
                <li>
                    <div class="salon_thumb bg salon_01"></div>
                    <div class="salon_info">
                        <h2>
                            <span>▼ NOVAN</span>
                        </h2>
                        <span class="salon_cat">── Hair salon / Shop / Studio</span>
                        <span class="salon_address">東京都渋谷区神宮前5-46-3 NIKO PLACE 2F</span>
                    </div>
                </li>
                <li>
                    <div class="salon_thumb bg salon_02"></div>
                    <div class="salon_info">
                        <h2>
                            <span>▼ NOVAN</span>
                        </h2>
                        <span class="salon_cat">── Hair salon / Shop / Studio</span>
                        <span class="salon_address">東京都渋谷区神宮前5-46-3 NIKO PLACE 2F</span>
                    </div>
                </li>
                <li>
                    <div class="salon_thumb bg salon_03"></div>
                    <div class="salon_info">
                        <h2>
                            <span>▼ NOVAN</span>
                        </h2>
                        <span class="salon_cat">── Hair salon / Shop / Studio</span>
                        <span class="salon_address">東京都渋谷区神宮前5-46-3 NIKO PLACE 2F</span>
                    </div>
                </li>
            </ul>
            <!-- //salon_list -->

            <div class="salon_link_wrap flex">
                <a href="https://www.instagram.com/novan.jp/" target="_blank" class="more_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/insta_icon.svg" alt="">instagram</a>
                <a href="https://novan.jp/" target="_blank" class="more_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/shop_icon.svg" alt="">online shop</a>
            </div>
        </div>
    </section>

    <section id="company">
        <div class="top_container">
            <div class="company_wrap flex">
                <h1 class="sec_ttl">
                    <span>COMPANY</span>
                    <small>会社概要</small>
                </h1>
                <div class="company_info">
                    <dl class="flex">
                        <dt>会社名</dt>
                        <dd>株式会社munico</dd>
                    </dl>
                    <dl class="flex">
                        <dt>所在地</dt>
                        <dd>〒150-0001 東京都渋谷区神宮前5丁目40-10 METROCA 103</dd>
                    </dl>
                    <dl class="flex">
                        <dt>設立</dt>
                        <dd>2021/2/2</dd>
                    </dl>
                    <dl class="flex">
                        <dt>代表者</dt>
                        <dd>munico（nao,kiyo）</dd>
                    </dl>
                    <dl class="flex">
                        <dt>事業内容</dt>
                        <dd>photo｜movie｜illustration｜animation｜graphic design｜salon</dd>
                    </dl>
                </div>

            </div>
        </div>
    </section>
</main>
	

<?php get_footer(); ?>