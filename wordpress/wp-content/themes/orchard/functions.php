<?php
$template_dir = get_template_directory();

require_once $template_dir . '/classes/Theme.php';
require_once $template_dir . '/classes/Setup.php';
require_once $template_dir . '/classes/Options.php';
require_once $template_dir . '/classes/Helpers.php';
require_once $template_dir . '/classes/Modules.php';
require_once $template_dir . '/classes/PostFormats.php';
require_once $template_dir . '/classes/Shop.php';
require_once $template_dir . '/classes/Addons.php';

require_once $template_dir . '/plugins/tgm-plugin-activation/init.php';

if (!OrchardOptions::get('general--wp_version')) {
	remove_action( 'wp_head', 'wp_generator' );
}
if (!OrchardOptions::get('general--wlwmanifest')) {
	remove_action( 'wp_head', 'wlwmanifest_link' );
}
if (!OrchardOptions::get('general--rsd')) {
	remove_action( 'wp_head', 'rsd_link' );
}
