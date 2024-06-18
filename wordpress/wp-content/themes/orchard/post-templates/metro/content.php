<?php
global $orchard_post_loop;
OrchardPostFormats::image('post-metro_img');
?>

<?php get_template_part( 'post-templates/metro/part', 'category' ); ?>

<div class="post-metro_desc-w">
	<div class="post-metro_date"><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time></div>

	<?php the_title( '<header><h3 class="post-metro_h">', '</h3></header>' ); ?>

	<?php if ($orchard_post_loop % 3 == 2) { ?>
		<div class="post-metro_desc hidden-xxs">
			<?php echo apply_filters( 'the_excerpt', OrchardPostFormats::esc(get_the_excerpt()) ); ?>
		</div>
	<?php } ?>
</div>

<?php get_template_part( 'post-templates/metro/part', 'link' ); ?>
