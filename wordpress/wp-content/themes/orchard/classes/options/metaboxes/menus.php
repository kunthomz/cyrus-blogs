<?php
$boxSections[] = array(
	'title' => esc_html__('Menus', 'orchard'),
	'desc' => esc_html__('Replace the menus to be displayed in the avaliable areas.', 'orchard'),
	'fields' => array(
		array(
			'id' => 'local_menu--top_header',
			'type' => 'select',
			'title' => esc_html__('Top header menu', 'orchard'),
			'desc' => esc_html__('Select a menu to overwrite the top header menu location.', 'orchard'),
			'data' => 'menus',
			'default' => '',
		),

		array(
			'id' => 'local_menu--main',
			'type' => 'select',
			'title' => esc_html__('Main menu', 'orchard'),
			'desc' => esc_html__('Select a menu to overwrite the header menu location.', 'orchard'),
			'data' => 'menus',
			'default' => '',
		),

		array(
			'id' => 'local_menu--additional',
			'type' => 'select',
			'title' => esc_html__('Additional header menu', 'orchard'),
			'desc' => esc_html__('Select a menu to overwrite the additional header menu location.', 'orchard'),
			'data' => 'menus',
			'default' => '',
		),

		array(
			'id' => 'local_menu--popup',
			'type' => 'select',
			'title' => esc_html__('Popup menu', 'orchard'),
			'desc' => esc_html__('Select a menu to overwrite the popup menu location.', 'orchard'),
			'data' => 'menus',
			'default' => '',
		),

		array(
			'id' => 'local_menu--bottom_footer',
			'type' => 'select',
			'title' => esc_html__('Bottom footer menu', 'orchard'),
			'desc' => esc_html__('Select a menu to overwrite the bottom footer menu location.', 'orchard'),
			'data' => 'menus',
			'default' => '',
		),
	),
);