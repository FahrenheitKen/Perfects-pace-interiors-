<?php

namespace Layerdrops\Pitoon\Widgets;


class Sponsors extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-sponsors';
    }

    public function get_title()
    {
        return __('Sponsors', 'pitoon-addon');
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
            'sec_title',
            [
                'label' => __('Section Title', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => '2',
                'placeholder' => __('Add title', 'pitoon-addon'),
                'default' => __('Default Title', 'pitoon-addon'),
            ]
        );

        $sponsor_images = new \Elementor\Repeater();

        $sponsor_images->add_control(
            'image',
            [
                'label' => __('Add Image', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'sponsor_images',
            [
                'label' => __('Sponsor Items', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $sponsor_images->get_controls(),
            ]
        );

        $this->end_controls_section();

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .brand-one__title p', ['layout_one', 'layout_two', 'layout_three']);

        $this->end_controls_section();

        pitoon_get_elementor_carousel_options($this, ['layout_one', 'layout_two', 'layout_three']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('sponsors-one.php');
        include pitoon_get_template('sponsors-two.php');
        include pitoon_get_template('sponsors-three.php');
    }
}
