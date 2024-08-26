<?php

namespace Layerdrops\Pitoon\Widgets;


class ContactForm extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-contact-form';
    }

    public function get_title()
    {
        return __('Contact Us', 'pitoon-addon');
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
                    'layout_two' => __('Layout Two', 'pitoon-addon'),
                    'layout_three' => __('Layout Three', 'pitoon-addon'),
                    'layout_four' => __('Layout Four', 'pitoon-addon'),
                ]
            ]
        );

        $this->end_controls_section();

        include pitoon_get_elementor_option('contact-form-one-option.php');
        include pitoon_get_elementor_option('contact-form-two-option.php');
        include pitoon_get_elementor_option('contact-form-three-option.php');
        include pitoon_get_elementor_option('contact-form-four-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);
        pitoon_elementor_general_style_options($this, 'Section Summary', '{{WRAPPER}} .contact-one__text', ['layout_two', 'layout_four']);
        pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);

        pitoon_elementor_general_style_options($this, 'Point List', '{{WRAPPER}} .contact-one__points li .text p', ['layout_two']);
        pitoon_elementor_general_style_options($this, 'Signature Title', '{{WRAPPER}} .contact-one__signature-box p', ['layout_two']);
        pitoon_elementor_general_style_options($this, 'Contact Title', '{{WRAPPER}} .contact-one__points-two li .content p,{{WRAPPER}} .contact-page__points li .content p', ['layout_two', 'layout_four']);
        pitoon_elementor_general_style_options($this, 'Contact Info', '{{WRAPPER}} .contact-one__points-two li .content a,{{WRAPPER}} .contact-page__points li .content h4 a', ['layout_two', 'layout_four']);
        pitoon_elementor_general_style_options($this, 'Contact Info Hover', '{{WRAPPER}} .contact-one__points-two li .content a:hover,{{WRAPPER}} .contact-page__points li .content h4 a:hover', ['layout_two', 'layout_four']);



        $this->end_controls_section();

        //button style
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_button_style_options($this, 'Contact Button', '{{WRAPPER}} .thm-btn', '{{WRAPPER}} .thm-btn:before', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('contact-form-one.php');
        include pitoon_get_template('contact-form-two.php');
        include pitoon_get_template('contact-form-three.php');
        include pitoon_get_template('contact-form-four.php');
    }
}
