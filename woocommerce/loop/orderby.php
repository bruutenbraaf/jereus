<?php

/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}

?>

<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby">
		<?php foreach ($catalog_orderby_options as $id => $name) : ?>
			<option value="<?php echo esc_attr($id); ?>" <?php selected($orderby, $id); ?>><?php echo esc_html($name); ?></option>
		<?php endforeach; ?>
	</select>
	<input type="hidden" name="paged" value="1" />
	<?php wc_query_string_form_fields(null, array('orderby', 'submit', 'paged', 'product-page')); ?>
</form>

<div class="filter-mob">
	<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M5.5 12.5C3.92 12.5 2.597 13.56 2.163 15H0V17H2.163C2.597 18.44 3.92 19.5 5.5 19.5C7.08 19.5 8.403 18.44 8.837 17H20V15H8.837C8.403 13.56 7.08 12.5 5.5 12.5ZM5.5 17.5C4.673 17.5 4 16.827 4 16C4 15.173 4.673 14.5 5.5 14.5C6.327 14.5 7 15.173 7 16C7 16.827 6.327 17.5 5.5 17.5ZM14.5 6.5C12.92 6.5 11.597 7.56 11.163 9H0V11H11.163C11.597 12.44 12.92 13.5 14.5 13.5C16.08 13.5 17.403 12.44 17.837 11H20V9H17.837C17.403 7.56 16.08 6.5 14.5 6.5ZM14.5 11.5C13.673 11.5 13 10.827 13 10C13 9.173 13.673 8.5 14.5 8.5C15.327 8.5 16 9.173 16 10C16 10.827 15.327 11.5 14.5 11.5Z" fill="#111111" />
		<path d="M10.837 3C10.403 1.56 9.08 0.5 7.5 0.5C5.92 0.5 4.597 1.56 4.163 3H0V5H4.163C4.597 6.44 5.92 7.5 7.5 7.5C9.08 7.5 10.403 6.44 10.837 5H20.125V3H10.837ZM7.5 5.5C6.673 5.5 6 4.827 6 4C6 3.173 6.673 2.5 7.5 2.5C8.327 2.5 9 3.173 9 4C9 4.827 8.327 5.5 7.5 5.5Z" fill="#111111" />
	</svg>
	<?php _e('Filteren', 'jereus'); ?>
</div>
</div>