<div class="post-standard_desc-w">
	<?php get_template_part( 'post-templates/standard/part', 'category' ); ?>

	<div class="post-standard_icon"><i class="fa fa-twitter"></i></div>

	<blockquote class="post-standard_desc"><?php echo apply_filters( 'the_content', OrchardPostFormats::esc() ); ?></blockquote>

	<?php the_title( '<cite class="post-standard_h">', '</cite>' ); ?>

	<div class="post-standard_meta">
		<?php get_template_part( 'post-templates/standard/part', 'comments' ); ?>
		<?php get_template_part( 'post-templates/standard/part', 'date' ); ?>
	</div>
</div>
