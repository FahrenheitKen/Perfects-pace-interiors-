<?php

namespace Layerdrops\Pitoon\Widgets;


class Pricing extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-pricing';
    }

    public function get_title()
    {
        return __('Pricing', 'pitoon-addon');
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

        include pitoon_get_elementor_option('pricing-one-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .section-title__title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_one']);

        pitoon_elementor_general_style_options($this, 'Heading', '{{WRAPPER}} .pricing-page__main-tab-box .tab-buttons .tab-btn span', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Active Heading', '{{WRAPPER}} .pricing-page__main-tab-box .tab-buttons .tab-btn.active-btn span,{{WRAPPER}} .pricing-page__main-tab-box .tab-buttons .tab-btn span', ['layout_one']);

        pitoon_elementor_general_style_options($this, 'Subtitle', '{{WRAPPER}} .pricing-page__price-sub-title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Price', '{{WRAPPER}} .pricing-page__price', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Service Title', '{{WRAPPER}} .pricing-page__title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Service List', '{{WRAPPER}} .pricing-page__service-list li .text p', ['layout_one']);

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

        pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .thm-btn', '{{WRAPPER}} .thm-btn:before', ['layout_one']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('pricing-one.php');
    }
}
