<div class="search-form js--show-me">
    <a href="#" class="search-form-popup_close js--hide-me"><span class="icon-cross"></span></a>
    <form
        role="search"
        method="get"
        action="<?php echo esc_url(home_url('/')); ?>"
    >
        <input
            class="search-form_it js--focus-me"
            type="search"
            value="<?php echo get_search_query(); ?>"
            name="s"
            placeholder="<?php esc_html_e('Search posts...', 'orchard'); ?>"
            size="40"
        ><button
            class="search-form_button"
            type="submit"
            value="<?php esc_html_e('Search', 'orchard'); ?>"
        ><span class="icon-search search-form_button-ic"></span><span class="search-form_button-tx"><?php esc_html_e('Search', 'orchard'); ?></span></button>
        <?php if(OrchardOptions::get('search--post_type') !== 'all') { ?>
            <input type="hidden" name="post_type" value="<?php echo OrchardOptions::get('search--post_type')?>">
        <?php } ?>
    </form>
</div>
