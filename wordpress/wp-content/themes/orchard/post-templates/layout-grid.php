<?php
global $orchard_post_loop;

$post_format = get_post_format();
$classes = 'post-grid js--post-grid __' . ($post_format ? $post_format : 'standard');
$content_width = OrchardOptions::get('layout--content_width');
$sidebar_location = OrchardHelpers::get_sidebar_location();

if ($content_width == 'expanded') {
	if ($sidebar_location) {
		$col_classes = 'col-xs-12 col-md-6 col-xl-4 col-xxxl-3';
	} else {
		$col_classes = 'col-xs-12 col-sm-6 col-md-4 col-xl-4 col-xxxl-2';
	}
} elseif ($content_width == 'normal') {
	if ($sidebar_location) {
		$col_classes = 'col-xs-12 col-md-6';
	} else {
		$col_classes = 'col-xs-12 col-sm-6 col-md-4';
	}
} else {
	$col_classes = 'col-xs-12 col-sm-6';
}

if ($orchard_post_loop++ == 1) {
	?><div class="<?php echo esc_attr($col_classes); ?> js--masonry-col"></div><?php
}

$double_width = OrchardOptions::get_metaboxes_option('local_single_post--double_width');

if (!is_sticky() && $double_width) {

	$classes .= ' __double';

	if ($content_width == 'expanded') {
		if ($sidebar_location) {
			$col_classes = 'col-xs-12 col-xl-8 col-xxxl-6';
		} else {
			$col_classes = 'col-xs-12 col-md-8 col-xl-6 col-xxxl-4';
		}
	} elseif ($content_width == 'normal') {
		if ($sidebar_location) {
			$col_classes = 'col-xs-12';
		} else {
			$col_classes = 'col-xs-12 col-md-8';
		}
	} else {
		$col_classes = 'col-xs-12';
	}

}

if (is_sticky()) {

	$classes .= ' __sticky';

	if (!$sidebar_location) {
		$classes .= ' __expanded_md';
	} elseif ($content_width == 'expanded') {
		$classes .= ' __expanded_xl';
	}
?>

	<div class="col-xs-12 animate-on-screen js--animate-on-screen">
		<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
			<?php get_template_part( 'post-templates/grid/content-sticky', $post_format ); ?>
		</article>
	</div>

<?php } else { ?>

	<div class="<?php echo esc_attr($col_classes); ?> animate-on-screen js--animate-on-screen">
		<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
			<?php get_template_part( 'post-templates/grid/content', $post_format ); ?>
		</article>
	</div>

<?php } ?>
