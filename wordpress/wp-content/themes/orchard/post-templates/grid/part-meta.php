<div class="post-grid_meta">

	<span class="post-grid_date"><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time></span>

	<?php if (!post_password_required() && comments_open()) { ?>
		<a href="<?php comments_link(); ?>" class="post-grid_comments"><span class="icon-speech-bubble"></span><?php comments_number('', ' 1', ' %'); ?></a>
	<?php } ?>

</div>
