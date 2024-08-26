<?php

//content
$this->start_controls_section(
    'content_one',
    [
        'label' => __('Top Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'name',
    [
        'label' => __('Name', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add name', 'pitoon-addon'),
        'default' => __('Default Name', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Name', 'h3', 'layout_one');

$this->add_control(
    'designation',
    [
        'label' => __('Designation', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add designation', 'pitoon-addon'),
        'default' => __('Default Designation', 'pitoon-addon'),
    ]
);

$this->add_control(
    'summary',
    [
        'label' => __('Summary One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Text', 'pitoon-addon'),
        'default' => __('Default Summary Text', 'pitoon-addon'),
    ]
);

$this->add_control(
    'social_lists_divider',
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

$this->add_control(
    'bg_image',
    [
        'label' => __('Background Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'point_list_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'point_list_title',
    [
        'label' => __('Point Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Point List Title', 'pitoon-addon'),
        'default' => __('Default Point List Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Point Title', 'h3', 'layout_one');

$point_list = new \Elementor\Repeater();

$point_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

$point_list->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-check',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'point_list',
    [
        'label' => __('Point List One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $point_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'progress_list_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$point_list_two = new \Elementor\Repeater();

$point_list_two->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

$point_list_two->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-check',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'point_list_two',
    [
        'label' => __('Point List Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $point_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'progress_list_two_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$progress_list = new \Elementor\Repeater();

$progress_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

$progress_list->add_control(
    'number',
    [
        'label' => __('Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'rows' => '2',
        'placeholder' => __('Add Number', 'pitoon-addon'),
        'default' => __('66%', 'pitoon-addon'),
    ]
);

$this->add_control(
    'progress_list',
    [
        'label' => __('Progress Lists', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $progress_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
