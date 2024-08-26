<?php

namespace Layerdrops\Pitoon\Widgets;


class TeamDetails extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-team-details';
    }

    public function get_title()
    {
        return __('Team Details', 'pitoon-addon');
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

        include pitoon_get_elementor_option('teamdetails-one-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Name', '{{WRAPPER}} .team-details__name', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Designation', '{{WRAPPER}} .team-details__sub-title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Summary', '{{WRAPPER}} .team-details__text-1', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Point Title', '{{WRAPPER}} .team-details__points-title', ['layout_one']);

        pitoon_elementor_general_style_options($this, 'Point List Title', '{{WRAPPER}} .team-details__points li .text p', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Progress List Title', '{{WRAPPER}} .team-details__progress-title', ['layout_one']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('teamdetails-one.php');
    }
}
