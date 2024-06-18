<?php
// don't load directly
if (!defined('ABSPATH')) die('-1');


class OrchardModules extends OrchardTheme {


	public static function get_count($section = 'header') {
		$count = 0;
		if (self::get_option($section . '--text')) $count++;
		if (self::get_option($section . '--social')) $count++;
		if (self::get_option($section . '--wpml_currency')) $count++;
		if (self::get_option($section . '--wpml_lang')) $count++;
		return $count;
	}


	public static function text($section = 'header', $large_text = true, $hide_on_screen_xs = true) {
		if (self::get_option($section . '--text')) { ?>
			<div class="
				mods_el
				<?php if ($hide_on_screen_xs) { ?>hidden-xs<?php } ?>
			"><div class="
				mods_el-tx
				<?php if (!$large_text) { ?>small<?php } ?>
			"><?php echo wp_kses(self::get_option($section . '--text_content'), 'post'); ?></div></div>
			<?php
			if ($hide_on_screen_xs) { ?><span class="mods_el hidden-xs __separator"></span><?php }
			else if ($section == 'header') { ?><br><?php }
		}
	}


	public static function icon_social($section = 'header', $large_icon = true, $hide_on_screen_xs = true) {
		if (self::get_option($section . '--social')) {
			$social_links = self::get_option($section . '--social_links');
			foreach ($social_links as $key => $social_link) {
				if ($social_link) {
				?>
				<a
					href="<?php echo esc_url(self::get_option('social--' . $key)); ?>"
					target="_blank"
					class="mods_el<?php if ($hide_on_screen_xs) { ?> hidden-xs<?php } ?>"
				><span class="mods_el-ic"><i class="fa <?php if ($large_icon) echo 'fa-lg'; ?> fa-<?php echo esc_attr($key); ?>"></i></span></a>
				<?php
				}
			}
			if ($hide_on_screen_xs) { ?><span class="mods_el hidden-xs __separator"></span><?php }
		}
	}

	public static function icon_lwa($section = 'header', $large_icon = true) {
		if (self::get_option($section . '--login_ajax') && function_exists('login_with_ajax')) {
			if (class_exists('woocommerce')) {
				$profile_link = get_permalink( get_option('woocommerce_myaccount_page_id') );
			} else if (function_exists('bp_loggedin_user_link')) {
				$profile_link = bp_loggedin_user_link();
			} else {
				$profile_link = trailingslashit(get_admin_url()) . 'profile.php';
			}
			?>
			<div class="mods_el"><div class="lwa-w">
				<a href="<?php echo esc_url($profile_link); ?>" class="js--show-next"><span class="mods_el-ic"><span class="icon-head <?php if ($large_icon) echo 'xbig'; ?>"></span></span></a>
				<?php login_with_ajax( array( 'profile_link' => 1 ) ); ?>
			</div></div>
			<?php
		}
	}


	public static function icon_minicart($section = 'header', $large_icon = true) {
		if (self::get_option($section . '--woo_cart') && class_exists('woocommerce') && !OrchardShop::is_cart() && !OrchardShop::is_checkout()) {
			$count = WC()->cart->cart_contents_count;
			?>
			<div class="mods_el"><div class="minicart <?php if ($large_icon) echo '__lg'; ?>">
				<a href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>" title="<?php esc_html_e('View your shopping cart', 'orchard'); ?>" class="minicart_lk js--show-next">
					<span class="mods_el-ic">
						<span class="icon-bag <?php if ($large_icon) echo 'xbig'; ?>"></span>
						<span class="minicart_count <?php if (!$count) echo '__zero'; ?> js--minicart_count"><?php echo absint($count); ?></span>
					</span>
				</a>
				<div class="minicart_cnt js--show-me"><div class="widget_shopping_cart_content"></div></div>
			</div></div>
			<?php
		}
	}


	public static function icon_search($section = 'header', $large_icon = true) {
		if (self::get_option($section . '--search')) {
			?>
			<div class="mods_el"><div class="search-form-popup-w js--focus-w">
				<a href="#" class="js--show-next js--focus"><span class="mods_el-ic"><span class="icon-search <?php if ($large_icon) echo 'xbig'; ?>"></span></span></a>
				<?php get_search_form(); ?>
			</div></div>
			<?php
		}
	}


	public static function icon_currency($section = 'header', $hide_on_screen_xs = true) {
		if (self::get_option($section . '--wpml_currency')) {
			if ($hide_on_screen_xs) { ?><span class="mods_el hidden-xs __separator"></span><?php }
			?>
			<div class="mods_el<?php if ($hide_on_screen_xs) { ?> hidden-xs<?php } ?>"><?php do_action('currency_switcher', array('format' => '%symbol%', 'switcher_style' => 'list', 'orientation' => 'horizontal')); ?></div>
			<?php
		}
	}


