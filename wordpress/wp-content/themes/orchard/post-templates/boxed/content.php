<div class="post-boxed-inner">
	<?php get_template_part( 'post-templates/boxed/part', 'img' ); ?>

	<div class="post-boxed_desc-w">
		<?php get_template_part( 'post-templates/boxed/part', 'category' ); ?>

		<?php get_template_part( 'post-templates/boxed/part', 'header' ); ?>

		<div class="post-boxed_desc">
			<?php echo apply_filters( 'the_excerpt', OrchardPostFormats::esc(get_the_excerpt()) ); ?>
		</div>

		<?php get_template_part( 'post-templates/boxed/part', 'meta' ); ?>
	</div>
</div>
