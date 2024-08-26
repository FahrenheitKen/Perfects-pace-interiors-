<?php

$this->start_controls_section(
    'content_section_four',
    [
        'label' => __('Gallery Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_four'
        ]
    ]
);

$gallery_four = new \Elementor\Repeater();

$gallery_four->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'gallery_list_four',
    [
        'label' => __('Gallery', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $gallery_four->get_controls(),
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();
