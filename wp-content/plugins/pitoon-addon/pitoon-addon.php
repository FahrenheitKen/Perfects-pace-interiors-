<?php

/**
 * Plugin Name: Pitoon Theme Addon
 * Description: Required plugin for Pitoon Theme.
 * Plugin URI:  https://layerdrops.com/
 * Version:     1.1
 * Author:      Layerdrops
 * Author URI:  https://layerdrops.com/
 * Text Domain: pitoon-addon
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

require_once __DIR__ . '/vendor/autoload.php';


/**
 * Main Pitoon Theme Addon Class
 *
 * The main class that initiates and runs the plugin.
 *
 * @since 1.0.0
 */
final class Pitoon_Addon_Extension
{

    /**
     * Plugin Version
     *
     * @since 1.0.0
     *
     * @var string The plugin version.
     */
    const VERSION = '1.0.0';

    /**
     * Minimum Elementor Version
     *
     * @since 1.0.0
     *
     * @var string Minimum Elementor version required to run the plugin.
     */
    const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

    /**
     * Minimum PHP Version
     *
     * @since 1.0.0
     *
     * @var string Minimum PHP version required to run the plugin.
     */
    const MINIMUM_PHP_VERSION = '7.0';

    /**
     * Instance
     *
     * @since 1.0.0
     *
     * @access private
     * @static
     *
     * @var Pitoon_Addon_Extension The single instance of the class.
     */
    private static $_instance = null;

