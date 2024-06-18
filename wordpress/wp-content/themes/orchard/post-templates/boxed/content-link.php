<?php $ar_escaped_content = OrchardPostFormats::link(); ?>

<?php get_template_part( 'post-templates/boxed/part', 'category' ); ?>

<div class="post-boxed_desc-w">
	<div class="post-boxed_icon">
		<span class="icon-link"></span>
	</div>

	<?php get_template_part( 'post-templates/boxed/part', 'header' ); ?>

	<div class="post-boxed_desc">
		<?php echo esc_url($ar_escaped_content['link']); ?>
	</div>
</div>

<?php get_template_part( 'post-templates/boxed/part', 'meta' ); ?>

<a href="<?php echo esc_url($ar_escaped_content['link']); ?>" class="post-boxed_lk" rel="bookmark" title="<?php the_title(); ?>"></a>
