<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|', true, 'right'); ?> </title>	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() )?>/style.css" type="text/css" media="all" />
</head>
<body>

	<div class="top_bar">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php wp_nav_menu( array( 'theme_location' => 'hoofd_menu' ) ); ?>
				</div>
				<div class="col-md-4 user_menu">
					<?php wp_nav_menu( array( 'theme_location' => 'gebruiker_menu' ) ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="hoofd_menu">
		<div class="container">
			<div class="row">
				<div class="col-md-2 branding">
					<a href="<?php echo get_home_url(); ?>">
						<?php if ( get_field( 'logo', 'option' ) ) { ?>
							<img src="<?php the_field( 'logo', 'option' ); ?>" />
						<?php } ?>
					</a>
				</div>
				<div class="col-md-9 categorieen">
					<ul>
					<?php
						  $taxonomy     = 'product_cat';
						  $orderby      = 'name';  
						  $show_count   = 0;      // 1 for yes, 0 for no
						  $pad_counts   = 0;      // 1 for yes, 0 for no
						  $hierarchical = 0;      // 1 for yes, 0 for no  
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
						        echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></i>';
						
						        $args2 = array(
						                'taxonomy'     => $taxonomy,
						                'child_of'     => 0,
						                'parent'       => $category_id,
						                'orderby'      => $orderby,
						                'show_count'   => $show_count,
						                'pad_counts'   => $pad_counts,
						                'hierarchical' => $hierarchical,
						                'title_li'     => $title,
						                'hide_empty'   => $empty
						        );
						        $sub_cats = get_categories( $args2 );
						        if($sub_cats) {
						            foreach($sub_cats as $sub_category) {
						                echo  $sub_category->name ;
						            }   
						        }
						    }       
						}
						?>
					</ul>
				</div>
				<div class="col-md-1 winkelmand">
					<a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>">
					<div class="cart">
						<div class="count">
							<?php echo sprintf ( _n( '%d ', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
						</div>
					</div></a>
				</div>
			</div>
		</div>
	</div>