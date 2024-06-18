<?php
$boxSections[] = array(
	'title' => esc_html__('Posts', 'orchard'),
	'desc' => esc_html__('Change posts templates and configurations.', 'orchard'),
	'fields' => array(
		array(
			'id' => 'local_single_post--double_width',
			'type' => 'switch',
			'title' => esc_html__('Double width on posts list', 'orchard'),
			'default' => 0,
		),

		array(
			'id' => 'local_single_post--featured_image',
			'type' => 'button_set',
			'title' => esc_html__('Featured image', 'orchard'),
			'subtitle' => esc_html__('If on, featured image will be displayed at single post before content.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_single_post--categories',
			'type' => 'button_set',
			'title' => esc_html__('Categories', 'orchard'),
			'subtitle' => esc_html__('If on, categories will be displayed.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_single_post--author',
			'type' => 'button_set',
			'title' => esc_html__('Author', 'orchard'),
			'subtitle' => esc_html__('If on, the author will be displayed in title wrapper.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_single_post--share',
			'type' => 'button_set',
			'title' => esc_html__('Social share', 'orchard'),
			'subtitle' => esc_html__('If on, social share icons will be displayed in title wrapper.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_single_post--tags',
			'type' => 'button_set',
			'title' => esc_html__('Tags after content', 'orchard'),
			'subtitle' => esc_html__('If on, the tags will be displayed after post content.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_single_post--nav',
			'type' => 'button_set',
			'title' => esc_html__('Post navigation', 'orchard'),
			'subtitle' => esc_html__('If on, navigation will be displayed below content.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_single_post--nav__fixed',
			'type' => 'button_set',
			'title' => esc_html__('Fixed post navigation', 'orchard'),
			'subtitle' => esc_html__('If on, navigation will be fixed in the middle of browser window.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),
	)
);