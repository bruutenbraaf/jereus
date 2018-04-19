<?php
get_header(); ?>

<?php if ( get_field( 'omslagfoto_categorie' ) ) { ?>
<div class="categorie_omslag" style="background:url('<?php the_field( 'omslagfoto_categorie', $term_id_prefixed ); ?>'); background-position: <?php the_field( 'foto_positie', $term_id_prefixed ); ?>;">
	
</div>

<?php } ?>	
<div class="container the_content">
	<div class="row">
		<div class="col-md-3 sidebar">
			<?php dynamic_sidebar( 'page_sidebar' ); ?>
		</div>
		<div class="col-md-9">
			
			
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			
			
			
		</div>
	</div>
</div>


<?php get_footer(); ?>