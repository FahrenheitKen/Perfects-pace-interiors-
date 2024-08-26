<?php

namespace Layerdrops\Pitoon\Widgets;


class Team extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-team';
    }

    public function get_title()
    {
        return __('Team', 'pitoon-addon');
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
                ]
            ]
        );

        $this->end_controls_section();

        include pitoon_get_elementor_option('team-one-option.php');
        include pitoon_get_elementor_option('team-two-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_one', 'layout_two']);

        pitoon_elementor_general_style_options($this, 'Name', '{{WRAPPER}} .team-one__name a,{{WRAPPER}} .team-one__hover-name a,{{WRAPPER}} .team-two__hover-name a,{{WRAPPER}} .team-two__name a ', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Designation', '{{WRAPPER}} .team-one__sub-title, {{WRAPPER}} .team-two__sub-title', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Content', '{{WRAPPER}} .team-one__hover-text', ['layout_one']);

        $this->end_controls_section();
        pitoon_elementor_column_count_options($this, ['layout_one', 'layout_two']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('team-one.php');
        include pitoon_get_template('team-two.php');
    }
}
