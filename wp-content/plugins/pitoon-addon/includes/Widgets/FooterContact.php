<?php

namespace Layerdrops\Pitoon\Widgets;


class FooterContact extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'footer-contact';
    }

    public function get_title()
    {
        return __('Footer Contact', 'pitoon-addon');
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

        include pitoon_get_elementor_option('footer-contact-one-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Style Options', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .footer-widget__title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Text', '{{WRAPPER}} .footer-widget__Contact-text', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Icon Color', '{{WRAPPER}} .footer-widget__Contact-list li .icon span', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Contact Title Color', '{{WRAPPER}} .footer-widget__Contact-list li .text a', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Contact Title Hover Color', '{{WRAPPER}} .footer-widget__Contact-list li .text a:hover', ['layout_one']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('footer-contact.php');
    }
}
