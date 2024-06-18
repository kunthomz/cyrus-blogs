<?php get_template_part( 'post-templates/grid/part', 'category' ); ?>

<div class="post-grid_desc-w">
	<div class="post-grid_icon">
		<i class="fa fa-twitter"></i>
	</div>

	<blockquote class="post-grid_desc"><?php echo apply_filters( 'the_content', OrchardPostFormats::esc() ); ?></blockquote>

	<?php get_template_part( 'post-templates/grid/part', 'header' ); ?>
</div>

<?php get_template_part( 'post-templates/grid/part', 'meta' ); ?>
