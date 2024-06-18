<?php
Redux::setSection( $theme_options, array(
	'id' => 'sec_single_product',
	'title' => esc_html__('Single product', 'orchard'),
	'desc' => esc_html__('Change single product templates and configurations.', 'orchard'),
	'icon' => 'el el-shopping-cart-sign',
	'fields' => array(
		array(
			'id' => 'single_product--layout--sidebars',
			'type' => 'image_select',
			'title' => esc_html__( 'Sidebars in single product', 'orchard' ),
			'subtitle' => esc_html__( 'Select the layout to be used in single products.', 'orchard' ),
			'options' => array(
				'' => array(
					'alt' => 'default',
					'img' => self::$theme_uri . '/images/sidebars/def.png'
				),
				'without' => array(
					'alt' => 'without sidebar',
					'img' => self::$theme_uri . '/images/sidebars/1c.png'
				),
				'left' => array(
					'alt' => 'sidebar at left',
					'img' => self::$theme_uri . '/images/sidebars/2cl.png'
				),
				'right' => array(
					'alt' => 'sidebar at right',
					'img' => self::$theme_uri . '/images/sidebars/2cr.png'
				),
				'both' => array(
					'alt' => 'both sidebars',
					'img' => self::$theme_uri . '/images/sidebars/3cm.png'
				),
				'both_left' => array(
					'alt' => 'both sidebars at left',
					'img' => self::$theme_uri . '/images/sidebars/3cl.png'
				),
				'both_right' => array(
					'alt' => 'both sidebars at right',
					'img' => self::$theme_uri . '/images/sidebars/3cr.png'
				)
			),
			'default' => '',
		),

		array(
			'id' => 'single_product--breadcrumb',
			'type' => 'switch',
			'title' => esc_html__('Breadcrumb', 'orchard'),
			'subtitle' => esc_html__('If on, breadcrumbs will be displayed at product before title.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'single_product--extra_tab',
			'type' => 'switch',
			'title' => esc_html__('Extra tab', 'orchard'),
			'subtitle' => esc_html__('If on, an additional global tab will be displayed in products tabs.', 'orchard'),
			'default' => 0,
		),

			array(
				'id' => 'single_product--extra_tab_title',
				'type' => 'text',
				'title' => esc_html__('Extra tab title', 'orchard'),
				'subtitle' => esc_html__('Define the extra tab title.', 'orchard'),
				'default' => 'Extra Tab',
				'validate' => 'not_empty',
				'required' => array('single_product--extra_tab', '=', 1),
			),

			array(
				'id' => 'single_product--extra_tab_content',
				'type' => 'editor',
				'title' => esc_html__('Extra tab content', 'orchard'),
				'subtitle' => esc_html__('Define the extra tab content.', 'orchard'),
				'default' => 'Content',
				'validate' => 'not_empty',
				'required' => array('single_product--extra_tab', '=', 1),
			),

		array(
			'id' => 'single_product--share',
			'type' => 'switch',
			'title' => esc_html__('Share', 'orchard'),
			'subtitle' => esc_html__('If on, share icons below product details will be displayed.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'single_product--related_products',
			'type' => 'switch',
			'title' => esc_html__('Related products', 'orchard'),
			'subtitle' => esc_html__('If on, related products will be displayed.', 'orchard'),
			'default' => 1,
		),

			array(
				'id' => 'single_product--related_products_per_page',
				'type' => 'text',
				'title' => esc_html__('Related products per page', 'orchard'),
				'subtitle' => esc_html__('Define the number of related products displayed per page.', 'orchard'),
				'default' => '4',
				'validate' => 'numeric',
				'required' => array('single_product--related_products', '=', 1),
			),

			array(
				'id' => 'single_product--related_products_columns',
				'type' => 'slider',
				'title' => esc_html__('Related products columns', 'orchard'),
				'subtitle' => esc_html__('Define columns number of related products.', 'orchard'),
				'default' => '4',
				'min' => '1',
				'step' => '1',
				'max' => '6',
				'required' => array('single_product--related_products', '=', 1),
			),

		array(
			'id' => 'single_product--header_section',
			'type' => 'section',
			'title' => esc_html__('Header settings at shop', 'orchard'),
			'indent' => true,
		),

			array(
				'id' => 'single_product--header--negative_height',
				'type' => 'button_set',
				'title' => esc_html__('Negative height', 'orchard'),
				'subtitle' => esc_html__('If on, header and top header will not have height and background and title wrapper or content will be showed behind it.', 'orchard'),
				'options' => array(
					'1' => 'On',
					'' => 'Default',
					'0' => 'Off',
				),
				'default' => '',
			),

			array(
				'id' => 'single_product--header--color_scheme',
				'type' => 'select',
				'title' => esc_html__('Color scheme for header', 'orchard'),
				'options' => array(
					'light' => esc_html__('Light text', 'orchard'),
					'dark' => esc_html__('Dark text', 'orchard'),
				),
				'default' => '',
			),

		array(
			'id' => 'single_product--header_section__end',
			'type' => 'section',
			'indent' => false,
		),
	)
) );
