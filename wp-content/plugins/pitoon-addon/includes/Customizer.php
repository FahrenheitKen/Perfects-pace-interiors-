<?php

namespace Layerdrops\Pitoon;

class Customizer
{
    public function __construct()
    {
        add_action("customize_register", [$this, 'pitoon_customizer']);
    }
    public function pitoon_customizer($wp_customize)
    {

        // add panel
        $wp_customize->add_panel(
            'pitoon_theme_opt',
            array(
                'title'      => esc_html__('Pitoon Options', 'pitoon-addon'),
                'description' => esc_html__('Pitoon Theme options panel', 'pitoon-addon'),
                'priority'   => 220,
                'capability' => 'edit_theme_options',
            )
        );

        // General Settings
        $wp_customize->add_section('pitoon_theme_general', array(
            'title' => __('General Settings', 'pitoon-addon'),
            'description' => esc_html__('Pitoon General Settings.', 'pitoon-addon'),
            'priority' => 10,
            'capability' => 'edit_theme_options',
            'panel'      => 'pitoon_theme_opt'
        ));


        $this->customize_type_color(
            $wp_customize,
            esc_html__('Select Theme Base color', 'pitoon-addon'),
            'pitoon_theme_general',
            'theme_base_color',
            '#f9be17'
        );

        $this->customize_type_color(
            $wp_customize,
            esc_html__('Select Theme Primary color', 'pitoon-addon'),
            'pitoon_theme_general',
            'theme_primary_color',
            '#f5f3ee'
        );

        $this->customize_type_color(
            $wp_customize,
            esc_html__('Select Theme Black color', 'pitoon-addon'),
            'pitoon_theme_general',
            'theme_black_color',
            '#04171a'
        );


        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Dark Mode?', 'pitoon-addon'),
            'pitoon_theme_general',
            'pitoon_dark_mode',
            'no',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Boxed Mode?', 'pitoon-addon'),
            'pitoon_theme_general',
            'pitoon_boxed_mode',
            'no',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Rtl Mode?', 'pitoon-addon'),
            'pitoon_theme_general',
            'pitoon_rtl_mode',
            'no',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Custom Cursor', 'pitoon-addon'),
            'pitoon_theme_general',
            'custom_cursor',
            'yes',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Back to top?', 'pitoon-addon'),
            'pitoon_theme_general',
            'scroll_to_top',
            'yes',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_select(
            $wp_customize,
            esc_html__('Select Back to top icon', 'pitoon-addon'),
            'pitoon_theme_general',
            'scroll_to_top_icon',
            'fa-angle-up',
            pitoon_get_fa_icons(),
            function () {
                return (get_theme_mod('scroll_to_top', 'no') == 'yes' ? true : false);
            }
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Preloader?', 'pitoon-addon'),
            'pitoon_theme_general',
            'preloader',
            'yes',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_image(
            $wp_customize,
            esc_html__('Custom Preloader Image', 'pitoon-addon'),
            'pitoon_theme_general',
            'preloader_image',
            '',
            function () {
                return (get_theme_mod('preloader', 'no') == 'yes' ? true : false);
            }
        );

        $this->customize_type_image(
            $wp_customize,
            esc_html__('Page Header Background Image', 'pitoon-addon'),
            'pitoon_theme_general',
            'page_header_bg_image'
        );

        $this->customize_type_image(
            $wp_customize,
            esc_html__('Page Header Shape One', 'pitoon-addon'),
            'pitoon_theme_general',
            'page_header_shape_one'
        );

        $this->customize_type_image(
            $wp_customize,
            esc_html__('Page Header Shape Two', 'pitoon-addon'),
            'pitoon_theme_general',
            'page_header_shape_two'
        );

        $this->customize_type_image(
            $wp_customize,
            esc_html__('Page Header Shape Three', 'pitoon-addon'),
            'pitoon_theme_general',
            'page_header_shape_three'
        );

        $this->customize_type_image(
            $wp_customize,
            esc_html__('404 Page Image', 'pitoon-addon'),
            'pitoon_theme_general',
            '404_page_bg_image'
        );

        // Blog Layout
        $wp_customize->add_section('pitoon_blog_layout_settings', array(
            'title' => __('Blog Layout', 'pitoon-addon'),
            'description' => esc_html__('Pitoon Blog Layout', 'pitoon-addon'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'panel'      => 'pitoon_theme_opt'
        ));

        $this->customize_type_select(
            $wp_customize,
            'Select Sidebar position',
            'pitoon_blog_layout_settings',
            'pitoon_blog_layout',
            'right-align',
            array(
                'left-align' => esc_html__('Left Align', 'pitoon-addon'),
                'right-align' => esc_html__('Right Align', 'pitoon-addon'),
            )
        );

        // Header options
        $wp_customize->add_section('pitoon_theme_header', array(
            'title' => __('Header Settings', 'pitoon-addon'),
            'description' => esc_html__('Pitoon Header Settings', 'pitoon-addon'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'panel'      => 'pitoon_theme_opt'
        ));

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Add Logo size in px', 'pitoon-addon'),
            'pitoon_theme_header',
            'header_logo_width',
            esc_html(198)
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__('Enable Sticky Header?', 'pitoon-addon'),
            'pitoon_theme_header',
            'header_sticky_menu',
            'yes',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Breadcrumb?', 'pitoon-addon'),
            'pitoon_theme_header',
            'breadcrumb_opt',
            'yes',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__('Enable Custom Header?', 'pitoon-addon'),
            'pitoon_theme_header',
            'header_custom',
            'no',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_select(
            $wp_customize,
            esc_html__('Select Header Type', 'pitoon-addon'),
            'pitoon_theme_header',
            'header_custom_post',
            '',
            pitoon_post_query('header'),
            function () {
                return (get_theme_mod('header_custom', 'no') == 'yes' ? true : false);
            }
        );

        //  Mobile Menu
        $wp_customize->add_section('pitoon_theme_mobile_menu', array(
            'title' => esc_html__('Mobile Menu Settings', 'pitoon-addon'),
            'description' => esc_html__('Pitoon Header Settings', 'pitoon-addon'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'panel'      => 'pitoon_theme_opt'
        ));

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Mobile Menu Email', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'pitoon_mobile_menu_email',
            esc_html__('needhelp@pitoon.com', 'pitoon-addon')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Mobile Menu Phone', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'pitoon_mobile_menu_phone',
            esc_html__('666 888 0000', 'pitoon-addon')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Facebook url', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'facebook_url',
            esc_html('#')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Twitter url', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'twitter_url',
            esc_html('#')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Linkedin url', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'linkedin_url',
            esc_html('#')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Pinterest url', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'pinterest_url',
            esc_html('#')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Youtube url', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'youtube_url',
        );


        $this->customize_type_text(
            $wp_customize,
            esc_html__('dribbble url', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'dribble_url',
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Instagram url', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'instagram_url',
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Reddit url', 'pitoon-addon'),
            'pitoon_theme_mobile_menu',
            'reddit_url',
        );

        // Footer options
        $wp_customize->add_section('pitoon_theme_footer', array(
            'title' => esc_html__('Footer Settings', 'pitoon-addon'),
            'description' => esc_html__('Pitoon Footer Settings.', 'pitoon-addon'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'panel'      => 'pitoon_theme_opt'
        ));

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Footer Text', 'pitoon-addon'),
            'pitoon_theme_footer',
            'footer_copytext',
            esc_html__('&copy; All right reserved', 'pitoon'),
            function () {
                return (get_theme_mod('footer_custom', 'no') == 'yes' ? false : true);
            }
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__('Enable Custom Footer ?', 'pitoon-addon'),
            'pitoon_theme_footer',
            'footer_custom',
            'no',
            array(
                'yes' => esc_html__('Yes', 'pitoon-addon'),
                'no' => esc_html__('No', 'pitoon-addon'),
            )
        );

        $this->customize_type_select(
            $wp_customize,
            esc_html__('Select Footer Type', 'pitoon-addon'),
            'pitoon_theme_footer',
            'footer_custom_post',
            '',
            pitoon_post_query('footer'),
            function () {
                return (get_theme_mod('footer_custom', 'no') == 'yes' ? true : false);
            }
        );

        // register
        $wp_customize->add_section('pitoon_login_settings', array(
            'title' => __('Login/Register Settings', 'pitoon-addon'),
            'description' => esc_html__('Login/Register Settings', 'pitoon-addon'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'panel'      => 'pitoon_theme_opt'
        ));

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Redirect url After Login', 'pitoon-addon'),
            'pitoon_login_settings',
            'login_redirect_url',
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Redirect url After Registration', 'pitoon-addon'),
            'pitoon_login_settings',
            'registration_redirect_url',
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Redirect url After Log Out', 'pitoon-addon'),
            'pitoon_login_settings',
            'logout_redirect_url',
        );
    }

    //type text
    public function customize_type_text($wp_customize, $label, $section_id, $name,  $default = "", $callback = null)
    {
        // add settings
        $wp_customize->add_setting($name, array(
            'default'  => $default,
            'type'     => 'theme_mod'
        ));

        $wp_customize->add_control(new \WP_Customize_Control(
            $wp_customize,
            $name,
            array(
                "label" => $label,
                "section" => $section_id,
                "settings" => $name,
                "type" => "text",
                "active_callback" => $callback,
            )
        ));
    }


    //type color
    public function customize_type_color($wp_customize, $label, $section_id, $name,  $default)
    {
        // add settings
        $wp_customize->add_setting($name, array(
            'default'  => sanitize_hex_color($default),
            'type'     => 'theme_mod'
        ));

        // Add control
        $wp_customize->add_control(new \WP_Customize_Color_Control($wp_customize, $name, array(
            'label'    => $label,
            'section'  => $section_id,
            'setting' => $name,
            'priority' => 1
        )));
    }

    // type checkbox
    public function customize_type_checkbox($wp_customize, $label, $section_id, $name,  $default, $callback = null)
    {
        $wp_customize->add_setting($name, array(
            "default" => $default,
            "transport" => "refresh",

        ));

        $wp_customize->add_control(new \WP_Customize_Control(
            $wp_customize,
            $name,
            array(
                "label" => $label,
                "section" => $section_id,
                "settings" => $name,
                "type" => "checkbox",
                "active_callback" => $callback,
            )
        ));
    }

    // type Image
    public function customize_type_image($wp_customize, $label, $section_id, $name,  $default = '', $callback = null)
    {
        $wp_customize->add_setting($name, array(
            "default" => $default,
            "transport" => "refresh",

        ));

        $wp_customize->add_control(new \WP_Customize_Upload_Control($wp_customize, $name, array(
            'label'    => $label,
            'section'  => $section_id,
            'setting' => $name,
            'priority' => 20,
            "active_callback" => $callback,
        )));
    }

    public function customize_type_select($wp_customize, $label, $section_id, $name,  $default, $select_value,  $callback = null)
    {
        $wp_customize->add_setting($name, array(
            'default'     => $default,
            "transport" => "refresh",

        ));

        $wp_customize->add_control(new \WP_Customize_Control(
            $wp_customize,
            $name,
            array(
                "label" => $label,
                "section" => $section_id,
                "settings" => $name,
                "type" => "select",
                'choices'     => $select_value,
                "active_callback" => $callback,
            )
        ));
    }

    public function customize_type_radio($wp_customize, $label, $section_id, $name,  $default, $radio_value, $callback = null)
    {
        $wp_customize->add_setting($name, array(
            'default'     => $default,
            "transport" => "refresh",

        ));

        $wp_customize->add_control(new \WP_Customize_Control(
            $wp_customize,
            $name,
            array(
                "label" => $label,
                "section" => $section_id,
                "settings" => $name,
                "type" => "radio",
                'choices'     => $radio_value,
                "active_callback" => $callback,
            )
        ));
    }
}
