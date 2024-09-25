<?php
$template_dir_child = get_template_directory() . '-child';

// book listing on wp admin
require_once get_stylesheet_directory() . '/gr-function.php';

require_once $template_dir_child . '/classes/PostsHelper.php';

add_action( 'wp_enqueue_scripts', 'enqueue_theme_assets' );

function enqueue_theme_assets() {

    // Enqueue parent theme style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue Owl Carousel CSS
    wp_register_style( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '', 'all' );
    wp_enqueue_style( 'owl-carousel' );

    // Enqueue Google Fonts
    wp_enqueue_style( 'site-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Work+Sans:400,700&display=swap' );

    // Enqueue custom styles with a dynamic version number for cache busting
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), time() );

    // Register and enqueue custom scripts
    wp_register_script( 'custom-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), '', true );
    wp_register_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true );

    // Enqueue the registered scripts
    wp_enqueue_script( 'custom-scripts' );
    wp_enqueue_script( 'owl-carousel' );
}




// Disable gutenberg style in Front
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
function wps_deregister_styles()
{
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
// Disable gutenberg style in Front

add_action('wp_head','my_analytics', 0);
function my_analytics()
{
?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K2N6X9G');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="n9l_cAiD0rMxF6ucPSsvxJpOrJxLmwoKNLs62__V2Ro" />
<?php
}

add_action('wp_footer','tag_manager2', 0);
function tag_manager2()
{
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2N6X9G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
// Custom function to filter breadcrumbs
function custom_breadcrumb_filter($links) {
    // Check if the last breadcrumb is a page number
    $last_item = end($links);

    if (strpos($last_item['text'], 'Page ') !== false) {
        // Remove the last item if it is a pagination link
        array_pop($links);
    }

    return $links;
}

// Custom breadcrumbs function
function my_custom_breadcrumbs() {
    global $post;
    $output = "";
    $page = "";
    $parent_link = "";
    
    $home_link = "<a href='" . home_url() . "'>Home</a>";
    $separator = "<span class='bcrumbs-separator'> &rsaquo; </span>";

    $parents = array_reverse(get_post_ancestors($post->ID));   
    
    if (!is_front_page()) {
        // Output parent pages if they exist
        foreach ($parents as $parent_id) {
            $page .= "<a href='" . get_permalink($parent_id) . "'>" . html_entity_decode(get_the_title($parent_id)) . "</a>" . $separator;
        }
        
        // Add current page or category
        if (is_category() || is_single()) {
            // If it's a category archive or single post
            $category = get_the_category();
            if ($category) {
                $category = array_shift($category); // Get the first category
                $page .= "<a href='" . get_category_link($category->term_id) . "'>" . $category->name . "</a>" . $separator;
                
                // Add current post title if it's a single post
                if (is_single()) {
                    $page .=  html_entity_decode(get_the_title($post->ID));
                }
            }
        } elseif (get_post_type() == 'page' || get_post_type() == 'post') {
            if (function_exists('yoast_breadcrumb')) {
                echo yoast_breadcrumb('<div id="breadcrumbs">', '</div>', false);
            }
        }

        // Print the final breadcrumb
        echo "<div id='breadcrumbs'>" . $home_link . $separator . $page . "</div>";
    }

    return $output;
}

add_shortcode('custom_breadcrumbs', 'my_custom_breadcrumbs');


