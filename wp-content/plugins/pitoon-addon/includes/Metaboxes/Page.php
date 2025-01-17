<?php

namespace Layerdrops\Pitoon\Metaboxes;


class Page
{
    function __construct()
    {
        add_action('cmb2_admin_init', [$this, 'page_metabox']);
    }

    function page_metabox()
    {
        $prefix = 'pitoon_';

        $general = new_cmb2_box(array(
            'id'           => $prefix . 'page_option',
            'title'        => __('General Options', 'pitoon-addon'),
            'object_types' => array('page'),
            'context'      => 'normal',
            'priority'     => 'default',
        ));

        $general->add_field(array(
            'name' => __('Enable Custom Header', 'pitoon-addon'),
            'id' => $prefix . 'custom_header_status',
            'type' => 'radio',
            'options' => array(
                'on' => __('On', 'pitoon-addon'),
                'off'   => __('Off', 'pitoon-addon'),
            ),
        ));


        $general->add_field(array(
            'name' => __('Select Custom Header', 'pitoon-addon'),
            'id' => $prefix . 'select_custom_header',
            'type' => 'pw_select',
            'options' => pitoon_post_query('header'),
            'attributes' => array(
                'data-conditional-id' => $prefix . 'custom_header_status',
                'data-conditional-value' => 'on',
            ),
        ));

        $general->add_field(array(
            'name' => __('Enable Custom Footer', 'pitoon-addon'),
            'id' => $prefix . 'custom_footer_status',
            'type' => 'radio',
            'options' => array(
                'on' => __('On', 'pitoon-addon'),
                'off'   => __('Off', 'pitoon-addon'),
            ),
        ));


        $general->add_field(array(
            'name' => __('Select Custom Footer', 'pitoon-addon'),
            'id' => $prefix . 'select_custom_footer',
            'type' => 'pw_select',
            'options' => pitoon_post_query('footer'),
            'attributes' => array(
                'data-conditional-id' => $prefix . 'custom_footer_status',
                'data-conditional-value' => 'on',
            ),
        ));


        $general->add_field(array(
            'name' => __('Show Page Banner', 'pitoon-addon'),
            'id' => $prefix . 'show_page_banner',
            'type' => 'radio',
            'default' => 'on',
            'options' => array(
                'on' => __('On', 'pitoon-addon'),
                'off' => __('Off', 'pitoon-addon'),
            ),
        ));

        $general->add_field(array(
            'name' => __('Enable BreadCrumb', 'pitoon-addon'),
            'id' => $prefix . 'show_page_breadcrumb',
            'type' => 'radio',
            'default' => 'on',
            'options' => array(
                'on' => __('On', 'pitoon-addon'),
                'off' => __('Off', 'pitoon-addon'),
            ),
            'attributes' => array(
                'data-conditional-id' => $prefix . 'show_page_banner',
                'data-conditional-value' => 'on',
            ),
        ));


        $general->add_field(array(
            'name' => __('Header Title', 'pitoon-addon'),
            'id' => $prefix . 'set_header_title',
            'type' => 'text',
            'attributes' => array(
                'data-conditional-id' => $prefix . 'show_page_banner',
                'data-conditional-value' => 'on',
            ),
        ));

        $general->add_field(array(
            'name' => __('Header Image', 'pitoon-addon'),
            'id' => $prefix . 'set_header_image',
            'type' => 'file',
            'attributes' => array(
                'data-conditional-id' => $prefix . 'show_page_banner',
                'data-conditional-value' => 'on',
            ),
        ));

        $color_options = new_cmb2_box(array(
            'id'           => $prefix . 'page_color_option',
            'title'        => __('Color Options', 'pitoon-addon'),
            'object_types' => array('page'),
            'context'      => 'normal',
            'priority'     => 'default',
        ));


        $general->add_field(array(
            'name' => __('Enable RTL Mode', 'pitoon-addon'),
            'id'   => $prefix . 'enable_rtl',
            'type' => 'checkbox',
        ));


        $general->add_field(array(
            'name' => __('Enable Boxed Layout', 'pitoon-addon'),
            'id'   => $prefix . 'enable_boxed_layout',
            'type' => 'checkbox',
        ));


        $general->add_field(array(
            'name' => __('Enable Dark Mode', 'pitoon-addon'),
            'id'   => $prefix . 'enable_dark_mode',
            'type' => 'checkbox',
        ));


        $color_options->add_field(array(
            'name' => __('Base Color', 'pitoon-addon'),
            'id' => $prefix . 'base_color',
            'type'    => 'colorpicker',
        ));

        $color_options->add_field(array(
            'name' => __('Primary Color', 'pitoon-addon'),
            'id' => $prefix . 'primary_color',
            'type'    => 'colorpicker',
        ));

        $color_options->add_field(array(
            'name' => __('Secondary Color', 'pitoon-addon'),
            'id' => $prefix . 'secondary_color',
            'type'    => 'colorpicker',
        ));
    }
}
