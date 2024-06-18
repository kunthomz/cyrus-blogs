<?php $ar_escaped_content = OrchardPostFormats::link(); ?>

<div class="post-standard_desc-w">
	<?php get_template_part( 'post-templates/standard/part', 'category' ); ?>

	<div class="post-standard_icon"><span class="icon-link"></span></div>

	<?php the_title( sprintf( '<header><h3 class="post-standard_h"><a href="%s" class="post-standard_lk" rel="bookmark">', esc_url( $ar_escaped_content['link'] ) ), '</a></h3></header>' ); ?>

	<div class="post-standard_desc">
		<?php echo apply_filters( 'the_content', $ar_escaped_content['link'] ); ?>
	</div>

	<div class="post-standard_meta">
		<?php get_template_part( 'post-templates/standard/part', 'comments' ); ?>
		<?php get_template_part( 'post-templates/standard/part', 'date' ); ?>
	</div>
</div>
