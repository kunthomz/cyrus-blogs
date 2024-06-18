<?php
Redux::setSection( $theme_options, array(
	'id' => 'main_sec_title_wrapper',
	'title' => esc_html__('Title wrapper', 'orchard'),
	'icon' => 'el el-star',
) );

Redux::setSection( $theme_options, array(
	'id' => 'sec_title_wrapper',
	'title' => esc_html__('Title wrapper settings', 'orchard'),
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'title_wrapper',
			'type' => 'switch',
			'title' => esc_html__('Enable this layout part?', 'orchard'),
			'subtitle' => esc_html__('If on, this layout part will be displayed.', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'title_wrapper--full_height',
			'type' => 'switch',
			'title' => esc_html__('Full viewport height', 'orchard'),
			'subtitle' => esc_html__('If on, title wrapper will have same height than viewport/window.', 'orchard'),
			'default' => 0,
		),

		array(
			'id' => 'title_wrapper--parallax',
			'type' => 'switch',
			'title' => esc_html__('Parallax', 'orchard'),
			'default' => 1,
		),

		array(
			'id' => 'title_wrapper--desc',
			'type' => 'switch',
			'title' => esc_html__('Description after title', 'orchard'),
			'default' => 1,
			'required' => array('title_wrapper--title_and_desc_cols_sm', '!=', 0),
		),

		array(
			'id' => 'title_wrapper--breadcrumb',
			'type' => 'switch',
			'title' => esc_html__('Breadcrumb', 'orchard'),
			'default' => 1,
		),
	)
) );

Redux::setSection( $theme_options, array(
	'id' => 'sec_title_wrapper_styles',
	'title' => esc_html__('Title wrapper styles', 'orchard'),
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'title_wrapper_styles--border',
			'type' => 'border',
			'title' => esc_html__('Title wrapper border', 'orchard'),
			'all' => false,
			'left' => false,
			'right' => false,
		),

		array(
			'id' => 'title_wrapper_styles--padding',
			'type' => 'spacing',
			'mode' => 'padding',
			'title' => esc_html__('Title wrapper padding', 'orchard'),
			'right' => false,
			'left' => false,
			'units' => 'px',
		),

		array(
			'id' => 'title_wrapper_styles--align',
			'type' => 'button_set',
			'title' => esc_html__('Text align', 'orchard'),
			'options' => array(
				'left' => esc_html__('Left', 'orchard'),
				'center' => esc_html__('Center', 'orchard'),
				'right' => esc_html__('Right', 'orchard'),
			),
			'default' => 'center',
		),

		array(
			'id' => 'title_wrapper_styles--font_breadcrumb',
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
			'id' => 'title_wrapper_styles--font_breadcrumb__custom_family',
			'type' => 'text',
			'title' => esc_html__('Breadcrumb typography: custom font family', 'orchard'),
			'subtitle' => esc_html__('You can use here your Typekit fonts.', 'orchard'),
			'default' => '',
			'placeholder' => '"proxima-nova", Arial, Helvetica, sans-serif',
			'validate' => 'no_html',
		),

		array(
			'id' => 'title_wrapper_styles--font_title',
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
			'id' => 'title_wrapper_styles--font_title__custom_family',
			'type' => 'text',
			'title' => esc_html__('Title typography: custom font family', 'orchard'),
			'subtitle' => esc_html__('You can use here your Typekit fonts.', 'orchard'),
			'default' => '',
			'placeholder' => '"proxima-nova", Arial, Helvetica, sans-serif',
			'validate' => 'no_html',
		),

		array(
			'id' => 'title_wrapper_styles--font_desc',
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
			'id' => 'title_wrapper_styles--font_desc__custom_family',
			'type' => 'text',
			'title' => esc_html__('Description typography: custom font family', 'orchard'),
			'subtitle' => esc_html__('You can use here your Typekit fonts.', 'orchard'),
			'default' => '',
			'placeholder' => '"proxima-nova", Arial, Helvetica, sans-serif',
			'validate' => 'no_html',
		),

		array(
			'id' => 'title_wrapper_styles--bg',
			'type' => 'background',
			'title' => esc_html__('Title wrapper background', 'orchard'),
			'subtitle' => esc_html__('Background image will be replaced on background pattern if you chose pattern in the next option.', 'orchard'),
		),
	)
) );
