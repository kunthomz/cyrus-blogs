<?php
Redux::setSection( $theme_options, array(
	'id' => 'sec_single_post',
	'title' => esc_html__('Single post', 'orchard'),
	'desc' => esc_html__('Change single post templates.', 'orchard'),
	'icon' => 'el el-pencil-alt',
	'fields' => array(
		array(
			'id' => 'single_post--layout--sidebars',
			'type' => 'image_select',
			'title' => esc_html__( 'Sidebars in single post', 'orchard' ),
			'subtitle' => esc_html__( 'Select the layout to be used in single post.', 'orchard' ),
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
			'id' => 'single_post--layout--content_width',
			'type' => 'select',
			'title' => esc_html__('Content container type', 'orchard'),
			'subtitle' => esc_html__('Define container configuration to be used, it can be normal, expanded or compact.', 'orchard'),
			'options' => array(
				'expanded' => esc_html__('Expanded', 'orchard'),
				'normal' => esc_html__('Normal', 'orchard'),
				'compact' => esc_html__('Compact', 'orchard'),
			),
			'default' => '',
		),

		array(
			'id' => 'single_post--featured_image',
			'type' => 'switch',
			'title' => esc_html__('Featured image', 'orchard'),
			'subtitle' => esc_html__('If on, featured image will be displayed at single post before content.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'single_post--categories',
			'type' => 'switch',
			'title' => esc_html__('Categories', 'orchard'),
			'subtitle' => esc_html__('If on, categories will be displayed.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'single_post--author',
			'type' => 'switch',
			'title' => esc_html__('Author', 'orchard'),
			'subtitle' => esc_html__('If on, the author will be displayed.', 'orchard'),
			'default' => 0,
		),

		array(
			'id' => 'single_post--share',
			'type' => 'switch',
			'title' => esc_html__('Social share', 'orchard'),
			'subtitle' => esc_html__('If on, social share icons will be displayed.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'single_post--tags',
			'type' => 'switch',
			'title' => esc_html__('Tags after content', 'orchard'),
			'subtitle' => esc_html__('If on, the tags will be displayed after post content.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'single_post--nav',
			'type' => 'switch',
			'title' => esc_html__('Post navigation', 'orchard'),
			'subtitle' => esc_html__('If on, navigation will be displayed below content.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'single_post--nav__fixed',
			'type' => 'switch',
			'title' => esc_html__('Fixed post navigation', 'orchard'),
			'subtitle' => esc_html__('If on, navigation will be fixed in the middle of browser window.', 'orchard'),
			'default' => 0,
			'required' => array('single_post--nav', '=', 1),
		),

		array(
			'id' => 'single_post--header_section',
			'type' => 'section',
			'title' => esc_html__('Header settings at single post', 'orchard'),
			'indent' => true,
		),

			array(
				'id' => 'single_post--header--negative_height',
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
				'id' => 'single_post--header--color_scheme',
				'type' => 'select',
				'title' => esc_html__('Color scheme for header', 'orchard'),
				'options' => array(
					'light' => esc_html__('Light text', 'orchard'),
					'dark' => esc_html__('Dark text', 'orchard'),
				),
				'default' => '',
			),

		array(
			'id' => 'single_post--header_section__end',
			'type' => 'section',
			'indent' => false,
		),

		array(
			'id' => 'single_post--title_wrapper_section',
			'type' => 'section',
			'title' => esc_html__('Title wrapper settings at single post', 'orchard'),
			'indent' => true,
		),

			array(
				'id' => 'single_post--title_wrapper',
				'type' => 'button_set',
				'title' => esc_html__('Title wrapper at single post', 'orchard'),
				'subtitle' => esc_html__('If on, title wrapper will be displayed at single post.', 'orchard'),
				'options' => array(
					'1' => 'On',
					'' => 'Default',
					'0' => 'Off',
				),
				'default' => '',
			),

			array(
				'id' => 'single_post--title_wrapper--full_height',
				'type' => 'button_set',
				'title' => esc_html__('Full viewport height at single post', 'orchard'),
				'subtitle' => esc_html__('If on, title wrapper will have same height than viewport/window at single post.', 'orchard'),
				'options' => array(
					'1' => 'On',
					'' => 'Default',
					'0' => 'Off',
				),
				'default' => '',
			),

			array(
				'id' => 'single_post--title_wrapper--parallax',
				'type' => 'button_set',
				'title' => esc_html__('Title wrapper parallax at single post', 'orchard'),
				'options' => array(
					'1' => 'On',
					'' => 'Default',
					'0' => 'Off',
				),
				'default' => '',
			),

			array(
				'id' => 'single_post--title_wrapper--featured_image_on_bg',
				'type' => 'switch',
				'title' => esc_html__('Featured image as title wrapper background', 'orchard'),
				'default' => 0,
			),

			array(
				'id' => 'single_post--title_wrapper_styles--align',
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
				'id' => 'single_post--title_wrapper_styles--font_breadcrumb',
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
				'id' => 'single_post--title_wrapper_styles--font_title',
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
				'id' => 'single_post--title_wrapper_styles--font_desc',
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
				'id' => 'single_post--title_wrapper_styles--bg_overlay',
				'type' => 'color_rgba',
				'title' => esc_html__('Title wrapper background overlay', 'orchard'),
				'default' => array(
					'alpha' => 0,
				),
			),

		array(
			'id' => 'single_post--title_wrapper_section__end',
			'type' => 'section',
			'indent' => false,
		),
	)
) );
