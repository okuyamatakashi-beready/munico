
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

<header id="header" class="flex">

    <nav class="gnav">
        <ul class="center_nav flex pc_flex">
            <li>
                <a href="/movie" id="movie" class="js_typing">MOVIE</a>
            </li>
            <li>
                <a href="/photo" class="js_typing">PHOTO</a>
            </li>
            <li>
                <a href="/seminar" class="js_typing">SEMINAR</a>
            </li>
        </ul>

        <ul class="side_nav flex">
            <li>
                <a href="/about" class="js_typing">ABOUT</a>
            </li>
            <li>
                <a href="/contact" class="js_typing">CONTACT</a>
            </li>
        </ul>
    </nav>

    <div class="sp_nav sp">
        <dl>
            <dt><a href="/movie">MOVIE</a></dt>
            <dd>
                <ul class="flex">
                    <li>
                        <a href="/cat_movie/promotion">Promotion</a>
                    </li> 
                    <li>
                        <a href="/cat_movie/interview">Interview</a>
                    </li>
                    <li>
                        <a href="/cat_movie/seminar">Seminar</a>
                    </li>
                    <li>
                        <a href="/cat_movie/crosstalk">Crosstalk</a>
                    </li>
                    <li>
                        <a href="/cat_movie/recruit">Recruit</a>
                    </li>
                    <li>
                        <a href="/cat_movie/reel">Reel</a>
                    </li>
                    <li>
                        <a href="/cat_movie/youtube">Youtube</a>
                    </li>
                    <li>
                        <a href="/cat_movie/wedding">Wedding</a>
                    </li>
                    <li>
                        <a href="/cat_movie/closecoverage">Close coverage</a>
                    </li>
                    <li>
                        <a href="/cat_movie/entertainment">Entertainment</a>
                    </li>
                </ul>
            </dd>
        </dl>
        <dl>
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