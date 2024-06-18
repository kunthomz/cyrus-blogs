<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if (
		has_post_thumbnail() &&
		OrchardOptions::get('single_post--featured_image') &&
		(!OrchardHelpers::is_title_wrapper() || !OrchardOptions::get('title_wrapper--featured_image_on_bg'))
	) {
		the_post_thumbnail( 'large', array('title' => esc_attr(get_the_title()), 'class' => 'post-single-img') );
	}
	?>

	<?php if (!OrchardHelpers::is_title_wrapper()) { ?>
		<?php get_template_part( 'single-templates/part', 'top' ); ?>
	<?php } ?>

	<div class="post-single-cnt">
		<h1><?php the_title(); ?></h1>
		<span class="postedon">Posted On <?php the_date(); ?></span>
		<?php the_content(); ?>
	</div>

	<?php get_template_part( 'single-templates/part', 'bottom' ); ?>
</article>
