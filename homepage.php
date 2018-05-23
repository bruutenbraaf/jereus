<?php
	/*
	
	Template Name: homepagina

	*/	
get_header(); ?>
<?php if ( have_rows( 'carousel', 'option' ) ): ?>
	<div id="carouselHomepagina" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner" role="listbox">
		  <?php while ( have_rows( 'carousel', 'option' ) ) : the_row(); ?>
		  	<?php if ( get_row_layout() == 'item' ) : ?>
				<?php if ( get_sub_field( 'item_afbeelding' ) ) { ?>	  
	    <div class="carousel-item" style="background:url('<?php the_sub_field( 'item_afbeelding' ); ?>'); background-position: <?php the_sub_field( 'afbeelding_positie' ); ?>;">
	      <?php } ?>
	      <div class="container">
		      <div class="row">
			      <div class="col-md-8">
				  	<h1><?php the_sub_field( 'titel' ); ?></h1>
					<p><?php the_sub_field( 'tekst' ); ?></p>
					<a href="<?php the_sub_field( 'knop_link' ); ?>" class="button"><?php the_sub_field( 'knop_tekst' ); ?></a>
		      	</div>
		      </div>
	      </div>
	    </div>
	    <?php endif; ?>
	<?php endwhile; ?>	    
	  </div>
	  <a class="carousel-control-prev" href="#carouselHomepagina" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselHomepagina" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="intro_titel">
				<h1>Misschien is dit wat voor <span>jou?</span></h1>
			</div>
		</div>
	</div>
</div>
<div class="container uitgelicht_homepagina">
	<div class="row">
		<div class="col-md-12">
			<ul class="uitgelichte_producten_homepagina">
			<?php
        $args = array(
    'posts_per_page'   => 4,
    'orderby'          => 'rand',
    'post_type'        => 'product',
    'meta_query'  => array(
        'key'     => '_featured',
        'value'   => 'yes'
    )
);

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

<li><a href="<?php echo the_permalink(); ?>">
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
    <div class="product_image" style="background:url('<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>');">
    </div>
       <span class="title"><?php the_title(); ?></span>
	   <span class="price"><?php woocommerce_get_template( 'loop/price.php' ); ?></span><br>
    </a>
</li>

<?php endwhile;
wp_reset_query(); ?>
</ul>
		</div>
	</div>
</div>


<div class="about">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				
				<h1><?php the_field( 'over_ons_titel', 'option' ); ?></h1>
				<?php the_field( 'over_tekst', 'option' ); ?>
				
				<a href="<?php the_field( 'knop_link_over', 'option' ); ?>" class="white-btn"><?php the_field( 'knop_tekst', 'option' ); ?></a>
			</div>
		</div>
	</div>
	
<?php if ( get_field( 'afbeelding_over', 'option' ) ) { ?>
	<div class="image" style="background:url('<?php the_field( 'afbeelding_over', 'option' ); ?>');">
	</div>
<?php } ?>	
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 aanbiedingen">
			<h1>Nu bij ons in de <span>aanbieding</span></h1>
				<ul>
			<?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'meta_query'     => array(
                    'relation' => 'OR',
                    array( // Simple products type
                        'key'           => '_sale_price',
                        'value'         => 0,
                        'compare'       => '>',
                        'type'          => 'numeric'
                    ),
                    array( // Variable products type
                        'key'           => '_min_variation_sale_price',
                        'value'         => 0,
                        'compare'       => '>',
                        'type'          => 'numeric'
                    )
                )
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        
                   <li class="product">    
                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        
                        
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
    <div class="product_image" style="background:url('<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>');">
    </div>
                       
                        <span class="title"><?php the_title(); ?></span>
                        <span class="price"><?php woocommerce_get_template( 'loop/price.php' ); ?></span>                    
                    </a>
                </li>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
				</ul>
		</div>
		<div class="col-md-4 categorien">
			<h1>Onze categorieën</h1>
			<ul>
			<?php
  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;       
        echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';
    }       
}
?>	</div>
	</div>
</div>


<?php get_footer(); ?>