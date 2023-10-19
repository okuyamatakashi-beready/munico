<footer id="footer">
	<div class="container flex">
		<div class="ft_logo">
			<a href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="">
			</a>
		</div>
		<div class="ft_wrap flex pc_flex">


			<div class="fixed_insta_link pc">
				<a href="https://www.instagram.com/munico_625/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/common/insta_icon.svg" alt="">
				</a>
			</div>

			<div class="ft_sp">
				<ul class="flex fst">
					<li>
						<a href="">MOVIE</a>
					</li>
					<li>
						<a href="">PHOTO</a>
					</li>
				</ul>
				<ul class="flex second">
					<li>
						<a href="">BRAND</a>
					</li>
					<li>
						<a href="">SALON</a>
					</li>
					<li>
						<a href="">COMPANY</a>
					</li>
					<li>
						<a href="">ABOUT</a>
					</li>
				</ul>
				<a href="https://www.instagram.com/munico_625/" target="_blank" class="ft_sp_insta">
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