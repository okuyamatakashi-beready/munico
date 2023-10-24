<?php get_header(); ?>

<main id="main">
	<div class="main_container">
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
		<?php if( have_posts()): while( have_posts()): the_post(); ?>
		<div class="main_content">

		<?php 
            $works_url = get_field('works_url');
            $works_name = get_field('works_name');
            $works_text = get_field('works_text');
            $works_job = get_field('works_job');
            ?>

			<div class="works_post">
				<div class="works_movie">
					<?php if($works_url): ?>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $works_url;?>?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					<?php endif; ?>
				</div>
				<!-- /works_movie -->

				<div class="works_info">
					<div class="works_ttl flex">
						<h1><?php the_title(); ?></h1>
						<?php if($works_name): ?>
							<h3><?php echo $works_name;?></h3>
						<?php endif; ?>

						<?php
							$terms = get_the_terms($post->ID,'cat_movie');
							foreach( $terms as $term ) {
							echo '<span><a href="'.get_term_link($term->slug,'cat_movie').'">'.$term->slug.'</a></span>';
							}
							?>
					</div>

					<div class="works_detail">
						<?php if($works_text): ?>
							<p><?php echo $works_text;?></p>
						<?php endif; ?>
						
						<?php if($works_job): ?>
							<span class="type"><?php echo $works_job;?></span>
						<?php endif; ?>
					</div>
				</div>
				<!-- /works_info -->
			</div>
			<!-- /works_post -->
			
		</div>
		<!-- //main_content -->
		<?php endwhile; else: ?>
		<?php endif; ?> 

		<div class="other_list">
			<div class="other_list_wrap">
				<div class="other_list_inner">
					<h4>Ohter</h4>

					<ul class="flex">

					<?php
						$terms_name = get_the_terms($post->ID,'cat_movie');
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
					<?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

					<?php if ( $my_query->have_posts() ) :

						while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

						<li>
							<a href="/movie/<?php echo $terms;?>">
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