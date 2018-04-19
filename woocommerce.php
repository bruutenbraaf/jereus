<?php
/*
Template Name: WooCommerce
*/
get_header(); ?>
<div class="filter_products">
	<div class="grid">
				<div>
				<span></span>
				<span></span>
				<span></span>
				</div>
				<p>Filter producten</p>
	</div>
</div>
<div class="content webshop">
	<div class="grid">
		<div class="bb-2">
			<div class="sidebar">
			Wooo
			</div>
		</div>
		<div class="bb-10 producten">
			<?php woocommerce_content(); ?>	
		</div>
	</div>
</div>
<?php get_footer(); ?>
