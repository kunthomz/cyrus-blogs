<?php
wp_link_pages( array(
	'before'      => '<nav class="post-pagination">',
	'after'       => '</nav>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
) );
?>

<?php if (get_the_tags() && OrchardOptions::get('single_post--tags')) { ?>
	<div class="post-single-tags">
		<?php the_tags('<h5 class="post-single-tags_h">'. esc_html__('Tags:', 'orchard') . '</h5>', ''); ?>
	</div>
<?php } ?>

<div class="row"><?php

	if (OrchardOptions::get('single_post--author')) {
		?><div class="col-sm-5 col-md-4 text-left"><a class="t-w-post-author" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>">
			<span class="t-w-post-author_img"><?php echo get_avatar(get_the_author_meta('email') , 100); ?></span>
			<span class="t-w-post-author_h">
				<span class="t-w-post-author_sub-h"><?php esc_html_e('Posted by', 'orchard')?></span>
				<span class="t-w-post-author_name"><?php the_author(); ?></span>
			</span>
		</a></div><?php
	}

	if (OrchardOptions::get('single_post--share')) {
		?><div class="col-sm-7 col-md-8 text-right-sm pull-right"><?php
			OrchardModules::share_buttons();
		?></div><?php
	}

?></div>
