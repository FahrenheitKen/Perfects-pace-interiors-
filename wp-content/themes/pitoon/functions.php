<?php

/**
 * pitoon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pitoon
 */

if (!defined('PITOON_VERSION')) {
    // Replace the version number of the theme on each release.
    define('PITOON_VERSION', '1.2');
}

if (!function_exists('pitoon_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function pitoon_setup()
    {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pitoon, use a find and replace
		 * to change 'pitoon' to the name of your theme in all the template files.
		 */
        load_theme_textdomain('pitoon', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'pitoon'),
            )
        );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );


        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'pitoon_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pitoon_content_width()
{
    $GLOBALS['content_width'] = apply_filters('pitoon_content_width', 640);
}
add_action('after_setup_theme', 'pitoon_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pitoon_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'pitoon'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'pitoon'),
            'before_widget' => '<section id="%1$s" class="sidebar__single widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="title"><h2>',
            'after_title'   => '</h2></div>',
        )
    );

    if (class_exists('WooCommerce')) {
        register_sidebar(
            array(
                'name'          => esc_html__('Shop Sidebar', 'pitoon'),
                'id'            => 'shop',
                'description'   => esc_html__('Add widgets here.', 'pitoon'),
                'before_widget' => '<section id="%1$s" class="shop-category product__sidebar-single widget sidebar__single %2$s"><div class="widget-inner">',
                'after_widget'  => '</div></section>',
                'before_title'  => '<h3 class="product__sidebar-title">',
                'after_title'   => '</h3>',
            )
        );
    }
}
add_action('widgets_init', 'pitoon_widgets_init');

// google font process

function pitoon_fonts_url()
{
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'pitoon')) {
        $font_url = add_query_arg('family', urlencode('Manrope:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800|Syne:400,500,600,700,800&subset=latin,latin-ext'), "//fonts.googleapis.com/css");
    }

    return esc_url_raw($font_url);
}


/**
 * Enqueue scripts and styles.
 */
function pitoon_scripts()
{
    wp_enqueue_style('pitoon-fonts', pitoon_fonts_url(), array(), null);
    wp_enqueue_style('flaticons', get_template_directory_uri() . '/assets/vendors/flaticons/css/flaticon.css', array(), '1.1');
    wp_enqueue_style('pitoon-icons', get_template_directory_uri() . '/assets/vendors/pitoon-icons/style.css', array(), '1.1');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), '5.0.0');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/vendors/fontawesome/css/all.min.css', array(), '5.15.1');
    wp_enqueue_style('pitoon-style', get_stylesheet_uri(), array(), time());
    wp_style_add_data('pitoon-style', 'rtl', 'replace');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.min.js', array('jquery'), '5.0.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendors/isotope/isotope.js', array('jquery'), '2.1.1', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/vendors/imagesloaded/imagesloaded.pkgd.min.js', array('jquery'), '4.1.4', true);
    wp_enqueue_script('pitoon-theme', get_template_directory_uri() . '/assets/js/pitoon-theme.js', array('jquery'), time(), true);



    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    $pitoon_get_dark_mode_status = get_theme_mod('pitoon_dark_mode', false);

    if (is_page()) {
        $pitoon_get_dark_mode_status = get_post_meta(get_the_ID(), 'pitoon_enable_dark_mode', true);
    }
    $pitoon_dynamic_dark_mode_status = isset($_GET['dark_mode']) ? $_GET['dark_mode'] : $pitoon_get_dark_mode_status;
    if ('on' == $pitoon_dynamic_dark_mode_status) {
        wp_enqueue_style('pitoon-dark-mode', get_template_directory_uri() . '/assets/css/modes/pitoon-dark.css', array(), time());
    }

    $pitoon_get_rtl_mode_status = get_theme_mod('pitoon_rtl_mode', false);

    if (is_page()) {
        $pitoon_rtl_mode_status = get_post_meta(get_the_ID(), 'pitoon_enable_rtl_mode', true);

        $pitoon_get_rtl_mode_status = empty($pitoon_rtl_mode_status) ? $pitoon_get_rtl_mode_status : $pitoon_rtl_mode_status;
    }

    $pitoon_dynamic_rtl_mode_status = isset($_GET['rtl_mode']) ? $_GET['rtl_mode'] : $pitoon_get_rtl_mode_status;
    if ('yes' == $pitoon_dynamic_rtl_mode_status || true == is_rtl()) {
        wp_enqueue_style('pitoon-custom-rtl', get_template_directory_uri() . '/assets/css/pitoon-rtl.css', array(), time());
    }
}
add_action('wp_enqueue_scripts', 'pitoon_scripts');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Implement the customizer feature.
 */
if (class_exists('Layerdrops\Pitoon\Customizer')) {
    require get_template_directory() . '/inc/theme-customizer-styles.php';
}

/**
 * TGMPA Activation.
 */
require get_template_directory() . '/inc/plugins.php';



/*
* one click deomon import
*/
if (class_exists('OCDI_Plugin')) {
    require get_template_directory() . '/inc/demo-import.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}
