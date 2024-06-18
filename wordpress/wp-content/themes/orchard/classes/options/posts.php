<?php
Redux::setSection( $theme_options, array(
	'id' => 'sec_posts',
	'title' => esc_html__('Blog', 'orchard'),
	'desc' => esc_html__('Change blog and archives templates.', 'orchard'),
	'icon' => 'el el-pencil',
	'fields' => array(
		array(
			'id' => 'posts--layout--sidebars',
			'type' => 'image_select',
			'title' => esc_html__( 'Sidebars in blog', 'orchard' ),
			'subtitle' => esc_html__( 'Select the layout to be used in blog.', 'orchard' ),
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
			'id' => 'posts--layout--content_width',
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
			'id' => 'posts--view',
			'type' => 'select',
			'title' => esc_html__('Posts view', 'orchard'),
			'subtitle' => esc_html__('Select the view to be used by posts.', 'orchard'),
			'options' => array(
				'standard' => 'Standard',
				'boxed' => 'Boxed',
				'grid' => 'Grid',
				'metro' => 'Metro',
				'masonry' => 'Masonry',
			),
			'default' => 'standard',
			'validate' => 'not_empty',
		),

		array(
			'id' => 'posts--img',
			'type' => 'switch',
			'title' => esc_html__('Thumbnails', 'orchard'),
			'subtitle' => esc_html__('If on, thumbnails will be displayed in the blog.', 'orchard'),
			'default' => 1,
			'required' => array('posts--view', '!=', 'metro'),
		),

		array(
			'id' => 'posts--img_size',
			'type' => 'select',
			'title' => esc_html__('Thumbnails size', 'orchard'),
			'options' => self::get_image_size_names(),
			'default' => self::$theme_prefix . '_rectangle_medium__crop',
			'validate' => 'not_empty',
		),

		array(
			'id' => 'posts--desc',
			'type' => 'textarea',
			'title' => esc_html__('Description', 'orchard'),
			'subtitle' => esc_html__('You can use a, strong, br, em and strong HTML tags. Use this field to display an optional text on title wrapper layout part.', 'orchard'),
			'validate' => 'html_custom',
			'allowed_html' => array(
				'a' => array(
					'href' => array(),
					'title' => array(),
					'target' => array(),
				),
				'br' => array(),
				'em' => array(),
				'strong' => array()
			),
		),

		array(
			'id' => 'posts--categories',
			'type' => 'switch',
			'title' => esc_html__('Categories', 'orchard'),
			'subtitle' => esc_html__('If on, categories will be displayed.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'posts--nav',
			'type' => 'switch',
			'title' => esc_html__('Posts navigation', 'orchard'),
			'subtitle' => esc_html__('If on, navigation will be displayed below posts.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'posts--header_section',
			'type' => 'section',
			'title' => esc_html__('Header settings at blog', 'orchard'),
			'indent' => true,
		),

			array(
				'id' => 'posts--header--color_scheme',
				'type' => 'select',
				'title' => esc_html__('Color scheme for header', 'orchard'),
				'options' => array(
					'light' => esc_html__('Light text', 'orchard'),
					'dark' => esc_html__('Dark text', 'orchard'),
				),
				'default' => '',
			),

		array(
			'id' => 'posts--header_section__end',
			'type' => 'section',
			'indent' => false,
		),

		array(
			'id' => 'posts--content_section',
			'type' => 'section',
			'title' => esc_html__('Content settings at blog', 'orchard'),
			'indent' => true,
		),

			array(
				'id'=>'posts--content--dynamic_area__before',
				'type' => 'select',
				'title' => esc_html__('Dynamic area before posts', 'orchard'),
				'subtitle' => esc_html__('Select the page which content will be loaded and displayed before posts.', 'orchard'),
				'data' => 'pages',
				'default' => '',
			),

			array(
				'id'=>'posts--content--dynamic_area__after',
				'type' => 'select',
				'title' => esc_html__('Dynamic area after posts', 'orchard'),
				'subtitle' => esc_html__('Select the page which content will be loaded and displayed after content.', 'orchard'),
				'data' => 'pages',
				'default' => '',
			),

			array(
				'id' => 'posts--content_styles--padding',
				'type' => 'spacing',
				'mode' => 'padding',
				'title' => esc_html__('Content padding', 'orchard'),
				'right' => false,
				'left' => false,
				'units' => 'px',
			),

		array(
			'id' => 'posts--content_section__end',
			'type' => 'section',
			'indent' => false,
		),

		array(
			'id' => 'posts--title_wrapper_section',
			'type' => 'section',
			'title' => esc_html__('Title wrapper settings at blog', 'orchard'),
			'indent' => true,
		),

			array(
				'id' => 'posts--title_wrapper',
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
				'id' => 'posts--title_wrapper_styles--font_breadcrumb',
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
				'id' => 'posts--title_wrapper_styles--font_title',
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
				'id' => 'posts--title_wrapper_styles--font_desc',
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
				'id' => 'posts--title_wrapper_styles--bg',
				'type' => 'background',
				'title' => esc_html__('Title wrapper background', 'orchard'),
				'subtitle' => esc_html__('Overwrite title wrapper at blog and archives. Background image will be replaced on background pattern if you chose pattern in the next option.', 'orchard'),
			),

			array(
				'id' => 'posts--title_wrapper_styles--bg_overlay',
				'type' => 'color_rgba',
				'title' => esc_html__('Title wrapper background overlay', 'orchard'),
				'default' => array(
					'alpha' => 0,
				),
			),

		array(
			'id' => 'posts--title_wrapper_section__end',
			'type' => 'section',
			'indent' => false,
		),
	)
) );