	public static function icon_language_flags($section = 'header', $hide_on_screen_xs = true) {
		if (self::get_option($section . '--wpml_lang') && function_exists('icl_get_languages')) {
			$languages = icl_get_languages('skip_missing=0&orderby=code');
			if (!empty($languages)) {
				if ($hide_on_screen_xs) { ?><span class="mods_el hidden-xs __separator"></span><?php }
				foreach ($languages as $language) {
					?>
					<div class="mods_el<?php if ($hide_on_screen_xs) { ?> hidden-xs<?php } ?>"><?php
					if (!$language['active']) echo '<a href="' . esc_url($language['url']) . '">';
					?><img src="<?php echo esc_url($language['country_flag_url']); ?>" alt="<?php echo esc_attr($language['language_code']); ?>" width="18" height="12"> <?php
					if (!$language['active']) echo '</a>';
					?></div>
					<?php
				}
			}
		}
	}


	public static function icon_popup_menu($large_icon = true, $hide_on_screen_lg = true) {
		?>
		<span class="mods_el hidden-xs<?php if ($hide_on_screen_lg) { ?> hidden-lg<?php } ?> __separator"></span>
		<div class="mods_el<?php if ($hide_on_screen_lg) { ?> hidden-lg<?php } ?>"><div class="popup-menu-mod">
			<a href="#" class="js--show-next"><span class="mods_el-ic"><span class="icon-menu <?php if ($large_icon) echo 'xbig'; ?>"></span></a>
			<div class="popup-menu-popup js--show-me js-popup-menu-popup">
				<span class="vertical-helper"></span><nav class="popup-menu-w"><?php
					if (has_nav_menu('popup')) {
						wp_nav_menu( array(
							'theme_location' => 'popup',
							'menu' => self::get_option('menu--popup'),
							'menu_class' => 'popup-menu js-popup-menu',
							'container' => '',
						) );
					} else {
						esc_html_e('Assign a menu at Appearance > Menus', 'orchard');
					}
				?></nav>
				<a href="#" class="popup-menu-popup-close js--hide-me"><span class="icon-cross"></span></a>
			</div>
		</div></div>
		<?php
	}


	public static function icon_mobile($section = 'header', $large_icon = true) {
		if (self::get_count($section)) {
			?>
			<div class="mods_el hidden-sm hidden-md hidden-lg"><div class="mobile-mod-w">
				<a href="#" class="js--show-next"><span class="mods_el-ic"><span class="icon-plus <?php if ($large_icon) echo 'xbig'; ?>"></span></span></a>
				<div class="mobile-mod js--show-me">
					<?php self::text($section, $large_icon, false); ?>

					<?php self::icon_social($section, $large_icon, false); ?>

					<?php self::icon_currency($section, false); ?>

					<?php self::icon_language_flags($section, false); ?>
				</div>
			</div></div>
			<?php
		}
	}


	public static function share_tooltip($tooltip_align_left = false) {
		global $post;

		$image = '';
		if (has_post_thumbnail($post->ID)) {
			$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'shop_single');
			$image = esc_attr(urlencode($image[0]));
		}

		$link = esc_attr(urlencode(get_permalink()));
		$title = esc_attr(urlencode(get_the_title()));

		if (is_singular(array('product'))) {
			$share = esc_html__('Share this product', 'orchard');
		} elseif (is_singular('post')) {
			$share = esc_html__('Share this post', 'orchard');
		} else {
			$share = esc_html__('Share this page', 'orchard');
		}

