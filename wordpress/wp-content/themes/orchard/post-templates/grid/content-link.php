<?php $ar_escaped_content = OrchardPostFormats::link(); ?>

<?php get_template_part( 'post-templates/grid/part', 'category' ); ?>

<div class="post-grid_desc-w">
	<div class="post-grid_icon">
		<span class="icon-link"></span>
	</div>

	<?php get_template_part( 'post-templates/grid/part', 'header' ); ?>

	<div class="post-grid_desc">
		<?php echo esc_url($ar_escaped_content['link']); ?>
	</div>
</div>

<?php get_template_part( 'post-templates/grid/part', 'meta' ); ?>

<a href="<?php echo esc_url($ar_escaped_content['link']); ?>" class="post-grid_lk" rel="bookmark" title="<?php the_title(); ?>"></a>
