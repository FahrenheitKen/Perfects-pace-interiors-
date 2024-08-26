<?php

namespace Layerdrops\Pitoon\Widgets;


class ServiceDetails extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'pitoon-service-details';
	}

	public function get_title()
	{
		return __('Service Details', 'pitoon-addon');
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
					'layout_one' => __('Layout One (Image)', 'pitoon-addon'),
				]
			]
		);

		$this->end_controls_section();

		include  pitoon_get_elementor_option('service-details-one-option.php');
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include pitoon_get_template('service-details-one.php');
	}
}