		$tooltip_class_mod = '';
		if ($tooltip_align_left) {
			$tooltip_class_mod = '__left';
		}
		?>
		<div class="share">
			<span class="share_h"><span class="share_icon icon-share"></span> <span class="share_tx"><?php echo $share; ?></span></span>
			<div class="share_lst-w <?php echo esc_attr($tooltip_class_mod); ?>">
				<ul class="share_lst">
					<li>
						<a target="_blank" href="https://www.facebook.com/sharer.php?s=100&amp;p%5Btitle%5D=<?php echo $title ?>&amp;p%5Burl%5D=<?php echo $link ?>&amp;p%5Bimages%5D%5B0%5D=<?php echo $image ?>" title="<?php esc_html_e('Facebook', 'orchard'); ?>">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://twitter.com/share?url=<?php echo $link ?>&amp;text=<?php echo $title ?>" title="<?php esc_html_e('Twitter', 'orchard'); ?>">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $link ?>&amp;description=<?php echo $title ?>&media=<?php echo $image ?>" title="<?php esc_html_e('Pinterest', 'orchard'); ?>" onclick="window.open(this.href); return false;">
							<i class="fa fa-pinterest"></i>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://plus.google.com/share?url=<?php echo $link ?>&amp;title=<?php echo $title ?>" title="<?php esc_html_e('Google+', 'orchard'); ?>" onclick='javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;'>
							<i class="fa fa-google-plus"></i>
						</a>
					</li>
					<li>
						<a href="mailto:?subject=I wanted you to see this site&amp;body=<?php echo $link ?>&amp;title=<?php echo $title ?>" title="<?php esc_html_e('Email', 'orchard'); ?>">
							<i class="fa fa-envelope"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
	}


	public static function share_buttons() {
		global $post;

		$image = '';
		if (has_post_thumbnail($post->ID)) {
			$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'shop_single');
			$image = esc_attr(urlencode($image[0]));
		}

		$link = esc_attr(urlencode(get_permalink()));
		$title = esc_attr(urlencode(get_the_title()));
		?>
		<ul class="share-alt __brand-colors">
			<li class="share-alt_btn-w">
				<a class="share-alt_btn __facebook" target="_blank" href="https://www.facebook.com/sharer.php?s=100&amp;p%5Btitle%5D=<?php echo $title ?>&amp;p%5Burl%5D=<?php echo $link ?>&amp;p%5Bimages%5D%5B0%5D=<?php echo $image ?>" title="<?php esc_html_e('Facebook', 'orchard'); ?>">
					<i class="fa fa-facebook"></i> <?php esc_html_e('Share', 'orchard'); ?>
				</a>
			</li>
			<li class="share-alt_btn-w">
				<a class="share-alt_btn __twitter" target="_blank" href="https://twitter.com/share?url=<?php echo $link ?>&amp;text=<?php echo $title ?>" title="<?php esc_html_e('Twitter', 'orchard'); ?>">
					<i class="fa fa-twitter"></i> <?php esc_html_e('Tweet', 'orchard'); ?>
				</a>
			</li>
			<li class="share-alt_btn-w">
				<a class="share-alt_btn __google-plus" target="_blank" href="https://plus.google.com/share?url=<?php echo $link ?>&amp;title=<?php echo $title ?>" title="<?php esc_html_e('Google Plus', 'orchard'); ?>" onclick='javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;'>
					<i class="fa fa-google-plus"></i> <?php esc_html_e('Share', 'orchard'); ?>
				</a>
			</li>
			<li class="share-alt_btn-w">
				<a class="share-alt_btn __pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $link ?>&amp;description=<?php echo $title ?>&media=<?php echo $image ?>" title="<?php esc_html_e('Pinterest', 'orchard'); ?>" onclick="window.open(this.href); return false;">
					<i class="fa fa-pinterest"></i> <?php esc_html_e('Pin It', 'orchard'); ?>
				</a>
			</li>
		</ul>
		<?php
	}


	public static function share_icons() {
		global $post;

		$image = '';
		if (has_post_thumbnail($post->ID)) {
			$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'shop_single');
			$image = esc_attr(urlencode($image[0]));
		}

		$link = esc_attr(urlencode(get_permalink()));
		$title = esc_attr(urlencode(get_the_title()));
		?>
		<ul class="share-small">
			<li class="share-small_btn-w">
				<a class="share-small_btn __facebook" target="_blank" href="https://www.facebook.com/sharer.php?s=100&amp;p%5Btitle%5D=<?php echo $title ?>&amp;p%5Burl%5D=<?php echo $link ?>&amp;p%5Bimages%5D%5B0%5D=<?php echo $image ?>" title="<?php esc_html_e('Facebook', 'orchard'); ?>">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<li class="share-small_btn-w">
				<a class="share-small_btn __twitter" target="_blank" href="https://twitter.com/share?url=<?php echo $link ?>&amp;text=<?php echo $title ?>" title="<?php esc_html_e('Twitter', 'orchard'); ?>">
					<i class="fa fa-twitter"></i>
				</a>
			</li>
			<li class="share-small_btn-w">
				<a class="share-small_btn __google-plus" target="_blank" href="https://plus.google.com/share?url=<?php echo $link ?>&amp;title=<?php echo $title ?>" title="<?php esc_html_e('Google Plus', 'orchard'); ?>" onclick='javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;'>
					<i class="fa fa-google-plus"></i>
				</a>
			</li>
			<?php if (has_post_thumbnail($post->ID)) { ?>
				<li class="share-small_btn-w">
					<a class="share-small_btn __pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $link ?>&amp;description=<?php echo $title ?>&media=<?php echo $image ?>" title="<?php esc_html_e('Pinterest', 'orchard'); ?>" onclick="window.open(this.href); return false;">
						<i class="fa fa-pinterest"></i>
					</a>
				</li>
			<?php } ?>
		</ul>
		<?php
	}


}
