<?php

$this->start_controls_section(
    'layout_two_content_section',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$this->add_control(
    'layout_two_video_title',
    [
        'label' => __('Video Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Video Title', 'h3', 'layout_two');


$this->add_control(
    'layout_two_video_url',
    [
        'label' => __('Video Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Url', 'pitoon-addon'),
        'default' => __('#', 'pitoon-addon'),
        'label_block' => true
    ]
);

$this->add_control(
    'layout_two_bg_image',
    [
        'label' => __('Background Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->end_controls_section();
