<?php
/*
Template Name: Geen sidebar
*/
get_header(); ?>

<?php if (get_field('omslagfoto_pagina')) { ?>
	<div class="categorie_omslag" style="background:url('<?php the_field('omslagfoto_pagina'); ?>'); background-position: <?php the_field('foto_positie_pagina'); ?>;">

	</div>

<?php } ?>
<div class="container the_content">
	<div class="row">
		<div class="col-md-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
			<?php endwhile;
			endif; ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>