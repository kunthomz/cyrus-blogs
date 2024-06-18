<?php
$boxSections[] = array(
	'title' => esc_html__('Layout', 'orchard'),
	'desc' => esc_html__('Change the main theme\'s layout and configure it.', 'orchard'),
	'fields' => array(
		array(
			'id' => 'local_general_styles--accent',
			'type' => 'color',
			'title' => esc_html__('Accent color', 'orchard'),
			'subtitle' => esc_html__('Pick an accent color to overwrite the default from the theme. Usually used for links and buttons.', 'orchard'),
			'transparent' => false,
			'validate' => 'color',
		),

		array(
			'id' => 'local_layout--boxed',
			'type' => 'select',
			'title' => esc_html__('Normal or boxed', 'orchard'),
			'options' => array(
				'normal' => esc_html__('Normal', 'orchard'),
				'boxed' => esc_html__('Boxed', 'orchard'),
				'boxed_laterals' => esc_html__('Boxed only lateral margins', 'orchard'),
				'bordered' => esc_html__('Bordered', 'orchard'),
			),
			'default' => '',
		),

			array(
				'id' => 'local_layout--border',
				'type' => 'border',
				'title' => esc_html__('Layout border', 'orchard'),
				'subtitle' => esc_html__('Select a custom border to be applied in the viewport/window.', 'orchard'),
				'all' => false,
				'style' => false,
			),

		array(
			'id' => 'local_layout--sidebars',
			'type' => 'image_select',
			'title' => esc_html__( 'Sidebars', 'orchard' ),
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
			'id' => 'local_layout--header_width',
			'type' => 'select',
			'title' => esc_html__('Header container type', 'orchard'),
			'subtitle' => esc_html__('Define container configuration to be used, it can be normal, expanded or compact.', 'orchard'),
			'options' => array(
				'expanded' => 'Expanded',
				'normal' => 'Normal',
				'compact' => 'Compact',
			),
			'default' => '',
		),

		array(
			'id' => 'local_layout--content_width',
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
			'id' => 'local_layout--footer_width',
			'type' => 'select',
			'title' => esc_html__('Footer container type', 'orchard'),
			'subtitle' => esc_html__('Define container configuration to be used, it can be normal, expanded or compact.', 'orchard'),
			'options' => array(
				'expanded' => 'Expanded',
				'normal' => 'Normal',
				'compact' => 'Compact',
			),
			'default' => '',
		),

		array(
			'id' => 'local_general_styles--bg',
			'type' => 'background',
			'title' => esc_html__('Body background', 'orchard'),
			'subtitle' => esc_html__('Body background with image, color and other options. Usually visible only when using boxed layout. Background image will be replaced on background pattern if you chose pattern in the next option.', 'orchard'),
		),
	),
);
