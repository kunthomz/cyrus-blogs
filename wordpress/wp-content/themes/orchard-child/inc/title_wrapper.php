<?php
// don't load directly
if (!defined('ABSPATH')) die('-1');

$category_image_on_bg = OrchardOptions::get('title_wrapper--category_image_on_bg');
$category_image_src = OrchardShop::get_category_image_src();

?>
<div class="
	t-w
	js--t-w
	<?php
	if (OrchardOptions::get('title_wrapper--full_height')) {?> __full-height<?php }
	if (OrchardOptions::get('title_wrapper--parallax')) {?> __parallax<?php }
	if ($category_image_on_bg && $category_image_src) {?> __products-subcat<?php }
	?>
">


	<?php if ($category_image_on_bg && $category_image_src) { ?>
		<div class="t-w_bg js--t-w-bg"
			style="
				background-image:url(<?php echo esc_url($category_image_src); ?>);
				background-position:center;
				background-size:cover;
			"
		></div>
	<?php } else { ?>
		<div class="t-w_bg js--t-w-bg"
		<?php if (is_singular('post') && OrchardOptions::get('title_wrapper--featured_image_on_bg') && has_post_thumbnail()) { ?>
			style="
				background-image:url(<?php
					$attachment_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
					echo esc_url($attachment_image_src[0]);
				?>);
				background-position:center;
				background-size:cover;
			"
		<?php } ?>
		></div>
		<?php if (OrchardOptions::get('title_wrapper_styles--bg_overlay_pattern')) { ?><div class="t-w_bg-overlay-pattern"></div><?php } ?>
	<?php } ?>
	<div class="t-w_bg-overlay" style="background-color:<?php
		$bg_overlay = OrchardOptions::get('title_wrapper_styles--bg_overlay');
		echo esc_attr($bg_overlay['rgba']);
	?>;"></div>


	<div class="js--under-main-h"></div>


</div>
<?php yoast_breadcrumb('<nav class="breadcrumb"><div class="container">','</div></nav>', true); ?>