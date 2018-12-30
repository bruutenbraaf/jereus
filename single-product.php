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

<div class="maten-tabel">
	<div class="container">
		<div class="row">
			<div class="col-md-6 align-center">
				<div class="close-tabel">
					<div></div>
					<div></div>
				</div>
				<h2>maten tabel</h2>
				
				<?php if ( have_rows( 'maat', 'option' ) ) : ?>
					<?php while ( have_rows( 'maat', 'option' ) ) : the_row(); ?>
					<div class="row tabel-row">
						<div class="col-md-6"><?php the_sub_field( 'kuip_soort' ); ?></div><div class="col-md-6"><?php the_sub_field( 'diameter_x_hoogte' ); ?></div>
					</div>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>