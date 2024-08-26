<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'prev_text',
    [
        'label' => __('Previous Text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Previous Text', 'pitoon-addon'),
        'default' => __('Previous', 'pitoon-addon'),
        'label_block' => true
    ]
);

$this->add_control(
    'prev_icon',
    [
        'label' => __('Previous Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-left-arrow',
            'library' => 'custom-icon',
        ],
    ]
);

$this->add_control(
    'prev_url',
    [
        'label' => __('Prev Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => true,
        'default' => [
            'url' => '#',
            'is_external' => true,
            'nofollow' => true,
        ],
        'show_label' => false,
    ]
);

$this->add_control(
    'next_text',
    [
        'label' => __('Next Text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Previous Text', 'pitoon-addon'),
        'default' => __('Next', 'pitoon-addon'),
        'label_block' => true
    ]
);

$this->add_control(
    'next_icon',
    [
        'label' => __('Next Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-right-arrow',
            'library' => 'custom-icon',
        ],
    ]
);

$this->add_control(
    'next_url',
    [
        'label' => __('Next Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => true,
        'default' => [
            'url' => '#',
            'is_external' => true,
            'nofollow' => true,
        ],
        'show_label' => false,
    ]
);

$this->end_controls_section();
