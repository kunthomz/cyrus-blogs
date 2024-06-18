<div class="post-masonry_desc-w">
	<?php get_template_part( 'post-templates/masonry/part', 'category' ); ?>

	<div class="post-masonry_icon"><i class="fa fa-twitter"></i></div>

	<blockquote class="post-masonry_desc"><?php echo apply_filters( 'the_content', OrchardPostFormats::esc() ); ?></blockquote>

	<?php the_title( '<cite class="post-masonry_h">', '</cite>' ); ?>

	<div class="post-masonry_meta">
		<?php get_template_part( 'post-templates/masonry/part', 'comments' ); ?>
		<?php get_template_part( 'post-templates/masonry/part', 'date' ); ?>
	</div>
</div>
