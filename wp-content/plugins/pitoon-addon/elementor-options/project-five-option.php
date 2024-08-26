<?php

$this->start_controls_section(
    'project_section_five',
    [
        'label' => __('Project Items', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => ['layout_five']
        ]
    ]
);

$layout_five_projects = new \Elementor\Repeater();

$layout_five_projects->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($layout_five_projects, 'Project Title', 'h3', 'layout_five');

$layout_five_projects->add_control(
    'subtitle',
    [
        'label' => __('SubTitle', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('SubTitle', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$layout_five_projects->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$layout_five_projects->add_control(
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

$layout_five_projects->add_control(
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


$this->add_control(
    'layout_five_projects_items',
    [
        'label' => __('Projects', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_five_projects->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'title' => esc_html__('Title', 'pitoon-addon'),
            ]
        ],
        'title_field' => '{{{ title }}}',

    ]

);

$this->end_controls_section();
