<?php
// don't load directly
if (!defined('ABSPATH')) die('-1');


class OrchardShop extends OrchardTheme {


	private static $_instance = null;


	private function __construct() {
		if (!class_exists('woocommerce')) {
			return;
		}

		add_filter('woocommerce_enqueue_styles', '__return_false');

		add_action('woocommerce_share', 'OrchardModules::share_tooltip', 10);

		// Breadcrumb
		add_filter('woocommerce_breadcrumb_defaults', array($this, 'woocommerce_breadcrumb_defaults'));
		remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
		if (self::get_option('single_product--breadcrumb')) {
			add_action('woocommerce_before_single_product', array($this, 'breadcrumb'), 15);
		}

		// Products
		add_filter('loop_shop_per_page', create_function('$cols', 'return ' . self::get_option('products--per_page') . ';'), 20);

		if (!self::get_option('products--sorting')) {
			remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
		}

		remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
		remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

		remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
		remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
		add_action('woocommerce_shop_loop_item_title', array($this, 'woocommerce_template_loop_product_title'), 10);
		remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

		remove_action('woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 10);
		remove_action('woocommerce_after_subcategory', 'woocommerce_template_loop_category_link_close', 10);

		remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
		add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 15);

		remove_action('woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10);
		add_action('woocommerce_review_after_comment_text', 'woocommerce_review_display_rating', 25);

		remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
		add_action('woocommerce_after_single_product_summary', 'woocommerce_template_single_meta', 10);

		if (!self::get_option('single_product--share')) {
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
		}

		if (!self::get_option('single_product--related_products')) {
			remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
		}

		// Catalog mode
		if (self::get_option('products--catalog_mode')) {
			remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
			add_action('woocommerce_single_product_summary', array($this, 'catalog_mode_text'), 30);
		}

		// Products per page
		add_filter('loop_shop_per_page', create_function('$cols', 'return ' . self::get_option('products--per_page') . ';'), 20);

		// Products columns
		add_filter('loop_shop_columns', array($this, 'loop_shop_columns'));

		// Related products
		add_filter('woocommerce_output_related_products_args', array($this, 'woocommerce_output_related_products_args'));

		// Quick view
		if(self::get_option('products--quick_view')) {
			add_action('woocommerce_after_shop_loop_item', array($this, 'quick_view_btn'), 1);
		}

		if (defined('DOING_AJAX')) {
			add_action('wp_ajax_' . self::$theme_prefix . '_wc_quick_view', array($this, 'quick_view'));
			add_action('wp_ajax_nopriv_' . self::$theme_prefix . '_wc_quick_view', array($this, 'quick_view'));
		}

		// Cart
		remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
		add_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 20);

		add_filter('woocommerce_add_to_cart_fragments', array($this, 'update_minicart_count'));

		// Cross-sells posts per page
		add_filter('woocommerce_cross_sells_total', array($this, 'woocommerce_cross_sells_total'));
		// Cross-sells columns
		add_filter('woocommerce_cross_sells_columns', array($this, 'woocommerce_cross_sells_columns'));
	}


	public static function init() {
		if(is_null(self::$_instance)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}


	public static function is_woocommerce() {
		if (function_exists('is_woocommerce')) {
				return is_woocommerce();
		}
		return false;
	}


	public static function is_cart() {
		if (function_exists('is_cart')) {
			return is_cart();
		}
		return false;
	}


	public static function is_checkout() {
		if (function_exists('is_checkout')) {
			return is_checkout();
		}
		return false;
	}


	public static function is_category() {
		if (function_exists('is_product_category')) {
			return is_product_category();
		}
		return false;
	}


	public static function get_category_image_src() {
		if (self::is_category()) {
			global $wp_query;
			$category = $wp_query->get_queried_object();
			$thumbnail_id = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true);
			if ($thumbnail_id) {
				$image_src = wp_get_attachment_url($thumbnail_id);
				if ($image_src) {
					// Prevent esc_url from breaking spaces in urls for image embeds
					// Ref: http://core.trac.wordpress.org/ticket/23605
					$image_src = str_replace(' ', '%20', $image_src);
					return esc_url($image_src);
				}
			}
		}
		return false;
	}


	// Breadcrumb
	public static function woocommerce_breadcrumb_defaults($args) {
		$args['delimiter'] = ' > ';
		$args['wrap_before'] = '<nav class="breadcrumb" itemprop="breadcrumb">';
		$args['wrap_after'] = '</nav>';
		return $args;
	}


	public static function breadcrumb() {
		if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('<nav class="breadcrumb" itemprop="breadcrumb">','</nav>');
		} else {
			woocommerce_breadcrumb();
		}
	}


	// Products
	public static function woocommerce_template_loop_product_title() {
		echo get_the_title();
	}


	// Catalog mode
	public static function catalog_mode_text() {
		echo wp_kses(self::get_option('products--catalog_mode_text'), 'post');
	}


	// Products columns
	public static function loop_shop_columns() {
		return self::get_option('products--columns');
	}


	// Related products
	public static function woocommerce_output_related_products_args($args) {
		$args['posts_per_page'] = self::get_option('single_product--related_products_per_page');
		$args['columns'] = self::get_option('single_product--related_products_columns');
		return $args;
	}


	// Quick view button
	public static function quick_view_btn() {
		global $product;

		echo sprintf(
			'<a href="#" rel="nofollow" data-product-id="%s" class="cat-lst-el-btn __quick_view js--quick-view-btn" title="%s"><span class="icon-search"></span></a>',
			esc_attr($product->id),
			esc_html__('Quick view', 'orchard')
		);
	}


	// Quick view
	public static function quick_view() {
		if (! wp_verify_nonce(htmlentities($_POST['nonce']), self::$theme_prefix . '-nonce')) {
			echo 'error';
			wp_die();
		}

		global $product, $woocommerce, $post;

		$product_id = absint($_POST['product']);

		$post = get_post($product_id);

		$product = get_product($product_id);

		woocommerce_get_template('content-quick-view.php');

		wp_die();
	}


	// Cart
	public static function update_minicart_count($fragments) {
		ob_start();

		$count = WC()->cart->cart_contents_count;

		?><span class="minicart_count <?php if (!$count) echo '__zero'; ?> js--minicart_count"><?php echo absint($count); ?></span><?php

		$fragments['.js--minicart_count'] = ob_get_clean();

		return $fragments;
	}


	// Cross-sells posts per page
	public static function woocommerce_cross_sells_total() {
		return 6;
	}


	// Cross-sells columns
	public static function woocommerce_cross_sells_columns() {
		return 6;
	}


}

OrchardShop::init();
