<?php
// don't load directly
if (!defined('ABSPATH')) die('-1');

$header_layout = OrchardOptions::get('header--layout');

$mobile_menu = OrchardOptions::get('header--mobile_menu');

$hide_on_screen_lg = $header_layout == 'layout7' || $header_layout == 'layout8' ? false : true;

?>

<div class="main-h-bottom-w"><div class="
	main-h-bottom
	js--main-h-bottom
	<?php
	echo ' __' . esc_attr(OrchardOptions::get('header--color_scheme'));
	echo ' __' . esc_attr($header_layout);
	if (OrchardOptions::get('header--boxed')) { echo ' __boxed'; }
	if (OrchardOptions::get('header--fixed')) { echo ' js--fixed-header'; }
	?>
"><div class="container"><div class="main-h-bottom-cnt">


	<?php if (
		$header_layout == 'layout2' ||
		$header_layout == 'layout5'
	) { ?>

		<div class="main-h-bottom_add-menu <?php if ($mobile_menu) { echo 'hidden-xs hidden-sm hidden-md'; } ?>">

			<nav class="add-menu-w"><?php
				if (has_nav_menu('additional')) {
					wp_nav_menu( array(
						'theme_location' => 'additional',
						'menu' => OrchardOptions::get('menu--additional'),
						'menu_class' => 'js--scroll-nav add-menu',
						'container' => '',
					) );
				} else {
					esc_html_e('Assign a menu at Appearance > Menus', 'orchard');
				}
			?></nav>

		</div>

	<?php } ?>


	<?php if ($header_layout != 'layout2' && $header_layout != 'layout5') { OrchardHelpers::get_logo(); } ?>


	<div class="main-h-bottom_menu-and-mods">

		<?php if (
			$header_layout != 'layout4' &&
			$header_layout != 'layout5' &&
			$header_layout != 'layout6'
		) { ?>
			<div class="mods-w<?php
				if ($header_layout == 'layout1' && OrchardOptions::get('header--separator')) {
					?> __with_separator<?php
				}
			?>">

				<div class="mods">

					<?php if ($header_layout != 'layout8') { ?>

						<?php OrchardModules::icon_mobile(); ?>

						<?php OrchardModules::text(); ?>

						<?php OrchardModules::icon_lwa(); ?>

						<?php OrchardModules::icon_minicart(); ?>

						<?php OrchardModules::icon_search(); ?>

						<?php OrchardModules::icon_social(); ?>

						<?php OrchardModules::icon_currency(); ?>

						<?php OrchardModules::icon_language_flags(); ?>

					<?php } ?>

					<?php if ($mobile_menu || $hide_on_screen_lg) { ?>
						<?php OrchardModules::icon_popup_menu(true, $hide_on_screen_lg); ?>
					<?php } ?>

				</div>

			</div>
		<?php } elseif ($mobile_menu) { ?>
			<div class="mods-w hidden-lg">
				<div class="mods">
					<?php OrchardModules::icon_popup_menu(); ?>
				</div>
			</div>
		<?php } ?>

		<?php if (
			$header_layout != 'layout7' &&
			$header_layout != 'layout8'
		) { ?>
			<nav class="main-menu-w <?php if ($mobile_menu) { echo 'hidden-xs hidden-sm hidden-md'; } ?>"><?php
				if (has_nav_menu('main')) {
					$main_menu = wp_nav_menu( array(
						'theme_location' => 'main',
						'menu' => OrchardOptions::get('menu--main'),
						'menu_class' => 'js--scroll-nav main-menu',
						'container' => '',
					) );
				} else {
					esc_html_e('Assign a menu at Appearance > Menus', 'orchard');
				}
			?></nav>
		<?php } ?>

	</div>


	<?php if ($header_layout == 'layout2' || $header_layout == 'layout5') { OrchardHelpers::get_logo(); } ?>


</div></div></div></div>
