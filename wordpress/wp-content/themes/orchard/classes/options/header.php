<?php
Redux::setSection( $theme_options, array(
	'id' => 'main_sec_header',
	'title' => esc_html__('Header', 'orchard'),
	'icon' => 'el el-caret-up',
) );

Redux::setSection( $theme_options, array(
	'id' => 'sec_header',
	'title' => esc_html__('Header settings', 'orchard'),
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'header',
			'type' => 'switch',
			'title' => esc_html__('Enable header?', 'orchard'),
			'subtitle' => esc_html__('If on, this layout part will be displayed in website.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'header--fixed',
			'type' => 'switch',
			'title' => esc_html__('Fixed header', 'orchard'),
			'subtitle' => esc_html__('If on, the header will be fixed at screen top on page scroll.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'header--negative_height',
			'type' => 'switch',
			'title' => esc_html__('Negative height', 'orchard'),
			'subtitle' => esc_html__('If on, header and top header will not have height and background and title wrapper or content will be showed behind it.', 'orchard'),
			'default' => 0,
		),

		array(
			'id' => 'header--boxed',
			'type' => 'switch',
			'title' => esc_html__('Boxed', 'orchard'),
			'default' => 0,
		),

		array(
			'id' => 'header--layout',
			'type' => 'image_select',
			'title' => esc_html__('Header layout', 'orchard'),
			'options' => array(
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
			'default' => 'layout3',
		),

		array(
			'id' => 'header--logo_dark',
			'type' => 'media',
			'title' => esc_html__('Logo (dark)', 'orchard'),
			'subtitle' => esc_html__('Upload a dark version of logo used in light backgrounds in the header.', 'orchard'),
			'url' => true,
		),

			array(
				'id' => 'header--logo_dark_retina',
				'type' => 'media',
				'title' => esc_html__('Logo retina (dark)', 'orchard'),
				'subtitle' => esc_html__('Optional retina version displayed in devices with retina display (high resolution display).', 'orchard'),
				'desc' => esc_html__('The same logo image but with twice dimensions, e.g. your logo is 100x100, then your retina logo must be 200x200.', 'orchard'),
				'url' => true,
				'required' => array('header--logo_dark', '!=', null),
			),

		array(
			'id' => 'header--logo_light',
			'type' => 'media',
			'title' => esc_html__('Logo (light)', 'orchard'),
			'subtitle' => esc_html__('Upload a light version of logo used in dark backgrounds in the header.', 'orchard'),
			'url' => true,
		),

			array(
				'id' => 'header--logo_light_retina',
				'type' => 'media',
				'title' => esc_html__('Logo retina (light)', 'orchard'),
				'subtitle' => esc_html__('Optional retina version displayed in devices with retina display (high resolution display).', 'orchard'),
				'desc' => esc_html__('The same logo image but with twice dimensions, e.g. your logo is 100x100, then your retina logo must be 200x200.', 'orchard'),
				'url' => true,
				'required' => array('header--logo_light', '!=', null),
			),

		array(
			'id' => 'header--color_scheme',
			'type' => 'select',
			'title' => esc_html__('Color scheme for header', 'orchard'),
			'options' => array(
				'light' => esc_html__('Light text', 'orchard'),
				'dark' => esc_html__('Dark text', 'orchard'),
			),
			'default' => 'dark',
			'validate' => 'not_empty',
		),

		array(
			'id' => 'header--separator',
			'type' => 'switch',
			'title' => esc_html__('Separator between menu and modules', 'orchard'),
			'default' => 0,
		),

		array(
			'id' => 'header--mobile_menu',
			'type' => 'switch',
			'title' => esc_html__('Mobile menu', 'orchard'),
			'subtitle' => esc_html__('If on, a mobile menu link will be displayed on mobile devices (smaller than 768px) and main menu will be hided.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'header--text',
			'type' => 'switch',
			'title' => esc_html__('Text module', 'orchard'),
			'subtitle' => esc_html__('If on, a rich text module will be displayed.', 'orchard'),
			'default' => 0,
		),

			array(
				'id' => 'header--text_content',
				'type' => 'editor',
				'title' => esc_html__('Text module content', 'orchard'),
				'subtitle' => esc_html__('Place any text or shortcode to be displayed in header. Use &lt;i class="orchard-separator"&gt;&lt;/i&gt; to add a separator in the text. Use &lt;i class="fa fa-home"&gt;&lt;/i&gt; to display Font Awesome icons.', 'orchard'),
				'default' => '9854-888-021, New York, NY',
				'required' => array('header--text', '=', 1),
			),

		array(
			'id' => 'header--login_ajax',
			'type' => 'switch',
			'title' => esc_html__('Login With Ajax module', 'orchard'),
			'subtitle' => esc_html__('If on, a Login With Ajax module will be displayed. Requires Login With Ajax plugin activated.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'header--woo_cart',
			'type' => 'switch',
			'title' => esc_html__('Minicart', 'orchard'),
			'subtitle' => esc_html__('If on, a WooCommerce minicart will be displayed. Requires WooCommerce plugin activated.', 'orchard'),
			'default' => 0,
		),

		array(
			'id' => 'header--search',
			'type' => 'switch',
			'title' => esc_html__('Search module', 'orchard'),
			'subtitle' => esc_html__('If on, a search module will be displayed.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'header--social',
			'type' => 'switch',
			'title' => esc_html__('Social module', 'orchard'),
			'subtitle' => esc_html__('If on, a social icon module will be displayed.', 'orchard'),
			'default' => 0,
		),

			array(
				'id' => 'header--social_links',
				'type' => 'sortable',
				'mode' => 'checkbox',
				'title' => esc_html__('Social links', 'orchard'),
				'subtitle' => esc_html__('Enable social links to be displayed.', 'orchard'),
				'options' => self::$social_icons,
				'required' => array('header--social', '=', 1),
			),

		array(
			'id' => 'header--wpml_mods_section',
			'type' => 'section',
			'title' => esc_html__('WPML modules', 'orchard'),
			'indent' => true,
		),

			array(
				'id' => 'header--wpml_lang',
				'type' => 'switch',
				'title' => esc_html__('WPML language flags', 'orchard'),
				'subtitle' => esc_html__('If on, the avaliable languages flags will be displayed. Only works with WPML activated.', 'orchard'),
				'default' => 0,
			),

			array(
				'id' => 'header--wpml_currency',
				'type' => 'switch',
				'title' => esc_html__('WPML shop currencies', 'orchard'),
				'subtitle' => esc_html__('If on, the avaliable currencies flags will be displayed. Only works with WPML + WooCommerce Multilingual activated.', 'orchard'),
				'default' => 0,
			),

		array(
			'id' => 'header--wpml_mods_section__end',
			'type' => 'section',
			'indent' => false,
		),
	)
) );

Redux::setSection( $theme_options, array(
	'id' => 'sec_header_styles',
	'title' => esc_html__('Header styles', 'orchard'),
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'header_styles--border',
			'type' => 'border',
			'title' => esc_html__('Header border', 'orchard'),
			'subtitle' => esc_html__('Select a custom border to be applied in the header.', 'orchard'),
			'all' => false,
			'left' => false,
			'right' => false,
			'color' => false,
		),

		array(
			'id' => 'header_styles--border_color',
			'type' => 'color_rgba',
			'title' => esc_html__('Header border color', 'orchard'),
			'subtitle' => esc_html__('Select a custom border color to be applied in the header.', 'orchard'),
			'default' => array(
				'alpha' => 0,
			),
		),

		array(
			'id' => 'header_styles--padding',
			'type' => 'spacing',
			'mode' => 'padding',
			'title' => esc_html__('Header padding', 'orchard'),
			'left' => false,
			'right' => false,
			'units' => 'px',
		),

		array(
			'id' => 'header_styles--logo_padding',
			'type' => 'spacing',
			'mode' => 'padding',
			'title' => esc_html__('Logo padding', 'orchard'),
			'subtitle' => esc_html__('Select a custom padding to be applied in the logo.', 'orchard'),
			'left' => false,
			'right' => false,
			'units' => 'px',
		),

		array(
			'id' => 'header_styles--menu_padding',
			'type' => 'spacing',
			'mode' => 'padding',
			'title' => esc_html__('Menu padding', 'orchard'),
			'subtitle' => esc_html__('Select a custom padding to be applied in the menu.', 'orchard'),
			'left' => false,
			'right' => false,
			'units' => 'px',
		),

		array(
			'id' => 'header_styles--mods_padding',
			'type' => 'spacing',
			'mode' => 'padding',
			'title' => esc_html__('Modules padding', 'orchard'),
			'subtitle' => esc_html__('Select a custom padding to be applied in the modules.', 'orchard'),
			'left' => false,
			'right' => false,
			'units' => 'px',
		),

		array(
			'id' => 'header_styles--additional_menu_padding',
			'type' => 'spacing',
			'mode' => 'padding',
			'title' => esc_html__('Additional menu padding', 'orchard'),
			'subtitle' => esc_html__('Select a custom padding to be applied in the additional menu.', 'orchard'),
			'left' => false,
			'right' => false,
			'units' => 'px',
		),

		array(
			'id' => 'header_styles--font',
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
			'id' => 'header_styles--font__custom_family',
			'type' => 'text',
			'title' => esc_html__('Header typography: custom font family', 'orchard'),
			'subtitle' => esc_html__('You can use here your Typekit fonts.', 'orchard'),
			'default' => '',
			'placeholder' => '"proxima-nova", Arial, Helvetica, sans-serif',
			'validate' => 'no_html',
		),
	)
) );
