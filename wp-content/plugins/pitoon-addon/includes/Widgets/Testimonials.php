<?php

namespace Layerdrops\Pitoon\Widgets;


class Testimonials extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-testimonials';
    }

    public function get_title()
    {
        return __('Testimonials', 'pitoon-addon');
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
                    'layout_three' => __('Layout Two', 'pitoon-addon'),
                ]
            ]
        );

        $this->end_controls_section();

        include pitoon_get_elementor_option('testimonial-one-option.php');
        include pitoon_get_elementor_option('testimonial-two-option.php');
        include pitoon_get_elementor_option('testimonial-three-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_one', 'layout_three']);

        pitoon_elementor_general_style_options($this, 'Name', '{{WRAPPER}} .testimonial-one__client-name,{{WRAPPER}} .testimonial-two__client-name,{{WRAPPER}} .testimonial-three__client-name', ['layout_one', 'layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Designation', '{{WRAPPER}} .testimonial-three__client-sub-title', ['layout_three']);
        pitoon_elementor_general_style_options($this, 'Testimonial', '{{WRAPPER}} .testimonial-one__text,{{WRAPPER}} .testimonial-two__text,{{WRAPPER}} .testimonial-three__text', ['layout_one', 'layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Rating', '{{WRAPPER}} .testimonial-one__client-rate span,{{WRAPPER}} .testimonial-three__client-rating i', ['layout_one', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Customer', '{{WRAPPER}} .testimonial-two__client-name span', ['layout_two']);

        $this->end_controls_section();

        //button style
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'layout_type' => ['layout_one']
                ]
            ]
        );

        pitoon_elementor_button_style_options($this, 'Section Rating Button', '{{WRAPPER}} .testimonial-one__reviews span', '{{WRAPPER}} .testimonial-one__reviews span:hover', ['layout_one']);

        $this->end_controls_section();

        pitoon_get_elementor_carousel_options($this, ['layout_one', 'layout_three']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('testimonials-one.php');
        include pitoon_get_template('testimonials-two.php');
        include pitoon_get_template('testimonials-three.php');
    }
}
