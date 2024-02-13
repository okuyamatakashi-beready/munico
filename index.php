
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
                <a href="/#brand" class="js_typing">BRAND</a>
            </li>
            <li>
                <a href="/#salon" class="js_typing">SALON</a>
            </li>
            <li>
                <a href="/photo" class="js_typing">PHOTO</a>
            </li>

            <li>
                <a href="/movie" class="js_typing">MOVIE</a>
            </li>
            <li>
                <a href="/#company" class="js_typing">COMPANY</a>
            </li>
            <li>
                <a href="/about" class="js_typing">ABOUT</a>
            </li>
            <li>
                <a href="/contact" class="js_typing">CONTACT</a>
            </li>




        </ul>


    </nav>

    <div class="sp_nav sp">
        <dl class="active">
            <dt>MOVIE</dt>
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
            <dt>PHOTO</dt>
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
        <dl class="active">
            <dt>BRAND</dt>
            <dd>
                <ul class="h_brand flex">
                

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
            </dd>
        </dl>
        <dl>
            <dt><a href="#salon">SALON</a></dt>
            <dd>

            </dd>
        </dl>
        <dl>
            <dt><a href="#company">COMPANY</a></dt>
            <dd>

            </dd>
        </dl>
        <dl>
            <dt><a href="/about">ABOUT</a></dt>
            <dd>

            </dd>
        </dl>
        <dl>
            <dt><a href="/contact">CONTACT</a></dt>
            <dd>

            </dd>
        </dl>
    </div>
    <!-- //sp_nav -->
</header>


<div id="toggle" class="sp">
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
    <section id="brand">
        <h1 class="sec_ttl">
            <span>BRAND</span>
            
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
                <a href="https://www.instagram.com/novan.jp/" target="_blank" class="more_btn">
                <svg width="25.006" height="25" viewBox="0 0 25.006 25">
                    <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M12.5,8.328a6.41,6.41,0,1,0,6.41,6.41A6.4,6.4,0,0,0,12.5,8.328Zm0,10.577a4.167,4.167,0,1,1,4.167-4.167A4.175,4.175,0,0,1,12.5,18.9ZM20.667,8.066a1.5,1.5,0,1,1-1.5-1.5A1.492,1.492,0,0,1,20.667,8.066Zm4.245,1.517a7.4,7.4,0,0,0-2.019-5.238,7.447,7.447,0,0,0-5.238-2.019c-2.064-.117-8.251-.117-10.315,0A7.437,7.437,0,0,0,2.1,4.339,7.423,7.423,0,0,0,.083,9.578c-.117,2.064-.117,8.251,0,10.315A7.4,7.4,0,0,0,2.1,25.131,7.457,7.457,0,0,0,7.34,27.15c2.064.117,8.251.117,10.315,0a7.4,7.4,0,0,0,5.238-2.019,7.447,7.447,0,0,0,2.019-5.238c.117-2.064.117-8.245,0-10.309ZM22.246,22.107a4.219,4.219,0,0,1-2.376,2.376c-1.646.653-5.551.5-7.369.5s-5.729.145-7.369-.5a4.219,4.219,0,0,1-2.376-2.376c-.653-1.646-.5-5.551-.5-7.369s-.145-5.729.5-7.369A4.219,4.219,0,0,1,5.131,4.992c1.646-.653,5.551-.5,7.369-.5s5.729-.145,7.369.5a4.219,4.219,0,0,1,2.376,2.376c.653,1.646.5,5.551.5,7.369S22.9,20.467,22.246,22.107Z" transform="translate(0.005 -2.238)"/>
                </svg>

                    <span>instagram</span>
                </a>
                <a href="https://novan.jp/" target="_blank" class="more_btn">
                <svg width="30.005" height="28.732" viewBox="0 0 30.005 28.732" class="shop_icon">
                    <g id="Icon_feather-shopping-cart" data-name="Icon feather-shopping-cart" transform="translate(-0.5 -0.5)">
                        <path id="パス_8" data-name="パス 8" d="M14.546,31.273A1.273,1.273,0,1,1,13.273,30,1.273,1.273,0,0,1,14.546,31.273Z" transform="translate(-1.589 -4.314)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        <path id="パス_9" data-name="パス 9" d="M31.046,31.273A1.273,1.273,0,1,1,29.773,30,1.273,1.273,0,0,1,31.046,31.273Z" transform="translate(-4.087 -4.314)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        <path id="パス_10" data-name="パス 10" d="M1.5,1.5H6.592L10,18.545a2.546,2.546,0,0,0,2.546,2.049H24.922a2.546,2.546,0,0,0,2.546-2.049L29.5,7.865H7.865" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </g>
                </svg>

                    <span>online shop</span>
                </a>
            </div>
        </div>
    </section>

    <section id="photo">
        <h1 class="sec_ttl">
            <span>PHOTO</span>
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

            <a href="/photo" class="more_btn">MORE</a>
        </div>
        <!-- //top_container -->
    </section>

    <section id="movie">
        <h1 class="sec_ttl">
            <span>MOVIE</span>
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
                <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                <?php if ( $my_query->have_posts() ) :

                    while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
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



    <section id="company">
        <div class="top_container">
            <div class="company_wrap flex">
                <div class="company_ttl_wrap">
                    <h1 class="sec_ttl">
                        <span>COMPANY</span>
                        <small>会社概要</small>
                    </h1>
                    <a href="/about" class="more_btn pc">ABOUT</a>
                </div>
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
                        <dd>2020/12/10</dd>
                    </dl>
                    <dl class="flex">
                        <dt>代表取締役</dt>
                        <dd>munico（冨岡奈央、kiyo）</dd>
                    </dl>
                    <dl class="flex">
                        <dt>事業内容</dt>
                        <dd>映像・写真、ブランドディレクション・デザイン、ヘアサロン運営、ネイルサロン運営、アパレル・化粧品の企画製造販売及び販売</dd>
                    </dl>
                    <a href="/about" class="more_btn sp">ABOUT</a>
                </div>

            </div>
        </div>
    </section>




</main>
	

<?php get_footer(); ?>