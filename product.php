<?php
/*
Template Name: Product
*/
get_header(); ?>
woo
<div class="grid">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile;
	endif; ?>
</div>
<?php get_footer(); ?>