    /**
     * Instance
     *
     * Ensures only one instance of the class is loaded or can be loaded.
     *
     * @since 1.0.0
     *
     * @access public
     * @static
     *
     * @return Pitoon_Addon_Extension An instance of the class.
     */
    public static function instance()
    {

        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Constructor
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function __construct()
    {
        $this->define_constants();
        $this->theme_fallback();

        add_action('plugins_loaded', [$this, 'on_plugins_loaded']);
    }

    /**
     * Define the required plugin constants
     *
     * @return void
     */
    public function define_constants()
    {
        define('PITOON_ADDON_VERSION', self::VERSION);
        define('PITOON_ADDON_FILE', __FILE__);
        define('PITOON_ADDON_PATH', __DIR__);
        define('PITOON_ADDON_URL', plugins_url('', PITOON_ADDON_FILE));
        define('PITOON_ADDON_ASSETS', PITOON_ADDON_URL . '/assets');
    }

    /**
     * register fallback theme functions
     *
     * @return void
     */
    public function theme_fallback()
    {
        include PITOON_ADDON_PATH . '/common/functions.php';
    }

    /**
     * Load Textdomain
     *
     * Load plugin localization files.
     *
     * Fired by `init` action hook.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function i18n()
    {

        load_plugin_textdomain('pitoon-addon', false, PITOON_ADDON_PATH . '/languages');
    }

    /**
     * On Plugins Loaded
     *
     * Checks if Elementor has loaded, and performs some compatibility checks.
     * If All checks pass, inits the plugin.
     *
     * Fired by `plugins_loaded` action hook.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function on_plugins_loaded()
    {
        new Layerdrops\Pitoon\Assets();
        new Layerdrops\Pitoon\PostTypes();
        new Layerdrops\Pitoon\Utility();
        new Layerdrops\Pitoon\Megamenu();
        new Layerdrops\Pitoon\Customizer();
        new Layerdrops\Pitoon\Frontend\Shortcodes();


        if (is_admin()) {
            new Layerdrops\Pitoon\Admin();
        }

        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
        add_action('admin_enqueue_scripts', [$this, 'admin_enqueue_scripts']);
        add_action('customize_controls_enqueue_scripts', [$this, 'customize_controls_scripts']);


        if ($this->is_compatible()) {
            add_action('elementor/init', [$this, 'init']);
        }
    }

    public function customize_controls_scripts()
    {
        wp_enqueue_script('select2');
        wp_enqueue_script('pitoon-addon-customizer');
    }

    public function admin_enqueue_scripts()
    {
        wp_enqueue_style('select2');
        wp_enqueue_style('pitoon-addon-admin-style');
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style('animate');
        wp_enqueue_style('custom-animate');
        wp_enqueue_style('bootstrap-select');
        wp_enqueue_style('bxslider');
        wp_enqueue_style('jarallax');
        wp_enqueue_style('jquery-magnific-popup');
        wp_enqueue_style('odometer');
        wp_enqueue_style('owl-carousel');
        wp_enqueue_style('owl-theme');
        wp_enqueue_style('reey-font');
        wp_enqueue_style('swiper');
        wp_enqueue_style('range-slider');
        wp_enqueue_style('pitoon-icon-2');
        wp_enqueue_style('pitoon-addon-style');

        wp_enqueue_script('bootstrap-select');
        wp_enqueue_script('jquery-bxslider');
        wp_enqueue_script('countdown');
        wp_enqueue_script('jarallax');
        wp_enqueue_script('jquery-ajaxchimp');
        wp_enqueue_script('jquery-appear');
        wp_enqueue_script('jquery-magnific-popup');
        wp_enqueue_script('odometer');
        wp_enqueue_script('owl-carousel');
        wp_enqueue_script('jquery-circle-progress');
        wp_enqueue_script('circle-type');
        wp_enqueue_script('circle-lettering');
        wp_enqueue_script('swiper');
        wp_enqueue_script('range-slider');
        wp_enqueue_script('wow');
        wp_enqueue_script('sharer');
        wp_enqueue_script('pitoon-addon-script');

        wp_localize_script('pitoon-addon-script', 'pitoon_login_object', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'login_redirect_url' =>  !empty(get_theme_mod('login_redirect_url')) ? get_theme_mod('login_redirect_url') : esc_url(home_url('/')),
            'registration_redirect_url' =>  !empty(get_theme_mod('registration_redirect_url')) ? get_theme_mod('registration_redirect_url') : esc_url(home_url('/')),
            'message' => wp_kses(__('<strong>Error:</strong>Please use valid userName or password', 'pitoon-addon'), 'pitoon-addon'),
            'check_login'                => is_user_logged_in() ? 'yes' : 'no',
            'str_login'                    => esc_html__('Please login to add favorite!', 'pitoon-addon'),
        ));
    }

    /**
     * Compatibility Checks
     *
     * Checks if the installed version of Elementor meets the plugin's minimum requirement.
     * Checks if the installed PHP version meets the plugin's minimum requirement.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function is_compatible()
    {

        // Check if Elementor installed and activated
        if (!did_action('elementor/loaded')) {
            add_action('admin_notices', [$this, 'admin_notice_missing_main_plugin']);
            return false;
        }

        // Check for required Elementor version
        if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_elementor_version']);
            return false;
        }

        // Check for required PHP version
        if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_php_version']);
            return false;
        }

        return true;
    }

    /**
     * Initialize the plugin
     *
     * Load the plugin only after Elementor (and other plugins) are loaded.
     * Load the files required to run the plugin.
     *
     * Fired by `plugins_loaded` action hook.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function init()
    {

        $this->i18n();



        // register category
        add_action('elementor/elements/categories_registered', [$this, 'add_elementor_widget_categories']);
        // load icons
        add_filter('elementor/icons_manager/additional_tabs', array($this, 'add_elementor_custom_icons'));

        // Add Plugin actions
        add_action('elementor/widgets/register', [$this, 'init_widgets']);
    }

    /**
     * Init Widgets
     *
     * Include widgets files and register them
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function init_widgets()
    {

        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\About());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Feature());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\MainSlider());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Service());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Team());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Trust());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Project());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Testimonials());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Sponsors());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Faq());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Blog());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Counter());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Sliding());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\GoogleMaps());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Choose());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Process());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\MakeWebsite());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Certificate());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\BuisnessBox());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\BenefitBox());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Importance());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\SidebarNavmenu());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\TeamDetails());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\CallToAction());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\SidebarBanner());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Tab());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Document());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\DateBox());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Pagination());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\ContactInfo());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Portfolio());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Header());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\FooterAbout());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\FooterNavMenu());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\FooterSubscribe());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\FooterContact());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\FooterCopyright());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Pricing());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\HomeShowCase());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Video());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Shape());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Login());
        \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\Register());

        if (function_exists('wpcf7')) {
            \Elementor\Plugin::instance()->widgets_manager->register(new Layerdrops\Pitoon\Widgets\ContactForm());
        }
    }

    public function add_elementor_widget_categories($elements_manager)
    {

        $elements_manager->add_category(
            'pitoon-category',
            [
                'title' => __('Pitoon Addon', 'pitoon-addon'),
                'icon' => 'fa fa-plug',
            ]
        );
    }

    public function add_elementor_custom_icons($array)
    {

        return array(
            'pitoon' => array(
                'name'          => 'pitoon',
                'label'         => 'Pitoon Icons',
                'url'           => '',
                'enqueue'       => array(
                    PITOON_ADDON_URL . '/assets/vendors/pitoon-icons/style.css',
                ),
                'prefix'        => '',
                'displayPrefix' => '',
                'labelIcon'     => 'icon-dairy-products',
                'ver'           => '1.1',
                'fetchJson'     => PITOON_ADDON_URL . '/assets/vendors/pitoon-icons/pitoon-icons.json',
                'native'        => 1,
            ),
        );
    }


    /**
     * Admin notice
     *
     * Warning when the site doesn't have Elementor installed or activated.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function admin_notice_missing_main_plugin()
    {

        if (isset($_GET['activate'])) unset($_GET['activate']);

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor */
            esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'pitoon-addon'),
            '<strong>' . esc_html__('Pitoon Theme Addon', 'pitoon-addon') . '</strong>',
            '<strong>' . esc_html__('Elementor', 'pitoon-addon') . '</strong>'
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required Elementor version.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function admin_notice_minimum_elementor_version()
    {

        if (isset($_GET['activate'])) unset($_GET['activate']);

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'pitoon-addon'),
            '<strong>' . esc_html__('Pitoon Theme Addon', 'pitoon-addon') . '</strong>',
            '<strong>' . esc_html__('Elementor', 'pitoon-addon') . '</strong>',
            self::MINIMUM_ELEMENTOR_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required PHP version.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function admin_notice_minimum_php_version()
    {

        if (isset($_GET['activate'])) unset($_GET['activate']);

        $message = sprintf(
            /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'pitoon-addon'),
            '<strong>' . esc_html__('Pitoon Theme Addon', 'pitoon-addon') . '</strong>',
            '<strong>' . esc_html__('PHP', 'pitoon-addon') . '</strong>',
            self::MINIMUM_PHP_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }
}

Pitoon_Addon_Extension::instance();
