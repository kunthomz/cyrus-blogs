<?php if (OrchardHelpers::is_categorized_blog()) { ?>
	<div class="post-single-cats"><?php the_category(', '); ?></div>
<?php } ?>

<header class="post-single-h-w">
	<?php the_title( '<h1 class="post-single-h">', '</h1>' ); ?>
</header>

<div class="post-single-date"><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time></div>
