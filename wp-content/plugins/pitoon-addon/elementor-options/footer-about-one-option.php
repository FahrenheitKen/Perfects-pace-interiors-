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
    'logo',
    [
        'label' => __('Add Logo', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'logo_dimension',
    [
        'label' => __('Logo Dimension', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
        'description' => __('Set Custom Logo Size.', 'pitoon-addon'),
        'default' => [
            'width' => '134',
            'height' => '34',
        ],
    ]
);

$this->add_control(
    'text',
    [
        'label' => __('Text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add paragraph text', 'pitoon-addon'),
        'default' => __('Default text', 'pitoon-addon'),
    ]
);

$social_icons = new \Elementor\Repeater();

$social_icons->add_control(
    'social_icon',
    [
        'label' => __('Select Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fab fa-facebook-f',
            'library' => 'brand',
        ],
        'label_block' => true,
    ]
);

$social_icons->add_control(
    'social_url',
    [
        'label' => __('Add Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => false,
        ],
        'show_label' => false,
    ]
);

$this->add_control(
    'social_icons',
    [
        'label' => __('Social Icons', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $social_icons->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'social_url' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => false,
                ],
            ],
        ],
    ]
);

$this->end_controls_section();
