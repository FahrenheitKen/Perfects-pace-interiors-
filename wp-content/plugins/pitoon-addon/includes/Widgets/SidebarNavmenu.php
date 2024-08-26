<?php

namespace Layerdrops\Pitoon\Widgets;


class SidebarNavmenu extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'sidebar-nav';
    }

    public function get_title()
    {
        return __('Sidebar Nav Menus', 'pitoon-addon');
    }

    public function get_icon()
    {
        return 'eicon-cogs';
    }

    public function get_categories()
    {
        return ['pitoon-category'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'layout_section',
            [
                'label' => __('Layout', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout_type',
            [
                'label' => __('Select Layout', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'default' => 'layout_one',
                'options' => [
                    'layout_one' => __('Layout One', 'pitoon-addon'),
                ]
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Section Title', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('Add title', 'pitoon-addon'),
                'default' => __('Default Title', 'pitoon-addon'),
            ]
        );

        $nav_menus = new \Elementor\Repeater();

        $nav_menus->add_control(
            'nav_menu',
            [
                'label' => __('Select Nav Menu', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'options' => pitoon_get_nav_menu(),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'nav_menus',
            [
                'label' => __('Nav Menus', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'prevent_empty' => false,
                'fields' => $nav_menus->get_controls(),
            ]
        );

        $this->end_controls_section();

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Style Options', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .services-details__services-title h3', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Nav Menu', '{{WRAPPER}} .services-details__services li a', ['layout_one']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('sidebar-nav-menu-one.php');
    }
}
