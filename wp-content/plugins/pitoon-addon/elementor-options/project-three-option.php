<?php

$this->start_controls_section(
    'project_section_three',
    [
        'label' => __('Project Items', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => ['layout_three']
        ]
    ]
);

$this->add_control(
    'layout_three_sec_title',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_three');

$this->add_control(
    'layout_three_sec_sub_title',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_three');

$this->add_control(
    'layout_three_sec_left_icon',
    [
        'label' => __('Section Left Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-angle-left',
            'library' => 'font-awesome',
        ],
    ]
);
$this->add_control(
    'layout_three_sec_right_icon',
    [
        'label' => __('Section Right Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-angle-right',
            'library' => 'font-awesome',
        ],
    ]
);


$this->add_control(
    'layout_three_enable_filter',
    [
        'label' => esc_html__('Enable Filter', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Yes', 'pitoon-addon'),
        'label_off' => esc_html__('No', 'pitoon-addon'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$layout_three_projects_filter = new \Elementor\Repeater();

$layout_three_projects_filter->add_control(
    'name',
    [
        'label' => __('Filter Name', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Filter Name', 'pitoon-addon'),
        'default' => __('Default Name', 'pitoon-addon')
    ]
);

$layout_three_projects_filter->add_control(
    'slug',
    [
        'label' => __('Filter Slug', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Filter Slug', 'pitoon-addon'),
        'default' => __('default-slug', 'pitoon-addon')
    ]
);

$this->add_control(
    'layout_three_projects_filter',
    [
        'label' => __('Filter', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'prevent_empty' => false,
        'fields' => $layout_three_projects_filter->get_controls(),
        'title_field' => '{{{ name }}}',
        'condition' => [
            'layout_three_enable_filter' => 'yes',
            'layout_type' => 'layout_three'
        ]
    ]
);



$layout_three_projects = new \Elementor\Repeater();

$layout_three_projects->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($layout_three_projects, 'Project Title', 'h3', 'layout_three');

$layout_three_projects->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$layout_three_projects->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-right-arrow',
            'library' => 'font-awesome',
        ],
    ]
);

$layout_three_projects->add_control(
    'url',
    [
        'label' => __('Button Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => true,
        ],
        'show_label' => false,
    ]
);

$layout_three_projects->add_control(
    'slug',
    [
        'label' => __('Slug List', 'slando-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('default-slug', 'slando-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'layout_three_projects_items',
    [
        'label' => __('projects', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_three_projects->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'title' => esc_html__('Title', 'pitoon-addon'),
            ]
        ],
        'title_field' => '{{{ title }}}',

    ]

);

$this->add_control(
    'layout_three_bg_shape',
    [
        'label' => __('Shape Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);


$this->end_controls_section();
