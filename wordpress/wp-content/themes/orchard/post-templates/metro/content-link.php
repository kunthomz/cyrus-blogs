<?php
$ar_escaped_content = OrchardPostFormats::link();
OrchardPostFormats::image('post-metro_img');
?>

<?php get_template_part( 'post-templates/metro/part', 'category' ); ?>

<div class="post-metro_icon">
	<span class="icon-link"></span>
</div>

<div class="post-metro_desc-w">
	<?php the_title( '<header><h3 class="post-metro_h">', '</h3></header>' ); ?>

	<div class="post-metro_desc">
		<?php echo esc_url($ar_escaped_content['link']); ?>
	</div>
</div>

<a href="<?php echo esc_url($ar_escaped_content['link']); ?>" class="post-metro_lk" rel="bookmark" title="<?php the_title(); ?>"></a>
