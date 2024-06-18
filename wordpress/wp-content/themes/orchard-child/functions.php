<?php
$template_dir_child = get_template_directory() . '-child';

require_once $template_dir_child . '/classes/PostsHelper.php';

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles()
{
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'site-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Work+Sans:400,700&display=swap' );
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri().'/assets/css/styles.css', '', time() );
    wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', '', '', true );
    wp_enqueue_script( 'custom-script' );
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
