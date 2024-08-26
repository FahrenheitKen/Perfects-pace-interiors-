<?php

namespace Layerdrops\Pitoon\Widgets;


class Header extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-header';
    }

    public function get_title()
    {
        return __('Header', 'pitoon-addon');
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
                'label' => __('Layout Type', 'pitoon-addon'),
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
                    'layout_two' => __('Layout Two', 'pitoon-addon'),
                    'layout_three' => __('Layout Three', 'pitoon-addon'),
                ]
            ]
        );

        $this->end_controls_section();

        include pitoon_get_elementor_option('header-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Style Options', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Menu', '{{WRAPPER}} .main-menu .main-menu__list > li > a,{{WRAPPER}} .main-menu .main-menu__list > li > ul > li > a', ['layout_one', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Top Bar Contact Title', '{{WRAPPER}} .main-header__contact-list li .text p a,{{WRAPPER}} .main-header__contact-list li .text p,{{WRAPPER}} .main-header-three__contact-list li .text p a,{{WRAPPER}} .main-header-three__contact-list li .text p', ['layout_one', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Top Bar Icon', '{{WRAPPER}} .main-header__contact-list li .icon i,{{WRAPPER}} .main-header-three__contact-list li .icon i', ['layout_one', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Top Bar Menu', '{{WRAPPER}} .main-header__top-menu li a ,{{WRAPPER}} .main-header-three__top-menu li a', ['layout_one', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Top Bar Social Title', '{{WRAPPER}} .main-header__social-title ,{{WRAPPER}} .main-header-three__social-title', ['layout_one', 'layout_three']);

        pitoon_elementor_general_style_options($this, 'Call Title', '{{WRAPPER}} .main-menu__call-sub-title, {{WRAPPER}} .main-menu-two__call-sub-title,{{WRAPPER}} .main-menu-three__call-sub-title', ['layout_one', 'layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Call Number', '{{WRAPPER}} .main-menu__call-number, {{WRAPPER}} .main-menu-two__call-number,{{WRAPPER}}  .main-menu-three__call-number a', ['layout_one', 'layout_two', 'layout_three']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('header.php');
    }
}
