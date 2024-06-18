<?php get_template_part( 'post-templates/boxed/part', 'category' ); ?>

<div class="post-boxed_desc-w">
	<div class="post-boxed_icon">
		<i class="fa fa-twitter"></i>
	</div>

	<blockquote class="post-boxed_desc"><?php echo apply_filters( 'the_content', OrchardPostFormats::esc() ); ?></blockquote>

	<?php get_template_part( 'post-templates/boxed/part', 'header' ); ?>
</div>

<?php get_template_part( 'post-templates/boxed/part', 'meta' ); ?>
