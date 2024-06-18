<?php if (!post_password_required() && comments_open()) { ?>
	<a href="<?php comments_link(); ?>" class="post-masonry_comments">
		<span class="icon-speech-bubble"></span>
		<?php if (get_comments_number() != 0) { ?>
			<span class="post-masonry_comments-count"><?php comments_number('', '1', '%'); ?></span>
		<?php } ?>
	</a>
<?php } ?>
