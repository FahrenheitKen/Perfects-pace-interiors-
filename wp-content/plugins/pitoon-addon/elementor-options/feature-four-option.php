<?php

//content
$this->start_controls_section(
    'content_four',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_four'
        ]
    ]
);

$feature_list_four = new \Elementor\Repeater();

$feature_list_four->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($feature_list_four, 'Feature Title', 'h3', 'layout_four');

$feature_list_four->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-buildings',
            'library' => 'font-awesome',
        ],
    ]
);

$feature_list_four->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$feature_list_four->add_control(
    'url',
    [
        'label' => __('Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => false,
        ],
        'show_label' => true,
    ]
);

$this->add_control(
    'feature_list_four',
    [
        'label' => __('Feature Lists', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $feature_list_four->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
