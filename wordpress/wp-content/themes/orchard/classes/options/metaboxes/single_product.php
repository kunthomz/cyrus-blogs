<?php
$boxSections[] = array(
	'title' => esc_html__('Single product', 'orchard'),
	'desc' => esc_html__('Change single product templates and configurations.', 'orchard'),
	'fields' => array(
		array(
			'id' => 'local_products--catalog_mode',
			'type' => 'button_set',
			'title' => esc_html__('Enable catalog mode?', 'orchard'),
			'subtitle' => esc_html__('If on, Add to Cart buttons will not be displayed to users.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_single_product--extra_tab',
			'type' => 'button_set',
			'title' => esc_html__('Enable extra tab?', 'orchard'),
			'subtitle' => esc_html__('If on, an additional global tab will be displayed in products tabs.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_single_product--share',
			'type' => 'button_set',
			'title' => esc_html__('Enable share?', 'orchard'),
			'subtitle' => esc_html__('If on, share icons below product details will be displayed.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),

		array(
			'id' => 'local_single_product--related_products',
			'type' => 'button_set',
			'title' => esc_html__('Enable related products?', 'orchard'),
			'subtitle' => esc_html__('If on, related products will be displayed.', 'orchard'),
			'options' => array(
				'1' => 'On',
				'' => 'Default',
				'0' => 'Off',
			),
			'default' => '',
		),
	)
);
