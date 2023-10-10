<?php get_header(); ?>

<main id="main">
	<div class="main_container tax_container">
        <div class="sidebar">
			<h2>PHOTO</h2>
			<ul>
				<li>
					<a href="/cat_photo/look" class="js_typing">Look</a>
				</li> 
				<li>
					<a href="/cat_photo/salon-model" class="js_typing">Salon model</a>
				</li>
				<li>
					<a href="/cat_photo/product" class="js_typing">Product</a>
				</li>
				<li>
					<a href="/cat_photo/wedding" class="js_typing">Wedding</a>
				</li>
				<li>
					<a href="/cat_photo/creative" class="js_typing">Creative</a>
				</li> 
				<li>
					<a href="/cat_photo/staff" class="js_typing">Staff</a>
				</li>
				<li>
					<a href="/cat_photo/salon" class="js_typing">Salon</a>
				</li>
			</ul>
		</div>
		<!-- //sidebar -->

		<div class="main_content">
		<h2 class="sp_ttl tax_ttl sp">
			<span>PHOTO /</span> <?php echo $term; ?>
		</h2>
			<div class="movie_work_list photo_work_list">
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
                                    'taxonomy' => 'cat_photo',
                                    'field' => 'slug',
                                    'terms' => $term_slug,
                                    ),
                                ),
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