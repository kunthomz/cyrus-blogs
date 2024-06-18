<?php
Redux::setSection( $theme_options, array(
	'id' => 'sec_search',
	'title' => esc_html__('Search', 'orchard'),
	'desc' => esc_html__('Change search results templates and configurations.', 'orchard'),
	'icon' => 'el el-search',
	'fields' => array(
		array(
			'id' => 'search--post_type',
			'type' => 'button_set',
			'title' => esc_html__('Search in post types', 'orchard'),
			'options' => array(
				'all' => esc_html__('All', 'orchard'),
				'post' => esc_html__('Only in posts', 'orchard'),
				'product' => esc_html__('Only in products', 'orchard'),
			),
			'default' => 'all',
		),

		array(
			'id' => 'search--layout--sidebars',
			'type' => 'image_select',
			'title' => esc_html__( 'Sidebars in search results', 'orchard' ),
			'subtitle' => esc_html__( 'Select the layout to be used in search results.', 'orchard' ),
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
			'id' => 'search--layout--content_width',
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
			'id' => 'search--columns',
			'type' => 'slider',
			'title' => esc_html__('Columns', 'orchard'),
			'subtitle' => esc_html__('Define columns number at shop.', 'orchard'),
			'default' => '3',
			'min' => '1',
			'step' => '1',
			'max' => '4',
		),

		array(
			'id' => 'search--title_wrapper_section',
			'type' => 'section',
			'title' => esc_html__('Title wrapper settings at shop', 'orchard'),
			'indent' => true,
		),


			array(
				'id' => 'search--title_wrapper_styles--padding',
				'type' => 'spacing',
				'mode' => 'padding',
				'title' => esc_html__('Title wrapper padding', 'orchard'),
				'right' => false,
				'left' => false,
				'units' => 'px',
			),

			array(
				'id' => 'search--title_wrapper_styles--align',
				'type' => 'button_set',
				'title' => esc_html__('Text align', 'orchard'),
				'options' => array(
					'' => 'Default',
					'left' => esc_html__('Left', 'orchard'),
					'center' => esc_html__('Center', 'orchard'),
					'right' => esc_html__('Right', 'orchard'),
				),
				'default' => '',
			),

		array(
			'id' => 'search--title_wrapper_section__end',
			'type' => 'section',
			'indent' => false,
		),
	)
) );
