<?php
/*
 * Set up the content width value based on the theme's design.
 */
if (!function_exists('tailor_setup')) :
    function tailor_setup() {
        global $content_width;
        if (!isset($content_width)) {
            $content_width = 870;
        }
        // Make tailor theme available for translation.
        load_theme_textdomain('tailor', get_template_directory() . '/languages');

        // This theme styles the visual editor to resemble the theme style.
        add_editor_style(array('css/editor-style.css', tailor_font_url()));

        // Add RSS feed links to <head> for posts and comments.
        add_theme_support('automatic-feed-links');

        // register menu 
        register_nav_menus(array(
            'primary' => __('Top Header Menu', 'tailor'),
        ));

        // Featured image support
        add_theme_support('post-thumbnails');
        add_image_size('tailor-thumbnail-image', 570, 335, true);
        add_image_size('tailor-blog-thumbnail-image', 870, 405, true);
        add_image_size('tailor-blog-thumbnail-image-home', 570, 335, true);

        // Switch default core markup for search form, comment form, and commen, to output valid HTML5.
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list',
        ));
        add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 150,
        'flex-width'  => true,
        'flex-height' => true,
        'priority' => 11,     
        'header-text' => array('img-responsive-logo', 'site-description-logo')));

        add_theme_support('custom-background', apply_filters('tailor_custom_background_args', array(
            'default-color' => 'f5f5f5',
        )));

        // Add support for featured content.
        add_theme_support('featured-content', array(
            'featured_content_filter' => 'tailor_get_featured_posts',
            'max_posts' => 6,
        ));

        // This theme uses its own gallery styles.
        add_filter('use_default_gallery_style', '__return_false');

        /* slug setup */
        add_theme_support('title-tag');
    }
endif; // tailor_setup
add_action('after_setup_theme', 'tailor_setup');

/**
 * Register Oswald Google font for tailor.
 */
function tailor_font_url() {
    $tailor_font_url = '';
    /*
     * Translators: If there are characters in your language that are not supported
     * by OpenSans, translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Oswald font: on or off', 'tailor')) {
        $tailor_font_url = add_query_arg('family', urlencode('Oswald:300,400,700,900,300italic,400italic,700italic'), "//fonts.googleapis.com/css?family=Oswald");
    }
    return $tailor_font_url;
}

/* Set size of characher in excerpt */
function tailor_excerpt_length($length) {
    if(is_admin()){ return $length; }
    return 50;
}
add_filter('excerpt_length', 'tailor_excerpt_length', 999);

/* readmore button if more content */
function tailor_excerpt_more() {
    return '.<div class="read-more"><a href="' . get_permalink() . '" class="read-more">' . __('Continue Reading', 'tailor') . '</a></div>';
}
add_filter("excerpt_more", "tailor_excerpt_more");

add_action( 'admin_menu', 'tailor_admin_menu');
function tailor_admin_menu( ) {
    add_theme_page( __('Pro Feature','tailor'), __('Tailor Pro','tailor'), 'manage_options', 'tailor-pro-buynow', 'tailor_buy_now', 300 );   
}
function tailor_buy_now(){ ?>
<div class="tailor_pro_version">
  <a href="<?php echo esc_url('https://fasterthemes.com/wordpress-themes/tailor/'); ?>" target="_blank">    
    <img src ="<?php echo esc_url(get_template_directory_uri()); ?>/images/tailor_pro_features.jpg" width="70%" height="auto" />
  </a>
</div>
<?php
}

/* * * Enqueue css and js files ** */
require get_template_directory() . '/functions/enqueue-files.php';

require get_template_directory() . '/functions/theme-default-setup.php';

require get_template_directory() . '/functions/breadcrumbs.php';

require get_template_directory() . '/functions/custom-header.php';
/*** Customizer ***/
require get_template_directory() . '/functions/theme-customizer.php';