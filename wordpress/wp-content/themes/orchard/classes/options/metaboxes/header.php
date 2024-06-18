<?php
$boxSections[] = array(
	'title' => esc_html__('Header', 'orchard'),
	'desc' => esc_html__('Change the header section configuration.', 'orchard'),
	'fields' => array(
		array(
			'id' => 'local_header',
			'type' => 'button_set',
			'title' => esc_html__('Enable header?', 'orchard'),
			'subtitle' => esc_html__('If on, this layout part will be displayed in website.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_header--fixed',
			'type' => 'button_set',
			'title' => esc_html__('Fixed header', 'orchard'),
			'subtitle' => esc_html__('If on, the header will be fixed at screen top on page scroll.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_header--negative_height',
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
			'id' => 'local_header--boxed',
			'type' => 'button_set',
			'title' => esc_html__('Boxed', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_header--layout',
			'type' => 'image_select',
			'title' => esc_html__('Header layout', 'orchard'),
			'options' => array(
				'' => array(
					'alt' => 'default',
					'img' => self::$theme_uri . '/images/sidebars/def.png'
				),
				'layout1' => array(
					'alt' => 'Logo - Menu and Modules',
					'img' => self::$theme_uri . '/images/header-layouts/1.png'
				),
				'layout2' => array(
					'alt' => 'Additional Menu - Logo - Menu and Modules',
					'img' => self::$theme_uri . '/images/header-layouts/2.png'
				),
				'layout3' => array(
					'alt' => 'Logo / Menu and Modules',
					'img' => self::$theme_uri . '/images/header-layouts/3.png'
				),
				'layout4' => array(
					'alt' => 'Logo - Menu',
					'img' => self::$theme_uri . '/images/header-layouts/4.png'
				),
				'layout5' => array(
					'alt' => 'Additional Menu - Logo - Menu',
					'img' => self::$theme_uri . '/images/header-layouts/5.png'
				),
				'layout6' => array(
					'alt' => 'Logo / Menu',
					'img' => self::$theme_uri . '/images/header-layouts/6.png'
				),
				'layout7' => array(
					'alt' => 'Logo - Modules and Popup Menu',
					'img' => self::$theme_uri . '/images/header-layouts/7.png'
				),
				'layout8' => array(
					'alt' => 'Logo - Popup Menu',
					'img' => self::$theme_uri . '/images/header-layouts/8.png'
				),
			),
			'default' => '',
		),

		array(
			'id' => 'local_header--color_scheme',
			'type' => 'select',
			'title' => esc_html__('Color scheme for header', 'orchard'),
			'options' => array(
				'light' => esc_html__('Light text', 'orchard'),
				'dark' => esc_html__('Dark text', 'orchard'),
			),
			'default' => '',
		),

		array(
			'id' => 'local_header--separator',
			'type' => 'button_set',
			'title' => esc_html__('Separator between menu and modules', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_header--mobile_menu',
			'type' => 'button_set',
			'title' => esc_html__('Mobile menu', 'orchard'),
			'subtitle' => esc_html__('If on, a mobile menu link will be displayed on mobile devices (smaller than 768px) and main menu will be hided.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_header--text',
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
				'id' => 'local_header--text_content',
				'type' => 'editor',
				'title' => esc_html__('Text module content', 'orchard'),
				'subtitle' => esc_html__('Place any text or shortcode to be displayed in header. Use &lt;i class="orchard-separator"&gt;&lt;/i&gt; to add a separator in the text. Use &lt;i class="fa fa-home"&gt;&lt;/i&gt; to display Font Awesome icons.', 'orchard'),
				'default' => '',
				'required' => array('local_header--text', '=', 1),
			),

		array(
			'id' => 'local_header--login_ajax',
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
			'id' => 'local_header--woo_cart',
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
			'id' => 'local_header--search',
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
			'id' => 'local_header--social',
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
			'id' => 'local_header_styles--border',
			'type' => 'border',
			'title' => esc_html__('Header border', 'orchard'),
			'subtitle' => esc_html__('Select a custom border to be applied in the header.', 'orchard'),
			'all' => false,
			'left' => false,
			'right' => false,
			'style' => false,
			'color' => false,
		),

		array(
			'id' => 'local_header_styles--font',
			'type' => 'typography',
			'title' => esc_html__('Header typography', 'orchard'),
			'google' => true,
			'font-backup' => true,
			'letter-spacing' => true,
			'text-transform' => true,
			'color' => false,
			'subsets' => true,
			'text-align' => false,
			'all_styles' => true,
		),

		array(
			'id' => 'local_header_styles--font__custom_family',
			'type' => 'text',
			'title' => esc_html__('Header typography: custom font family', 'orchard'),
			'subtitle' => esc_html__('You can use here your Typekit fonts.', 'orchard'),
			'default' => '',
			'placeholder' => '"proxima-nova", Arial, Helvetica, sans-serif',
			'validate' => 'no_html',
		),
	),
);
