<?php $escaped_content = OrchardPostFormats::video(); ?>

<div class="post-masonry_desc-w">
	<?php get_template_part( 'post-templates/masonry/part', 'category' ); ?>

	<?php get_template_part( 'post-templates/masonry/part', 'header' ); ?>

	<?php get_template_part( 'post-templates/masonry/part', 'date' ); ?>

	<div class="post-masonry_desc">
		<?php echo apply_filters( 'the_content', $escaped_content ); ?>
	</div>

	<?php if (is_sticky()) { ?>
		<div class="post-masonry_btn-w">
			<a href="<?php echo esc_url(get_permalink()); ?>" class="post-masonry_btn"><?php esc_html_e('Continue reading', 'orchard'); ?></a>
		</div>
	<?php } ?>

	<div class="post-masonry_meta">
		<?php OrchardModules::share_icons(); ?>
		<?php get_template_part( 'post-templates/masonry/part', 'comments' ); ?>
	</div>
</div>
