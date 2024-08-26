<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Gallery Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$portfolio_one = new \Elementor\Repeater();

$portfolio_one->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$portfolio_one->add_control(
    'icon',
    [
        'label' => __('Section Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-plus',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'portfolio_one_list',
    [
        'label' => __('Portfolio List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $portfolio_one->get_controls(),
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();
