<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see         http://docs.woothemes.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if (OrchardHelpers::is_title_wrapper() && (is_shop() || is_product_taxonomy())) {

	?><div <?php wc_product_cat_class( 't-w-subcat-el', $category ); ?>>
		<?php
		/**
		 * woocommerce_before_subcategory hook.
		 */
		do_action( 'woocommerce_before_subcategory', $category );
		?>
		<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>" class="t-w-subcat-el_lk"><?php echo esc_attr($category->name); ?></a>
		<?php
		/**
		 * woocommerce_after_subcategory hook.
		 */
		do_action( 'woocommerce_after_subcategory', $category );
		?>
	</div><?php

} else {

	global $woocommerce_loop;

	// Store loop count we're currently on
	if ( empty( $woocommerce_loop['loop'] ) ) {
		$woocommerce_loop['loop'] = 0;
	}

	// Store column count for displaying the grid
	if ( empty( $woocommerce_loop['columns'] ) ) {
		$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
	}

	// Extra post classes
	$classes = OrchardHelpers::get_responsive_column_classes($woocommerce_loop['columns'], $woocommerce_loop['loop']);
	$classes[] = 'animate-on-screen js--animate-on-screen';

	?>

	<div <?php wc_product_cat_class( $classes, $category ); ?>>
		<div class="cat-lst-el">
			<?php
			/**
			 * woocommerce_before_subcategory hook.
			 */
			do_action( 'woocommerce_before_subcategory', $category );
			?>
			<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>" class="cat-lst-el_cat-lk">
				<?php
				/**
				 * woocommerce_before_subcategory_title hook
				 *
				 * @hooked woocommerce_subcategory_thumbnail - 10
				 */
				do_action( 'woocommerce_before_subcategory_title', $category );
				?>
				<h5 class="cat-lst-el_cat-h"><?php echo esc_attr($category->name); ?></h5>
				<?php
				/**
				 * woocommerce_after_subcategory_title hook
				 */
				do_action( 'woocommerce_after_subcategory_title', $category );
				?>
			</a>
			<?php
			/**
			 * woocommerce_after_subcategory hook.
			 */
			do_action( 'woocommerce_after_subcategory', $category );
			?>
		</div>
	</div>

<?php } ?>
