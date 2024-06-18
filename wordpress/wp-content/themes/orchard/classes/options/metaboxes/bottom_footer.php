<?php
$boxSections[] = array(
	'title' => esc_html__('Bottom footer', 'orchard'),
	'desc' => esc_html__('Change the bottom footer section configuration.', 'orchard'),
	'fields' => array(
		array(
			'id' => 'local_bottom_footer',
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
	),
);