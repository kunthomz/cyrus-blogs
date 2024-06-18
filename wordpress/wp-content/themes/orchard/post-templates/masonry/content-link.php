<?php $ar_escaped_content = OrchardPostFormats::link(); ?>

<div class="post-masonry_desc-w">
	<?php get_template_part( 'post-templates/masonry/part', 'category' ); ?>

	<div class="post-masonry_icon"><span class="icon-link"></span></div>

	<?php the_title( sprintf( '<header><h3 class="post-masonry_h"><a href="%s" class="post-masonry_lk" rel="bookmark">', esc_url( $ar_escaped_content['link'] ) ), '</a></h3></header>' ); ?>

	<div class="post-masonry_desc">
		<?php echo apply_filters( 'the_content', $ar_escaped_content['link'] ); ?>
	</div>

	<div class="post-masonry_meta">
		<?php get_template_part( 'post-templates/masonry/part', 'comments' ); ?>
		<?php get_template_part( 'post-templates/masonry/part', 'date' ); ?>
	</div>
</div>
