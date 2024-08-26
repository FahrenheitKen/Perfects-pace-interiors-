<?php

namespace Layerdrops\Pitoon\Widgets;


class Faq extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'pitoon-faq';
	}

	public function get_title()
	{
		return __('FAQ', 'pitoon-addon');
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

		include pitoon_get_elementor_option('faq-one-option.php');
		include pitoon_get_elementor_option('faq-two-option.php');
		include pitoon_get_elementor_option('faq-three-option.php');

		//General style
		$this->start_controls_section(
			'general_style',
			[
				'label' => esc_html__('Content Style', 'pitoon-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .section-title__title,{{WRAPPER}} .faq-page__title', ['layout_one', 'layout_two', 'layout_three']);
		pitoon_elementor_general_style_options($this, 'Subtitle', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two']);
		pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_one', 'layout_two']);
		pitoon_elementor_general_style_options($this, 'Summary', '{{WRAPPER}} .faq-one__text', ['layout_one']);

		pitoon_elementor_general_style_options($this, 'Check List', '{{WRAPPER}} .faq-one__points li .text p', ['layout_one']);

		pitoon_elementor_general_style_options($this, 'Counter Text', '{{WRAPPER}} .faq-one__counter-content p', ['layout_one']);
		pitoon_elementor_general_style_options($this, 'Counter Number', '{{WRAPPER}} .faq-one__counter-content h3', ['layout_one']);

		pitoon_elementor_general_style_options($this, 'Contact Title', '{{WRAPPER}} .faq-page__contact-box .content p', ['layout_three']);
		pitoon_elementor_general_style_options($this, 'Contact Number', '{{WRAPPER}} .faq-page__contact-box .content h3', ['layout_three']);

		pitoon_elementor_general_style_options($this, 'Question', '{{WRAPPER}} .faq-one__faq-box .faq-one-accrodion .accrodion-title h4,{{WRAPPER}}  .faq-two__faq-box .faq-two-accrodion .accrodion-title h4,{{WRAPPER}} .faq-page__faq-box .faq-one-accrodion .accrodion-title h4', ['layout_one', 'layout_two', 'layout_three']);
		pitoon_elementor_general_style_options($this, 'Answer', '.faq-one__faq-box .faq-one-accrodion .accrodion-content p,{{WRAPPER}} .faq-two__faq-box .faq-two-accrodion .accrodion-content p,{{WRAPPER}} .faq-page__faq-box .faq-one-accrodion .accrodion-content p', ['layout_one', 'layout_two', 'layout_three']);
		pitoon_elementor_general_style_options($this, 'Box Title', '{{WRAPPER}} .faq-two__trusted-text', ['layout_two']);

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

		$this->end_controls_section();

		pitoon_get_elementor_carousel_options($this, ['layout_one']);
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include pitoon_get_template('faq-one.php');
		include pitoon_get_template('faq-two.php');
		include pitoon_get_template('faq-three.php');
	}
}
