<?php get_header(); ?>

<?php if( have_posts()): while( have_posts()): the_post(); ?>
<?php 
    $concept_catch = get_field('concept_catch,17');
    $concept_text = get_field('concept_text');
    $set_ttl = get_field('set_ttl');
    $set_price = get_field('set_price');
    $set_info = get_field('set_info');
    $single_ttl = get_field('single_ttl');
    $single_price = get_field('single_price');
    $single_info = get_field('single_info');
    $movie_ttl = get_field('movie_ttl');
    $movie_price = get_field('movie_price');
    $movie_info = get_field('movie_info');
    ?>
<main id="main">
    <div class="top_container">
        <section id="concept">
            <h2 class="sec_ttl">
                <span>Concept</span>
                <small>コンセプト</small>
            </h2>

            <span class="catch">コンセプトテキストが入ります。コンセプトテキストが入ります。</span>

            <p>
            コンセプトテキストが入ります。コンセプトテキストが入ります。コンセプトテキストが入ります。<br>
            コンセプトテキストが入ります。コンセプトテキストが入ります。コンセプトテキストが入ります。<br>
            コンセプトテキストが入ります。コンセプトテキストが入ります。コンセプトテキストが入ります。<br>
            コンセプトテキストが入ります。コンセプトテキストが入ります。<br>
            コンセプトテキストが入ります。コンセプトテキストが入ります。<br><br>

            コンセプトテキストが入ります。コンセプトテキストが入ります。コンセプトテキストが入ります。
            </p>

        </section>
        <section id="price" class="price_wrap now">
            <div class="">
                <h2 class="sec_ttl">
                    <span>Price</span>
                    <small>価格帯</small>
                </h2>
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

        <section id="company">
            <h2 class="sec_ttl">
                <span>Company</span>
                <small>会社概要</small>
            </h2>

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

        </section>



    </div>

</main>
<?php endwhile; else: ?>
<?php endif; ?> 

<?php get_footer(); ?>