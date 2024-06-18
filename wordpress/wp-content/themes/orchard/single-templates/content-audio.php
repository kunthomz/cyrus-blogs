<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $escaped_content = OrchardPostFormats::audio(); ?>

	<?php if (!OrchardHelpers::is_title_wrapper()) { ?>
		<?php get_template_part( 'single-templates/part', 'top' ); ?>
	<?php } ?>

	<div class="post-single-cnt">
		<?php echo apply_filters( 'the_content', $escaped_content ); ?>
	</div>

	<?php get_template_part( 'single-templates/part', 'bottom' ); ?>
</article>
