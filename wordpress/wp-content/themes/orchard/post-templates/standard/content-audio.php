<?php $escaped_content = OrchardPostFormats::audio(); ?>

<div class="post-standard_desc-w">
	<?php get_template_part( 'post-templates/standard/part', 'category' ); ?>

	<?php get_template_part( 'post-templates/standard/part', 'header' ); ?>

	<?php get_template_part( 'post-templates/standard/part', 'date' ); ?>

	<div class="post-standard_desc">
		<?php echo apply_filters( 'the_content', $escaped_content ); ?>
	</div>

	<div class="post-standard_btn-w">
		<a href="<?php echo esc_url(get_permalink()); ?>" class="post-standard_btn"><?php esc_html_e('Continue reading', 'orchard'); ?></a>
	</div>

	<div class="post-standard_meta">
		<?php OrchardModules::share_icons(); ?>
		<?php get_template_part( 'post-templates/standard/part', 'comments' ); ?>
	</div>
</div>
