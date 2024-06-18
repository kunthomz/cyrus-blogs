<?php
Redux::setSection( $theme_options, array(
	'id' => 'sec_shop',
	'title' => esc_html__('Shop', 'orchard'),
	'desc' => esc_html__('Change shop templates and configurations.', 'orchard'),
	'icon' => 'el el-shopping-cart',
	'fields' => array(
		array(
			'id' => 'products--layout--sidebars',
			'type' => 'image_select',
			'title' => esc_html__( 'Sidebars in shop', 'orchard' ),
			'subtitle' => esc_html__( 'Select the layout to be used in shop.', 'orchard' ),
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
			'id' => 'products--layout--content_width',
			'type' => 'select',
			'title' => esc_html__('Content container type', 'orchard'),
			'subtitle' => esc_html__('Define container configuration to be used, it can be normal, expanded or compact.', 'orchard'),
			'options' => array(
				'expanded' => 'Expanded',
				'normal' => 'Normal',
				'compact' => 'Compact',
			),
			'default' => '',
		),

		array(
			'id' => 'products--per_page',
			'type' => 'text',
			'title' => esc_html__('Products per page', 'orchard'),
			'subtitle' => esc_html__('Define the number of products displayed per page.', 'orchard'),
			'default' => '8',
			'validate' => 'numeric',
		),

		array(
			'id' => 'products--columns',
			'type' => 'slider',
			'title' => esc_html__('Columns', 'orchard'),
			'subtitle' => esc_html__('Define columns number at shop.', 'orchard'),
			'default' => '3',
			'min' => '1',
			'step' => '1',
			'max' => '4',
		),

		array(
			'id' => 'products--catalog_mode',
			'type' => 'switch',
			'title' => esc_html__('Catalog mode', 'orchard'),
			'subtitle' => esc_html__('If on, Add to Cart buttons will not be displayed to users.', 'orchard'),
			'default' => 0,
		),

			array(
				'id' => 'products--catalog_mode_text',
				'type' => 'textarea',
				'title' => esc_html__('Catalog mode text', 'orchard'),
				'subtitle' => esc_html__('What will be displayed instead default Add to Cart button.', 'orchard'),
				'default' => 'Get in <a href="#">touch</a> to more details.',
				'required' => array('products--catalog_mode', '=', 1),
			),

		array(
			'id' => 'products--sorting',
			'type' => 'switch',
			'title' => esc_html__('Sorting options', 'orchard'),
			'subtitle' => esc_html__('If on, the sorting options will be displayed in the shop, this way users can order by price or others.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'products--quick_view',
			'type' => 'switch',
			'title' => esc_html__('Quick view feature', 'orchard'),
			'subtitle' => esc_html__('If on, the quick view feature will be avaliable in shop listing.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'products--top_header_section',
			'type' => 'section',
			'title' => esc_html__('Top header settings at shop', 'orchard'),
			'indent' => true,
		),

			array(
				'id' => 'products--top_header',
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
			'id' => 'products--top_header_section__end',
			'type' => 'section',
			'indent' => false,
		),

		array(
			'id' => 'products--header_section',
			'type' => 'section',
			'title' => esc_html__('Header settings at shop', 'orchard'),
			'indent' => true,
		),

			array(
				'id' => 'products--header--negative_height',
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
				'id' => 'products--header--color_scheme',
				'type' => 'select',
				'title' => esc_html__('Color scheme for header', 'orchard'),
				'options' => array(
					'light' => esc_html__('Light text', 'orchard'),
					'dark' => esc_html__('Dark text', 'orchard'),
				),
				'default' => '',
			),

		array(
			'id' => 'products--header_section__end',
			'type' => 'section',
			'indent' => false,
		),

		array(
			'id' => 'products--title_wrapper_section',
			'type' => 'section',
			'title' => esc_html__('Title wrapper settings at shop', 'orchard'),
			'indent' => true,
		),

			array(
				'id' => 'products--title_wrapper',
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
				'id' => 'products--title_wrapper--desc',
				'type' => 'button_set',
				'title' => esc_html__('Enable description after title?', 'orchard'),
				'options' => array(
					'1' => 'On',
					'' => 'Default',
					'0' => 'Off',
				),
				'default' => '',
			),

			array(
				'id' => 'products--title_wrapper_styles--align',
				'type' => 'button_set',
				'title' => esc_html__('Text align', 'orchard'),
				'options' => array(
					'' => esc_html__('Default', 'orchard'),
					'left' => esc_html__('Left', 'orchard'),
					'center' => esc_html__('Center', 'orchard'),
					'right' => esc_html__('Right', 'orchard'),
				),
				'default' => '',
			),

			array(
				'id' => 'products--title_wrapper_styles--font_breadcrumb',
				'type' => 'typography',
				'title' => esc_html__('Breadcrumb typography', 'orchard'),
				'google' => false,
				'font-family' => false,
				'font-style' => false,
				'font-weight' => false,
				'font-size' => false,
				'line-height' => false,
				'subsets' => true,
				'text-align' => false,
			),

			array(
				'id' => 'products--title_wrapper_styles--font_title',
				'type' => 'typography',
				'title' => esc_html__('Title typography', 'orchard'),
				'google' => false,
				'font-family' => false,
				'font-style' => false,
				'font-weight' => false,
				'font-size' => false,
				'line-height' => false,
				'subsets' => true,
				'text-align' => false,
			),

			array(
				'id' => 'products--title_wrapper_styles--font_desc',
				'type' => 'typography',
				'title' => esc_html__('Description typography', 'orchard'),
				'subtitle' => esc_html__('Typography to optional description used in pages.', 'orchard'),
				'google' => false,
				'font-family' => false,
				'font-style' => false,
				'font-weight' => false,
				'font-size' => false,
				'line-height' => false,
				'subsets' => true,
				'text-align' => false,
			),

			array(
				'id' => 'products--title_wrapper_styles--bg',
				'type' => 'background',
				'title' => esc_html__('Title wrapper background', 'orchard'),
				'subtitle' => esc_html__('Overwrite title wrapper at shop. Background image will be replaced on background pattern if you chose pattern in the next option.', 'orchard'),
			),

			array(
				'id' => 'products--title_wrapper_styles--bg_overlay',
				'type' => 'color_rgba',
				'title' => esc_html__('Title wrapper background overlay', 'orchard'),
				'default' => array(
					'alpha' => 0,
				),
			),

			array(
				'id' => 'products--title_wrapper--category_image_on_bg',
				'type' => 'switch',
				'title' => esc_html__('Category image as title wrapper background', 'orchard'),
				'default' => 0,
			),

		array(
			'id' => 'products--title_wrapper_section__end',
			'type' => 'section',
			'indent' => false,
		),
	)
) );
