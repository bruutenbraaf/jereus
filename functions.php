<?php
	
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');	
	
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'custom-logo' );
	
function register_my_menus() {
  register_nav_menus(
    array(
      'hoofd_menu' => __( 'Hoofd Menu' ),
      'cat_menu' => __( 'Categorie Menu' ),
      'gebruiker_menu' => __( 'Gebruiker Menu' ),
      'second_menu' => __( 'Secondaire Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
	
	function arphabet_widgets_init() {
		
		register_sidebar( array(
			'name'          => 'Pagina Sidebar',
			'id'            => 'page_sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2><div class="widget-content">'
		) );
		
		register_sidebar( array(
			'name'          => 'Product Sidebar',
			'id'            => 'product_sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>'
		) );
		
		register_sidebar( array(
			'name'          => 'Footer een',
			'id'            => 'footer_een',

		) );
		
		register_sidebar( array(
			'name'          => 'Footer twee',
			'id'            => 'footer_twee',
		) );	
		
		register_sidebar( array(
			'name'          => 'Footer drie',
			'id'            => 'footer_drie',
		) );	
		
		register_sidebar( array(
			'name'          => 'Footer vier',
			'id'            => 'footer_vier',
		) );	
		register_sidebar( array(
			'name'          => 'Categorieën',
			'id'            => 'categories',
		) );		
								
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Opties');
}

acf_add_options_page( array(

'page_title' 	=> 'Thema opties',
'menu_title' 	=> 'Thema opties',
'menu_slug' 	=> 'thema_opties',
'capability' 	=> 'edit_posts', 
'icon_url' => 'dashicons-admin-appearance',
'position' => 2

) );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Opties');
}

acf_add_options_page( array(

'page_title' 	=> 'Home Page Carousel',
'menu_title' 	=> 'Carousel',
'menu_slug' 	=> 'home-page-carousel',
'capability' 	=> 'edit_posts', 
'icon_url' => 'dashicons-images-alt2',
'position' => 3

) );


acf_add_options_page( array(

'page_title' 	=> 'Maten tabel (Kuipen)',
'menu_title' 	=> 'Maten tabel (kuipen)',
'menu_slug' 	=> 'maten-tabel',
'capability' 	=> 'edit_posts', 
'position' => 4

) );

acf_add_options_page( array(

'page_title' 	=> 'Homepagina informatie',
'menu_title' 	=> 'Homepagina info.',
'menu_slug' 	=> 'homepagina_info',
'capability' 	=> 'edit_posts', 
'icon_url' => 'dashicons-images-alt2',
'position' => 3

) );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
add_filter( 'woocommerce_subcategory_count_html', 'wcc_hide_category_count' );
function wcc_hide_category_count() {
	// No count
}

add_filter( 'wc_product_sku_enabled', '__return_false' );

add_filter( 'woocommerce_pagination_args', 	'rocket_woo_pagination' );
function rocket_woo_pagination( $args ) {
	$args['prev_text'] = '<i class="fa fa-angle-left"></i>';
	$args['next_text'] = '<i class="fa fa-angle-right"></i>';
	return $args;
}

function woo_hide_product_categories_widget( $list_args ){
	$list_args[ 'hide_empty' ] = 1;
	
	return $list_args;
}
add_filter( 'woocommerce_product_categories_widget_args', 'woo_hide_product_categories_widget' );

function dequeue_tribe_events_scripts_and_styles() {
wp_dequeue_script( 'tribe-events-pro-geoloc' );
wp_dequeue_script( 'tribe-events-list' );
wp_dequeue_script( 'tribe-events-pro' ); // relies on tribe-events-calendar-script
wp_dequeue_script( 'tribe-placeholder' );
wp_dequeue_script( 'tribe-events-jquery-resize' );
}
add_action('wp_enqueue_scripts', 'dequeue_tribe_events_scripts_and_styles', 100 );

?>