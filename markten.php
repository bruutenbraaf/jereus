<?php
/*
	
	Template Name: Markten

	*/
get_header(); ?>

<?php if (get_field('omslagfoto_algemeen', 'option')) { ?>
	<div class="categorie_omslag" style="background:url('<?php the_field('omslagfoto_algemeen', 'option'); ?>'); background-position: <?php the_field('foto_positie', 'option'); ?>;">
	</div>
<?php } ?>
<div class="container the_content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile;
	endif; ?>

	<?php if (have_rows('markt_agenda')) : ?>
		<?php while (have_rows('markt_agenda')) : the_row(); ?>
			<div class="container m-container">
				<div class="row">
					<div class="col-md-12">
						<h2><?php the_sub_field('titel'); ?></h2>
					</div>
				</div>
				<?php if (have_rows('markt')) { ?>
					<?php $count = 0; ?>
					<?php while (have_rows('markt')) : the_row(); ?>
						<?php $count++; ?>
						<div class="row m-row <?php if ($count % 2 == 0) { ?>e<?php } ?> d-flex align-items-center <?php if ($wp_query->post_count == $count) { ?>last<?php } ?>">
							<div class="col-3 order-1 order-md-1"><b><?php the_sub_field('locatie'); ?></b></div>
							<div class="col-12 col-md-3 order-6 order-md-2">
								<div class="glightbox-tgl" indetifier="<?php echo $count; ?>">Google Maps</div>
							</div>
							<div class="col-2 order-2"><?php the_sub_field('dag'); ?></div>
							<div class="col-1 order-3"><?php the_sub_field('tijdstip_vanaf'); ?></div>
							<div class="col-1 order-4"> - </div>
							<div class="col-1 order-5"><?php the_sub_field('tijdstip_tot'); ?></div>
						</div>
						<div class="glightbox" target="<?php echo $count; ?>">
							<div class="inner">
								<div class="close-tgl" indetifier="<?php echo $count; ?>">
									<div></div>
									<div></div>
								</div>
								<?php the_sub_field('google_maps'); ?>
							</div>
						</div>

					<?php endwhile; ?>
				<?php } ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<script>
		jQuery('.glightbox-tgl').click(function() {
			jQuery('.glightbox[target="' + jQuery(this).attr('indetifier') + '"]').toggleClass('is-shown');
		});
		jQuery('.close-tgl').click(function() {
			jQuery('.glightbox[target="' + jQuery(this).attr('indetifier') + '"]').toggleClass('is-shown');
		});
	</script>

</div>


<?php get_footer(); ?>