<?php get_template_part( 'post-templates/boxed/part', 'category' ); ?>

<div class="post-boxed_desc-w">
	<div class="post-boxed_icon">“</div>

	<blockquote class="post-boxed_desc"><?php echo apply_filters( 'the_content', OrchardPostFormats::esc() ); ?></blockquote>

	<?php the_title( '<cite class="post-boxed_h">', '</cite>' ); ?>
</div>

<?php get_template_part( 'post-templates/boxed/part', 'meta' ); ?>
