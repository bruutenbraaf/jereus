<?php
get_header(); ?>



<div class="container">
	<div class="row">
		<div class="col-md-4">
			archive
		</div>
		<div class="col-md-8">
			
			
					<ul class="products">
			<?php if (have_posts()) :
				woocommerce_product_subcategories();
				while (have_posts()) :	the_post(); setup_postdata($post);
					woocommerce_get_template_part( 'content', 'product' );
				endwhile;
				woocommerce_product_loop_end();
			else :
				get_template_part("/functions/post-empty");
			endif; ?>
		</ul>
		<?php motionpic_pagination("clearfix", "pagination clearfix"); ?>
	</div>
	<?php if(get_option("ocmx_shop_sidebar_layout") != "sidebarnone"): ?>
		<?php get_sidebar(); ?>
	<?php endif;?>
			
			
			
		</div>
	</div>
</div>


<?php get_footer(); ?>