<?php
	/*
	
	Template Name: Markten

	*/	
get_header(); ?>

<?php if ( get_field( 'omslagfoto_algemeen', 'option' ) ) { ?>
<div class="categorie_omslag" style="background:url('<?php the_field( 'omslagfoto_algemeen', 'option' ); ?>'); background-position: <?php the_field( 'foto_positie', 'option' ); ?>;">
	
</div>

<?php } ?>
<div class="container the_content">

			
			
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			
</div>


<?php get_footer(); ?>