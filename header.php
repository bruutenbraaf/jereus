<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?> </title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()) ?>/style.css" type="text/css" media="all" />
</head>

<body <?php body_class(); ?>>

	<div class="top_bar">
		<div class="container">
			<div class="row">
				<div class="col-md-8 top_menu">
					<?php wp_nav_menu(array('theme_location' => 'hoofd_menu')); ?>
				</div>
				<div class="col-md-4 user_menu">
					<?php wp_nav_menu(array('theme_location' => 'gebruiker_menu')); ?>
				</div>
				<div class="col-md-6 skip">
					<div class="m_button">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hoofd_menu">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-1 col-md-1 d-lg-none d-md-block">
					<div class="h_button">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="branding col-lg-2 col-md-10 col-10 d-flex justify-content-lg-start justify-content-md-center justify-content-center">
					<a href="<?php echo get_home_url(); ?>">
						<?php if (get_field('logo', 'option')) { ?>
							<img src="<?php the_field('logo', 'option'); ?>" />
						<?php } ?>
					</a>
				</div>
				<div class="categorieen desk-nav ma-nav col-lg-9 d-lg-block d-md-none d-none">
					<?php wp_nav_menu(array('theme_location' => 'cat_menu')); ?>
				</div>
				<div class="col-md-1 col-1 winkelmand">
					<a href="<?php echo get_permalink(wc_get_page_id('cart')); ?>">
						<div class="cart">
							<div class="count">
								<?php echo sprintf(_n('%d ', '%d', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?>
							</div>
						</div>
					</a>
				</div>
				<div class="mobile-nav categorieen ma-nav">
					<?php wp_nav_menu(array('theme_location' => 'mob_menu')); ?>
				</div>
			</div>
		</div>
	</div>