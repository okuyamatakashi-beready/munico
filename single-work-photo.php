<?php get_header(); ?>

<main id="main">
	<div class="main_container">
		<div class="sidebar">
			<h2>PHOTO</h2>

			<?php
            $term_object = get_queried_object();
			$term_slug   = $term_object->slug;
            ?>
			<ul>
				<li>
					<a href="/cat_photo/look" class="js_typing">Look</a>
				</li> 
				<li>
					<a href="/cat_photo/salonmodel" class="js_typing">Salon model</a>
				</li>
				<li>
					<a href="/cat_photo/product/" class="js_typing">Product</a>
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

		<?php 
            $works_img = get_field('works_img');
			$photo_img = get_field('photo_img');
            $verticalorwide = get_field('verticalorwide');
            $photo_name = get_field('photo_name');
            $photo_text = get_field('photo_text');
            $photo_job = get_field('photo_job');
            ?>

			<div class="works_post">
				<div class="works_photo">
					<?php if( have_rows('works_img') ): ?>
						<ul class="photo_list flex">
							<?php while( have_rows('works_img') ): the_row();
                        		$photo_img = get_sub_field('photo_img');
                        		$verticalorwide = get_sub_field('verticalorwide');
                    		?>
							<li class="<?php echo $verticalorwide;?>">
								<?php if($photo_img): ?>
									<div class="photo_thumb bg" style="background-image: url(<?php echo $photo_img;?>)"></div>
								<?php endif; ?>

							</li>
							<?php endwhile;?>
						</ul>
					<?php endif; ?>
					

				</div>
				<!-- /works_photo -->

				<div class="works_info">
					<div class="works_ttl flex">
						<?php if($photo_name): ?>
							<h3><?php echo $photo_name;?></h3>
						<?php endif; ?>

						<?php
							$terms = get_the_terms($post->ID,'cat_photo');
							foreach( $terms as $term ) {
							echo '<span><a href="'.get_term_link($term->slug,'cat_photo').'">'.$term->name.'</a></span>';
							}
							?>
					</div>

					<div class="works_detail">
						<?php if($photo_text): ?>
							<p><?php echo $photo_text;?></p>
						<?php endif; ?>
						
						<?php if($photo_job): ?>
							<span class="type"><?php echo $photo_job;?></span>
						<?php endif; ?>
					</div>
				</div>
				<!-- /works_info -->
			</div>
			<!-- /works_post -->
			
		</div>
		<!-- //main_content -->

		<div class="other_list">
			<div class="other_list_wrap">
				<div class="other_list_inner">
					<h4>Ohter</h4>

					<ul class="flex">

					<?php
						$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
						$args = array(
							'posts_per_page' => '3', //表示件数。-1なら全件表示
							'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
							'paged' => $paged,
							'tax_query' => array(
									array(
										'taxonomy' => 'cat_movie',
										'field' => 'slug',
										'terms' => 'promotion',
										),
									),
								);
					?>
					<?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

					<?php if ( $wp_query->have_posts() ) :

						while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

						<li>
							<a href="">
								<div class="thumbnail bg" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
							</a>
						</li>

					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
					</ul>
				</div>
				<!-- /other_list_inner -->
			</div>
			<!-- /other_list_wrap -->

			<a href="/" class="back_btn">
				BACK TO PAGE
			</a>
		</div>
		<!-- /other_list -->
	</div>
	<!-- //main_container -->
</main>

<?php get_footer(); ?>