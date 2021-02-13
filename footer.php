</div>
</div>
</div>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php if (get_field('logo', 'option')) { ?>
					<img class="branding" src="<?php the_field('logo', 'option'); ?>" />
				<?php } ?>
				<h5><?php the_field('telefoonnummer', 'option'); ?></h5>
				<?php the_field('emailadres', 'option'); ?><br>
				<?php the_field('adres', 'option'); ?><br>
				<?php the_field('postcode', 'option'); ?>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar('footer_een'); ?>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar('footer_twee'); ?>
			</div>
			<div class="col-md-3">
				<h2>Stel een vraag</h2>
				<ul class="question">
					<?php if (get_field('facebook_messenger', 'option')) : ?>
						<li class="fb-ms">
							<a href="<?php the_field('facebook_messenger', 'option'); ?>">Via Facebook</a>
						</li>
					<?php endif; ?>
					<?php if (get_field('whatsapp', 'option')) : ?>
						<li class="wht-app">
							<a href="https://api.whatsapp.com/send?phone=<?php the_field('whatsapp', 'option'); ?>">Via Whatsapp</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="socket">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-4">
				<span>&copy; Jereus - <?php echo date("Y"); ?></span>
			</div>
			<div class="col-md-8 d-flex justify-content-md-end justify-content-sm-start">
				<?php wp_nav_menu(array('theme_location' => 'socket_menu')); ?>
			</div>
		</div>
	</div>
</div>



<?php if (get_field('pop_up_bericht', 'option')) { ?>
	<div class="pop">
		<div class="row">
			<div class="col-md-6">
				<svg width="603" height="896" viewBox="0 0 603 896" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M155 0C-92.4 0 -293 200.6 -293 448C-293 695.4 -92.4 896 155 896C402.4 896 603 695.4 603 448C603 200.6 402.4 0 155 0ZM187 664C187 668.4 183.4 672 179 672H131C126.6 672 123 668.4 123 664V392C123 387.6 126.6 384 131 384H179C183.4 384 187 387.6 187 392V664ZM155 320C142.439 319.744 130.479 314.574 121.687 305.6C112.894 296.626 107.97 284.563 107.97 272C107.97 259.437 112.894 247.374 121.687 238.4C130.479 229.426 142.439 224.256 155 224C167.561 224.256 179.521 229.426 188.313 238.4C197.106 247.374 202.03 259.437 202.03 272C202.03 284.563 197.106 296.626 188.313 305.6C179.521 314.574 167.561 319.744 155 320Z" fill="black" />
				</svg>
				<?php the_field('pop_up_bericht', 'option'); ?>
			</div>
			<div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
				<div>
					<?php $contact_knop = get_field('contact_knop', 'option'); ?>
					<?php if ($contact_knop) { ?>
						<a class="small-btn" href="<?php echo $contact_knop['url']; ?>" target="<?php echo $contact_knop['target']; ?>"><?php echo $contact_knop['title']; ?></a>
					<?php } ?>
					<span id="accept-message"><?php the_field('niet_meer_tonen_tekst', 'option'); ?></span>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/js/jquery.cookie.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/js/scripts.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/js/jquery.nice-select.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/js/slick.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>