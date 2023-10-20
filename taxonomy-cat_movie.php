<?php get_header(); ?>

<main id="main">
	<div class="main_container tax_container">
		<div class="sidebar">
			<h2>MOVIE</h2>
			<ul>
				<li>
					<a href="/cat_movie/promotion" class="js_typing">Promotion</a>
				</li> 
				<li>
					<a href="/cat_movie/interview" class="js_typing">Interview</a>
				</li>
				<li>
					<a href="/cat_movie/seminar" class="js_typing">Seminar</a>
				</li>
				<li>
					<a href="/cat_movie/crosstalk" class="js_typing">Crosstalk</a>
				</li>
				<li>
					<a href="/cat_movie/recruit" class="js_typing">Recruit</a>
				</li>
				<li>
					<a href="/cat_movie/reel" class="js_typing">Reel</a>
				</li>
				<li>
					<a href="/cat_movie/youtube" class="js_typing">Youtube</a>
				</li>
				<li>
					<a href="/cat_movie/wedding" class="js_typing">Wedding</a>
				</li>
				<li>
					<a href="/cat_movie/closecoverage" class="js_typing">Close coverage</a>
				</li>
				<li>
					<a href="/cat_movie/entertainment" class="js_typing">Entertainment</a>
				</li>
			</ul>
		</div>
		<!-- //sidebar -->

		<div class="main_content">
			<h2 class="sp_ttl tax_ttl sp">
				<span>MOVIE /</span> <?php echo $term; ?>
			</h2>
			<div class="movie_work_list">
				<ul class="flex">

                <?php
                    $term_object = get_queried_object();
                    $term_slug   = $term_object->slug;
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                    $args = array(
                        'posts_per_page' => '15', //表示件数。-1なら全件表示
                        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                        'paged' => $paged,
                        'tax_query' => array(
                                array(
                                    'taxonomy' => 'cat_movie',
                                    'field' => 'slug',
                                    'terms' => $term_slug,
                                    ),
                                ),
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

            <div class="pagenation">

                <a href="/" class="back_btn">
                    BACK TO PAGE
                </a>

            </div>
		</div>
		<!-- //main_content -->
	</div>
	<!-- //main_container -->
</main>

<?php get_footer(); ?>