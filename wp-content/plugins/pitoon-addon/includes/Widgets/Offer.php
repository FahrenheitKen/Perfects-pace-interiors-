<?php

namespace Layerdrops\Pitoon\Widgets;


class Offer extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-offer-slider';
    }

    public function get_title()
    {
        return __('Offer', 'pitoon-addon');
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

        include pitoon_get_elementor_option('offer-one-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .banners__left-title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Sub Title Left', '{{WRAPPER}} .banners__left-sub-title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Sub Title Right', '{{WRAPPER}} .banners__left-sub-title.banners__right-sub-title', ['layout_one']);

        pitoon_elementor_button_style_options($this, 'Button Left', '{{WRAPPER}} .thm-btn.banners__left-btn', '{{WRAPPER}} .banners__left-btn::before', ['layout_one']);
        pitoon_elementor_button_style_options($this, 'Button Right', '{{WRAPPER}} .thm-btn.banners__left-btn.thm-btn.banners__right-btn', '{{WRAPPER}} .banners__right-btn:before', ['layout_one']);
        $this->end_controls_section();

        pitoon_elementor_column_count_options($this, ['layout_one']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('offer-one.php');
    }
}
