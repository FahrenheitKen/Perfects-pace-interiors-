<?php

$this->start_controls_section(
    'content_section_three',
    [
        'label' => __('Gallery Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$this->add_control(
    'layout_three_sec_title',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'default' => __('Awesome Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h3', 'layout_three');

$this->add_control(
    'layout_three_gallery_title_hr',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$gallery_three = new \Elementor\Repeater();

$gallery_three->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$gallery_three->add_control(
    'icon',
    [
        'label' => __('Check Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fab fa-instagram',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'gallery_list_three',
    [
        'label' => __('Gallery', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $gallery_three->get_controls(),
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();
