<?php
get_header(); ?>



<div class="container the_content">
	<div class="row">
		<div class="col-md-9">
					
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			
		</div>
		
		<div class="col-md-3 sidebar">
			<?php dynamic_sidebar( 'product_sidebar' ); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>