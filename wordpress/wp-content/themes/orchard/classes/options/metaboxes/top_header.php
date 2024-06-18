<?php
$boxSections[] = array(
	'title' => esc_html__('Top header', 'orchard'),
	'desc' => esc_html__('Change the top header section configuration.', 'orchard'),
	'fields' => array(
		array(
			'id' => 'local_top_header',
			'type' => 'button_set',
			'title' => esc_html__('Enable this layout part?', 'orchard'),
			'subtitle' => esc_html__('If on, this layout part will be displayed.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_top_header--login_ajax',
			'type' => 'button_set',
			'title' => esc_html__('Login With Ajax', 'orchard'),
			'subtitle' => esc_html__('If on, a Login With Ajax module will be displayed. Requires Login With Ajax plugin activated.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_top_header--woo_cart',
			'type' => 'button_set',
			'title' => esc_html__('Woo minicart', 'orchard'),
			'subtitle' => esc_html__('If on, a WooCommerce minicart will be displayed. Requires WooCommerce plugin activated.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_top_header--search',
			'type' => 'button_set',
			'title' => esc_html__('Search', 'orchard'),
			'subtitle' => esc_html__('If on, a search module will be displayed.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_top_header--text',
			'type' => 'button_set',
			'title' => esc_html__('Text module', 'orchard'),
			'subtitle' => esc_html__('If on, a rich text module will be displayed.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

			array(
				'id' => 'local_top_header--text_content',
				'type' => 'editor',
				'title' => esc_html__('Text module content', 'orchard'),
				'subtitle' => esc_html__('Place any text or shortcode to be displayed in top header. Use [iv_separator] to add a separator in the text. Use [iv_icon icon="cogs"] to display Font Awesome icons. Use [iv_flags] to add WPML flags.', 'orchard'),
				'default' => '',
				'required' => array('local_top_header--text', '=', 1),
			),

		array(
			'id' => 'local_top_header--social',
			'type' => 'button_set',
			'title' => esc_html__('Social module', 'orchard'),
			'subtitle' => esc_html__('If on, a social icon module will be displayed.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_top_header_styles--border',
			'type' => 'border',
			'title' => esc_html__('Top header border', 'orchard'),
			'subtitle' => esc_html__('Select a custom border to be applied in the top header.', 'orchard'),
			'all' => false,
			'left' => false,
			'right' => false,
			'style' => false,
			'color' => false,
		),

		array(
			'id' => 'local_top_header_styles--bg',
			'type' => 'background',
			'title' => esc_html__('Top header background', 'orchard'),
			'subtitle' => esc_html__('Background image will be replaced on background pattern if you chose pattern in the next option.', 'orchard'),
		),

		array(
			'id' => 'local_top_header_styles--font',
			'type' => 'typography',
			'title' => esc_html__('Top header typography', 'orchard'),
			'google' => true,
			'font-backup' => true,
			'letter-spacing' => true,
			'text-transform' => true,
			'subsets' => true,
			'text-align' => false,
			'all_styles' => true,
		),

		array(
			'id' => 'local_top_header_styles--font__custom_family',
			'type' => 'text',
			'title' => esc_html__('Top header typography: custom font family', 'orchard'),
			'subtitle' => esc_html__('You can use here your Typekit fonts.', 'orchard'),
			'default' => '',
			'placeholder' => '"proxima-nova", Arial, Helvetica, sans-serif',
			'validate' => 'no_html',
		),
	),
);