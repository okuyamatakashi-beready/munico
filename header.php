
<!DOCTYPE html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name=”description” content="3月21日は、1万人で「3・2・1・いただきます！ 」をしましょう。One Dining Table FES.は、「いただきます」は楽しい。を知ってもらうためのイベントです。美味しいものを食べること、大切な人と一緒に食べること、皆で食べることって楽しい！ それができるしあわせを改めて感じられるイベントにしていきます。目指せ、1万人でいただきます。">
    
    <title> </title>


    <!-- CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" id="favicon">
    <link href="<?php echo get_template_directory_uri(); ?>/scss/slick.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/scss/slick-theme.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/hts1iis.css">

    <?php if ( is_page('movie') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/movie.css">
    <?php endif; ?>
    <?php if ( is_page('photo') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/movie.css">
    <?php endif; ?>
    <?php if ( is_page('about') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/about.css">
    <?php endif; ?>
    <?php if ( is_page('contact') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/contact.css">
    <?php endif; ?>

    <?php if(is_tax("")): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/movie.css">
    <?php endif; ?>
    <?php if(is_single("")): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/movie.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/single.css">
    <?php endif; ?>
    
    <?php wp_head(); ?>
</head>
<body>

<header id="header" class="flex page-header">

<a href="/" class="h_logo sp">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
</a>

    <nav class="gnav pc">
        <a href="/" class="h_logo pc">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
        </a>
        <ul class="center_nav flex pc_flex">
            <li>
                <a href="#movie" class="js_typing">MOVIE</a>
            </li>
            <li>
                <a href="#photo" class="js_typing">PHOTO</a>
            </li>
            <li>
                <a href="#brand" class="js_typing">BRAND</a>
            </li>
            <li>
                <a href="#salon" class="js_typing">SALON</a>
            </li>
            <li>
                <a href="#company" class="js_typing">COMPANY</a>
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