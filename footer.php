<footer id="footer">
	<div class="container flex">
		<div class="ft_logo">
			<a href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="">
			</a>
		</div>
		<div class="ft_wrap flex pc_flex">
			<dl>
				<dt><a href="/movie">MOVIE</a></dt>
				<dd>
					<ul>
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
			<dl>
				<dt><a href="/photo">PHOTO</a></dt>
				<dd>
					<ul>
						<li class="">
							<a href="/cat_photo/look">- Look</a>
						</li>
						<li class="">
							<a href="/cat_photo/salonmodel">- Salon model</a>
						</li>
						<li class="">
							<a href="/cat_photo/product">- Product</a>
						</li>
						<li class="">
							<a href="/cat_photo/wedding">- Wedding</a>
						</li>
						<li class="">
							<a href="/cat_photo/creative">- Creative</a>
						</li>
						<li class="">
							<a href="/cat_photo/staff">- Staff</a>
						</li>
						<li class="">
							<a href="/cat_photo/salon">- Salon</a>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><a href="/seminar">SEMINAR</a></dt>
				<dd>
					<ul>
						<li>
							<a href="/omc">- mcc</a>
						</li>
					</ul>
				</dd>
			</dl>

			<div class="fixed_insta_link">
				<a href="" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/common/insta_icon.svg" alt="">
				</a>
			</div>

			<div class="ft_contact">
				<a href="/contact" class="contact_btn">
					CONTACT
				</a>

				<small class="copy">© munico</small>
			</div>
		</div>
		<!-- //ft_wrap -->

		

		
	</div>
	<!-- //container -->
</footer>
<!-- //footer -->

</body>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.arctext.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/shuffle-text.min.js"></script>
<?php if(!is_page("contact")): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
<?php endif; ?>
<?php if(is_page("movie")): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/movie.js"></script>
<?php endif; ?>
<?php if(is_page("photo")): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/photo.js"></script>
<?php endif; ?>
<?php if(is_page("about")): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/about.js"></script>
<?php endif; ?>
<?php if(is_page("contact")): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>
<?php endif; ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	
</html>