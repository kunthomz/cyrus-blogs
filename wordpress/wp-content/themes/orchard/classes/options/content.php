<?php
Redux::setSection( $theme_options, array(
	'id' => 'main_sec_content',
	'title' => esc_html__('Content', 'orchard'),
	'icon' => 'el el-align-left',
) );

Redux::setSection( $theme_options, array(
	'id' => 'sec_content',
	'title' => esc_html__('Content settings', 'orchard'),
	'subsection' => true,
	'fields' => array(
		array(
			'id'=>'content--dynamic_area__before',
			'type' => 'select',
			'title' => esc_html__('Dynamic area before content', 'orchard'),
			'subtitle' => esc_html__('Select the page which content will be loaded and displayed before content.', 'orchard'),
			'data' => 'pages',
			'default' => '',
		),

		array(
			'id'=>'content--dynamic_area__after',
			'type' => 'select',
			'title' => esc_html__('Dynamic area after content', 'orchard'),
			'subtitle' => esc_html__('Select the page which content will be loaded and displayed after content.', 'orchard'),
			'data' => 'pages',
			'default' => '',
		),
	)
) );

Redux::setSection( $theme_options, array(
	'id' => 'sec_content_styles',
	'title' => esc_html__('Content styles', 'orchard'),
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'content_styles--border',
			'type' => 'border',
			'title' => esc_html__('Content border', 'orchard'),
			'subtitle' => esc_html__('Select a custom border to be applied in the content.', 'orchard'),
			'all' => false,
			'left' => false,
			'right' => false,
		),

		array(
			'id' => 'content_styles--padding',
			'type' => 'spacing',
			'mode' => 'padding',
			'title' => esc_html__('Content padding', 'orchard'),
			'right' => false,
			'left' => false,
			'units' => 'px',
		),
	)
) );
