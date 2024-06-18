<?php
// don't load directly
if (!defined('ABSPATH')) die('-1');


class OrchardAddons extends OrchardTheme {


	private static $_instance = null;


	private function __construct() {
		// We safely integrate with VC with this hook
		if (!defined('WPB_VC_VERSION')) {
			return;
		}

		if (function_exists('visual_composer')) {
			add_action('init', array($this, 'disable_vc_meta'), 100);
		}

		add_action('vc_before_init', array($this, 'settings'));

		remove_action( 'wp_enqueue_scripts', 'vc_woocommerce_add_to_cart_script' );
		add_action('wp_enqueue_scripts', array($this, 'vc_woocommerce_add_to_cart_script'));

		add_action('init', array($this, 'integrate_with_vc'));

		// Use this when creating a shortcode addon
		$add_shrtcd = 'add_' . 'shortcode';
		$add_shrtcd('orchard_vc_team_member', array($this, 'render_vc_team_member'));
	}


	public static function init() {
		if(is_null(self::$_instance)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}


	public function disable_vc_meta() {
		remove_action('wp_head', array(visual_composer(), 'addMetaData'));
	}


	public function settings() {
		vc_set_as_theme(true);
		vc_set_default_editor_post_types(array(
			'page',
			'product',
		));
	}


	public function vc_woocommerce_add_to_cart_script() {
		wp_enqueue_script( 'vc_woocommerce-add-to-cart-js', vc_asset_url( 'js/vendors/woocommerce-add-to-cart.js' ), array( 'wc-add-to-cart' ), WPB_VC_VERSION, true );
	}


	public function integrate_with_vc() {
		/*
		 * Add your Visual Composer logic here.
		 * Lets call vc_map function to "register" our custom shortcode within Visual Composer interface.
		 *
		 * More info: http://kb.wpbakery.com/index.php?title=Vc_map
		 */

		$size_names = array_flip(self::get_image_size_names());

		vc_map( array(
			'name' => esc_html__('Team Member', 'orchard'),
			'base' => 'orchard_vc_team_member',
			'content_element' => true,
			'category' => 'Orchard',
			'description' => esc_html__('Display a team member with effects, description and social icons', 'orchard'),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Name', 'orchard'),
					'param_name' => 'title',
					'admin_label' => true,
					'description' => esc_html__('Type your team member name.', 'orchard'),
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Job Title', 'orchard'),
					'param_name' => 'job',
					'description' => esc_html__('Type your team member job title, e.g. Manager.', 'orchard'),
				),
				array(
					'type' => 'attach_image',
					'heading' => esc_html__('Photo', 'orchard'),
					'param_name' => 'img',
					'value' => '',
					'description' => esc_html__('Upload or select a photo from media gallery.', 'orchard'),
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Photo size', 'orchard'),
					'param_name' => 'img_size',
					'value' => $size_names,
					'dependency' => array(
						'element' => 'img',
						'not_empty' => true,
					),
				),
				array(
					'type' => 'textarea_html',
					'heading' => esc_html__('Description', 'orchard'),
					'param_name' => 'content',
					'value' => '',
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Text Position', 'orchard'),
					'param_name' => 'txt_position',
					'value' => array(
						esc_html__('Text and social links after photo', 'orchard') => '',
						esc_html__('Text and social links on second slide (on hover)', 'orchard') => '__card __anim_1',
						esc_html__('Text on first slide, social links on second (on hover)', 'orchard') => '__card __anim_2',
					),
					'std' => '',
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Text Vertical Alignment', 'orchard'),
					'param_name' => 'txt_vertical_align',
					'value' => array(
						esc_html__('Top', 'orchard') => '__top',
						esc_html__('Middle', 'orchard') => '__middle',
						esc_html__('Bottom', 'orchard') => '__bottom',
					),
					'std' => '__middle',
					'dependency' => array(
						'element' => 'txt_position',
						'not_empty' => true,
					),
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Text Alignment', 'orchard'),
					'param_name' => 'txt_align',
					'value' => array(
						esc_html__('Center', 'orchard') => 'text-center',
						esc_html__('Left', 'orchard') => 'text-left',
						esc_html__('Right', 'orchard') => 'text-right',
					),
					'std' => 'text-center',
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Color scheme', 'orchard'),
					'param_name' => 'color_scheme',
					'value' => array(
						esc_html__('Light', 'orchard') => '__light',
						esc_html__('Dark', 'orchard') => '__dark',
					),
					'std' => '__light',
					'dependency' => array(
						'element' => 'txt_position',
						'is_empty' => true,
					),
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html__('Boxed', 'orchard'),
					'param_name' => 'boxed',
					'value' => array( esc_html__('Yes', 'orchard') => '__boxed' ),
					'dependency' => array(
						'element' => 'txt_position',
						'is_empty' => true,
					),
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html__('Scale photo on hover', 'orchard'),
					'param_name' => 'img_scale',
					'value' => array( esc_html__('Yes', 'orchard') => '__scale' ),
					'dependency' => array(
						'element' => 'txt_position',
						'not_empty' => true,
					),
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Filter for photo on hover', 'orchard'),
					'param_name' => 'img_filter',
					'value' => array(
						'Disable' => '',
						'Grayscale (color to gray)' => '__gray',
						'Grayscale (gray to color)' => '__color',
					),
					'std' => '',
					'dependency' => array(
						'element' => 'txt_position',
						'not_empty' => true,
					),
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Overlay', 'orchard'),
					'param_name' => 'img_overlay',
					'value' => array(
						esc_html__('Disable', 'orchard') => '',
						esc_html__('First Slide', 'orchard') => '__overlay',
						esc_html__('Second Slide (on hover)', 'orchard') => '__on-hover',
						esc_html__('Both Slides', 'orchard') => '__both',
						esc_html__('Gradient On First Slide', 'orchard') => '__gradient',
						esc_html__('Gradient On Second Slide (on hover)', 'orchard') => '__gradient-on-hover',
						esc_html__('Gradient On Both Slides', 'orchard') => '__gradient-both',
					),
					'std' => '',
					'dependency' => array(
						'element' => 'txt_position',
						'not_empty' => true,
					),
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__('Overlay Color', 'orchard'),
					'param_name' => 'img_overlay_color',
					'dependency' => array(
						'element' => 'img_overlay',
						'not_empty' => true,
					),
				),
				array(
					'type' => 'vc_grid_id',
					'param_name' => 'grid_id',
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Extra class name', 'orchard'),
					'param_name' => 'ex_class',
					'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS.', 'orchard'),
				),
				array(
					'type' => 'css_editor',
					'heading' => esc_html__('CSS box', 'orchard'),
					'param_name' => 'css',
					'group' => esc_html__('Design Options', 'orchard'),
				),
			),
		) );

		$vc_social_links = array();
		$vc_social_links[] = array(
			'type' => 'checkbox',
			'heading' => esc_html__('Use brand colors', 'orchard'),
			'param_name' => 'brand_colors',
			'group' => esc_html__('Social links', 'orchard'),
		);
		foreach (self::$social_icons as $id => $icon_and_name) {
			$vc_social_links[] = array(
				'type' => 'textfield',
				'heading' => $icon_and_name,
				'param_name' => $id,
				'group' => esc_html__('Social links', 'orchard'),
			);
		}
		vc_add_params( 'orchard_vc_team_member', $vc_social_links );
	}


	/*
	 * Shortcode logic how it should be rendered
	 */
	public function render_vc_team_member($atts, $content = null) {
		$default_social_links = array();
		foreach (self::$social_icons as $id => $icon_and_name) {
			$default_social_links[$id] = '';
		}

		$default_atts = array_merge( array(
			'title' => '',
			'job' => '',
			'img' => '',
			'img_size' => 'full',
			'color_scheme' => '__light',
			'boxed' => '',
			'txt_position' => '',
			'txt_vertical_align' => '__middle',
			'txt_align' => 'text-center',
			'img_scale' => '',
			'img_filter' => '',
			'img_overlay' => '',
			'img_overlay_color' => '',
			'grid_id' => false,
			'ex_class' => false,
			'css' => false,
			'brand_colors' => false,
		), $default_social_links );

		$atts = shortcode_atts( $default_atts, $atts );

		ob_start();
		include $theme_dir . '/plugins/js_composer/templates/team_member.php';
		$output = ob_get_contents();
		ob_get_clean();

		return $output;
	}


}

OrchardAddons::init();
