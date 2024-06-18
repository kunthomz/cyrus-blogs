<?php $double_width = OrchardOptions::get_metaboxes_option('local_single_post--double_width'); ?>
<?php get_template_part( 'post-templates/grid/part', 'img' ); ?>

<div class="post-grid_desc-w">
	<?php get_template_part( 'post-templates/grid/part', 'category' ); ?>

	<?php get_template_part( 'post-templates/grid/part', 'header' ); ?>

	<span class="post-grid_date"><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time></span>

	<div class="post-grid_desc">
		<?php echo apply_filters( 'the_excerpt', OrchardPostFormats::esc(get_the_excerpt()) ); ?>
	</div>
</div>

<?php get_template_part( 'post-templates/grid/part', 'meta' ); ?>
