<?php
$boxSections[] = array(
	'title' => esc_html__('Content', 'orchard'),
	'desc' => esc_html__('Change the content section configuration.', 'orchard'),
	'fields' => array(
		array(
			'id' => 'local_content_styles--padding',
			'type' => 'spacing',
			'mode' => 'padding',
			'title' => esc_html__('Content padding', 'orchard'),
			'right' => false,
			'left' => false,
			'units' => 'px',
		),

		array(
			'id'=>'local_content--dynamic_area__before',
			'type' => 'select',
			'title' => esc_html__('Dynamic area before content', 'orchard'),
			'subtitle' => esc_html__('Select the page which content will be loaded and displayed before content.', 'orchard'),
			'data' => 'pages',
			'default' => '',
		),

		array(
			'id'=>'local_content--dynamic_area__after',
			'type' => 'select',
			'title' => esc_html__('Dynamic area after content', 'orchard'),
			'subtitle' => esc_html__('Select the page which content will be loaded and displayed after content.', 'orchard'),
			'data' => 'pages',
			'default' => '',
		),
	),
);