<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;


/**
 * Setup My Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function pitoon_child_theme_setup()
{
    load_child_theme_textdomain('pitoon-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'pitoon_child_theme_setup');

if (!function_exists('pitoon_child_thm_parent_css')) :
    function pitoon_child_thm_parent_css()
    {
        // loading parent styles
        wp_enqueue_style('pitoon-parent-style', get_template_directory_uri() . '/style.css', array('pitoon-fonts', 'pitoon-icons', 'bootstrap', 'fontawesome'));

        // loading child style based on parent style
        wp_enqueue_style('pitoon-style', get_stylesheet_directory_uri() . '/style.css', array('pitoon-parent-style'));
    }

endif;
add_action('wp_enqueue_scripts', 'pitoon_child_thm_parent_css');

// END ENQUEUE PARENT ACTION