<?php
/**
 * The template for displaying search results pages.
 */

/**
 * Changes from parent theme
 * OrchardHelpers::posts_navigation() => paginate_links()
 */

$search_term = $_GET['s'] ?? null;
get_header(); ?>

    <?php if (have_posts() && !empty($search_term)) { ?>

        <div class="search-page">
            <p><?php esc_html_e('If you are not happy with the results below please do another search.', 'orchard'); ?></p>
            <?php get_search_form(); ?>
        </div>

        <div class="row js--masonry">

            <?php
            $classes = OrchardHelpers::get_responsive_column_classes(OrchardOptions::get('search--columns'));

            $classes[] = 'animate-on-screen js--animate-on-screen';

            while (have_posts()) { the_post();
            ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
                    <?php get_template_part( 'content', 'search' ); ?>
                </article>

            <?php } ?>

        </div>

        <div class="posts-pagination__wrapper">
            <?php echo paginate_links() ?>
        </div>

    <?php } else { ?>

        <?php get_template_part( 'content', 'none' ); ?>

    <?php } ?>

<?php get_footer(); ?>
