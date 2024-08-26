<?php

namespace Layerdrops\Pitoon\Widgets;


class About extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'pitoon-about';
	}

	public function get_title()
	{
		return __('About', 'pitoon-addon');
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

		include pitoon_get_elementor_option('about-one-option.php');
		include pitoon_get_elementor_option('about-two-option.php');
		include pitoon_get_elementor_option('about-three-option.php');
		include pitoon_get_elementor_option('about-four-option.php');

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
		pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);

		pitoon_elementor_general_style_options($this, 'Section Summary', '{{WRAPPER}} .about-one__text-2, {{WRAPPER}} .about-two__text-2,{{WRAPPER}} .about-three__text,{{WRAPPER}} .about-four__text', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);
		pitoon_elementor_general_style_options($this, 'Section Highlighted Text', '{{WRAPPER}} .about-one__text-1,{{WRAPPER}} .about-two__text-1', ['layout_one', 'layout_two']);

		pitoon_elementor_general_style_options($this, 'Featured Title', '{{WRAPPER}} .about-one__title,{{WRAPPER}} .about-three__points li .content h3,{{WRAPPER}} .about-four__points li .text p', ['layout_one', 'layout_three', 'layout_four']);
		pitoon_elementor_general_style_options($this, 'Featured Content', '{{WRAPPER}} .about-one__points-text,{{WRAPPER}} .about-three__points li .content p', ['layout_one', 'layout_three']);

		pitoon_elementor_general_style_options($this, 'Progress Title', '{{WRAPPER}} .about-one__progress-title', ['layout_one']);
		pitoon_elementor_general_style_options($this, 'Progress Number', '{{WRAPPER}} .about-one__progress .count-text', ['layout_one']);

		pitoon_elementor_general_style_options($this, 'Counter Title', '{{WRAPPER}} .about-two__satisfied-count', ['layout_one', 'layout_two']);
		pitoon_elementor_general_style_options($this, 'Counter Number', '{{WRAPPER}} .about-two__satisfied-count h3', ['layout_one', 'layout_two']);

		pitoon_elementor_general_style_options($this, 'Certified Title', '{{WRAPPER}} .about-one__certified-title', ['layout_one']);
		pitoon_elementor_general_style_options($this, 'Client Title', '{{WRAPPER}} .about-three__happy-clients-text', ['layout_three']);

		$this->end_controls_section();

		//button style
		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__('Button Style', 'pitoon-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout_one', 'layout_two', 'layout_three', 'layout_four']
				]
			]
		);

		pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .thm-btn', '{{WRAPPER}} .thm-btn:before', ['layout_one', 'layout_two', 'layout_three']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include pitoon_get_template('about-one.php');
		include pitoon_get_template('about-two.php');
		include pitoon_get_template('about-three.php');
		include pitoon_get_template('about-four.php');
	}
}
