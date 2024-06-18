<?php
// don't load directly
if (!defined('ABSPATH')) die('-1');

$menu = OrchardOptions::get('bottom_footer--menu');
$menu_at_left = OrchardOptions::get('bottom_footer--menu_left');

if ($menu) {
	if (has_nav_menu('bottom_footer')) {
		$bottom_footer_menu = wp_nav_menu( array(
			'theme_location' => 'bottom_footer',
			'menu' => OrchardOptions::get('menu--bottom_footer'),
			'menu_class' => 'bottom-f-menu js--scroll-nav',
			'container' => 'nav',
			'container_class' => 'mods_el',
			'echo' => false,
			'depth' => 1,
		) );
	} else {
		$bottom_footer_menu = '<div class="mods_el">' . esc_html__('Assign a menu at Appearance > Menus', 'orchard') . '</div>';
	}
}
?>
<div class="main-f-bottom">
	<div class="container">
		<div class="row">
			<?php if (OrchardOptions::get('bottom_footer--left_cols_sm')) { ?>
				<div class="col-sm-<?php echo absint(OrchardOptions::get('bottom_footer--left_cols_sm')); ?>">
					<div class="
						mods
						text-center
						text-<?php echo esc_attr(OrchardOptions::get('bottom_footer_styles--first_align')); ?>-sm
					">
						<?php OrchardModules::text('bottom_footer', false, false); ?>
						<span class="mods_el __separator hidden-xs"></span>
						<?php if ($menu && $menu_at_left) { echo balanceTags($bottom_footer_menu); } ?>
					</div>
				</div>
			<?php } ?>
			<?php if (OrchardOptions::get('bottom_footer--right_cols_sm')) { ?>
				<div class="col-sm-<?php echo absint(OrchardOptions::get('bottom_footer--right_cols_sm')); ?>">
					<div class="
						mods
						text-center
						text-<?php echo esc_attr(OrchardOptions::get('bottom_footer_styles--second_align')); ?>-sm
					">
						<?php if ($menu && !$menu_at_left) { echo balanceTags($bottom_footer_menu); } ?>

						<?php OrchardModules::icon_social('bottom_footer', false, false); ?>

						<?php OrchardModules::icon_currency('bottom_footer', false); ?>

						<?php OrchardModules::icon_language_flags('bottom_footer', false); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
