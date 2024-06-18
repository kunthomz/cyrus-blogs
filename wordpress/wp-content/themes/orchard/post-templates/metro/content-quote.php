<?php OrchardPostFormats::image('post-metro_img'); ?>

<?php get_template_part( 'post-templates/metro/part', 'category' ); ?>

<div class="post-metro_icon">“</div>

<div class="post-metro_desc-w">
	<blockquote class="post-metro_desc"><?php echo apply_filters( 'the_content', OrchardPostFormats::esc() ); ?></blockquote>

	<?php the_title( '<cite class="post-metro_h">', '</cite>' ); ?>
</div>

<?php get_template_part( 'post-templates/metro/part', 'link' ); ?>
