<?php get_template_part( 'post-templates/grid/part', 'category' ); ?>

<div class="post-grid_desc-w">
	<div class="post-grid_icon">“</div>

	<blockquote class="post-grid_desc"><?php echo apply_filters( 'the_content', OrchardPostFormats::esc() ); ?></blockquote>

	<?php the_title( '<cite class="post-grid_h">', '</cite>' ); ?>
</div>

<?php get_template_part( 'post-templates/grid/part', 'meta' ); ?>
