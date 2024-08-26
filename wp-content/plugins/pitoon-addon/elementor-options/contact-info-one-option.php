<?php

$this->start_controls_section(
    'content_top_section',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$layout_one_info_items = new \Elementor\Repeater();

$layout_one_info_items->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$layout_one_info_items->add_control(
    'content',
    [
        'label' => __('Content', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'label_block' => true,
        'default' => wp_kses(__('<a href="tel:+9212340800"><span>Free</span> +92 (1234) 0800</a>'), 'pitoon_allowed_tags')
    ]
);

pitoon_elementor_heading_option($layout_one_info_items, 'Content', 'h4', 'layout_one');


$this->add_control(
    'layout_one_info_items',
    [
        'label' => __('Contact Info', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_one_info_items->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);


$this->add_control(
    'contact_info_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
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
