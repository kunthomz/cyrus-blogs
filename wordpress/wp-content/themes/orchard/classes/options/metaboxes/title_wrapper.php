<?php
$boxSections[] = array(
	'title' => esc_html__('Title wrapper', 'orchard'),
	'desc' => esc_html__('Change the title wrapper section configuration.', 'orchard'),
	'fields' => array(
		array(
			'id' => 'local_title_wrapper',
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
			'id' => 'local_title_wrapper--full_height',
			'type' => 'button_set',
			'title' => esc_html__('Full viewport height', 'orchard'),
			'subtitle' => esc_html__('If on, title wrapper will have same height than viewport/window.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_title_wrapper--parallax',
			'type' => 'button_set',
			'title' => esc_html__('Parallax', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_title_wrapper--breadcrumb',
			'type' => 'button_set',
			'title' => esc_html__('Breadcrumb', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_title_wrapper--desc',
			'type' => 'button_set',
			'title' => esc_html__('Description after title', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_title_wrapper--sub_title',
			'type' => 'text',
			'title' => esc_html__('Subtitle', 'orchard'),
			'subtitle' => esc_html__('Subtitle will be displayed above the title.', 'orchard'),
		),

		array(
			'id' => 'local_title_wrapper--desc_text',
			'type' => 'textarea',
			'title' => esc_html__('Description', 'orchard'),
			'subtitle' => esc_html__('You can use a, strong, br, em and strong HTML tags. Use this field to display an optional text below main page title.', 'orchard'),
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
			'id' => 'local_title_wrapper_styles--padding',
			'type' => 'spacing',
			'mode' => 'padding',
			'title' => esc_html__('Title wrapper padding', 'orchard'),
			'right' => false,
			'left' => false,
			'units' => 'px',
		),

		array(
			'id' => 'local_title_wrapper_styles--font_breadcrumb',
			'type' => 'typography',
			'title' => esc_html__('Breadcrumb typography', 'orchard'),
			'google' => true,
			'font-backup' => true,
			'letter-spacing' => true,
			'text-transform' => true,
			'subsets' => true,
			'text-align' => false,
			'all_styles' => true,
		),

		array(
			'id' => 'local_title_wrapper_styles--font_breadcrumb__custom_family',
			'type' => 'text',
			'title' => esc_html__('Breadcrumb typography: custom font family', 'orchard'),
			'subtitle' => esc_html__('You can use here your Typekit fonts.', 'orchard'),
			'default' => '',
			'placeholder' => '"proxima-nova", Arial, Helvetica, sans-serif',
			'validate' => 'no_html',
		),

		array(
			'id' => 'local_title_wrapper_styles--font_title',
			'type' => 'typography',
			'title' => esc_html__('Title typography', 'orchard'),
			'google' => true,
			'font-backup' => true,
			'letter-spacing' => true,
			'text-transform' => true,
			'subsets' => true,
			'text-align' => false,
			'all_styles' => true,
		),

		array(
			'id' => 'local_title_wrapper_styles--font_title__custom_family',
			'type' => 'text',
			'title' => esc_html__('Title typography: custom font family', 'orchard'),
			'subtitle' => esc_html__('You can use here your Typekit fonts.', 'orchard'),
			'default' => '',
			'placeholder' => '"proxima-nova", Arial, Helvetica, sans-serif',
			'validate' => 'no_html',
		),

		array(
			'id' => 'local_title_wrapper_styles--font_desc',
			'type' => 'typography',
			'title' => esc_html__('Description typography', 'orchard'),
			'subtitle' => esc_html__('Typography to optional description used in pages.', 'orchard'),
			'google' => true,
			'font-backup' => true,
			'letter-spacing' => true,
			'text-transform' => true,
			'subsets' => true,
			'text-align' => false,
			'all_styles' => true,
		),

		array(
			'id' => 'local_title_wrapper_styles--font_desc__custom_family',
			'type' => 'text',
			'title' => esc_html__('Description typography: custom font family', 'orchard'),
			'subtitle' => esc_html__('You can use here your Typekit fonts.', 'orchard'),
			'default' => '',
			'placeholder' => '"proxima-nova", Arial, Helvetica, sans-serif',
			'validate' => 'no_html',
		),

		array(
			'id' => 'local_title_wrapper_styles--bg',
			'type' => 'background',
			'title' => esc_html__('Title wrapper background', 'orchard'),
			'subtitle' => esc_html__('Background image will be replaced on background pattern if you chose pattern in the next option.', 'orchard'),
		),

		array(
			'id' => 'local_title_wrapper_styles--bg_overlay',
			'type' => 'color_rgba',
			'title' => esc_html__('Title wrapper background ovarlay', 'orchard'),
			'default' => array(
				'alpha' => 0,
			),
		),

		array(
			'id' => 'local_title_wrapper_styles--bg_overlay_pattern',
			'type' => 'button_set',
			'title' => esc_html__('Enable dotted overlay pattern?', 'orchard'),
			'options' => array(
				'1' => 'On',
				'0' => 'Off',
			),
			'default' => '0',
		),
	),
);