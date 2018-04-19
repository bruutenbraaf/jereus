<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php if ( get_field( 'logo', 'option' ) ) { ?>
					<img class="branding" src="<?php the_field( 'logo', 'option' ); ?>" />
				<?php } ?>
				<h5><?php the_field( 'telefoonnummer', 'option' ); ?></h5>
				<?php the_field( 'emailadres', 'option' ); ?><br>
				<?php the_field( 'adres', 'option' ); ?><br>
				<?php the_field( 'postcode', 'option' ); ?>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'footer_een' ); ?>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'footer_twee' ); ?>
			</div>
			<div class="col-md-3">
				<h2>Stel een vraag</h2>
				<ul class="question">
				<?php if( get_field('facebook_messenger', 'option') ): ?>
				<li class="fb-ms">
				<a href="<?php the_field( 'facebook_messenger', 'option' ); ?>">Via Facebook</a>
				</li>
				<?php endif; ?>
				<?php if( get_field('whatsapp', 'option') ): ?>
				<li class="wht-app">
				<a href="https://api.whatsapp.com/send?phone=<?php the_field( 'whatsapp', 'option' ); ?>">Via Whatsapp</a>
				</li>
				<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() )?>/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() )?>/js/scripts.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>