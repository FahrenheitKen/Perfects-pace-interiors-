<?php

//content
$this->start_controls_section(
    'content_one',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$business_box_list = new \Elementor\Repeater();

$business_box_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default  Text', 'pitoon-addon'),
    ]
);

$business_box_list->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-copy-writing',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'business_box_list',
    [
        'label' => __('Buisness Box List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $business_box_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
