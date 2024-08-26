<?php
$this->start_controls_section(
    'header_title',
    [
        'label' => __('Blog Header', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => ['layout_one', 'layout_two', 'layout_three']
        ]
    ]
);

$this->add_control(
    'sec_title',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_one');


$this->add_control(
    'sec_sub_title',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_one');

$this->add_control(
    'sec_left_icon',
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
    'sec_right_icon',
    [
        'label' => __('Section Right Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-angle-right',
            'library' => 'font-awesome',
        ],
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'post_option',
    [
        'label' => __('Post Options', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);


$this->add_control(
    'post_count',
    [
        'label' => __('Number Of Posts', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => ['count'],
        'range' => [
            'count' => [
                'min' => 0,
                'max' => 15,
                'step' => 1,
            ],
        ],
        'default' => [
            'unit' => 'count',
            'size' => 6,
        ],
    ]
);


$this->add_control(
    'query_order',
    [
        'label' => __('Select Order', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'default' => 'DESC',
        'options' => [
            'DESC' => __('DESC', 'pitoon-addon'),
            'ASC' => __('ASC', 'pitoon-addon'),
        ]
    ]
);

$this->add_control(
    'select_category',
    [
        'label' => __('Post Category', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => pitoon_get_taxonoy('category'),
    ]
);

$this->add_control(
    'pagination_status',
    [
        'label' => __('Enable Pagination?', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'pitoon-addon'),
        'label_off' => __('No', 'pitoon-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

$this->add_control(
    'read_more',
    [
        'label' => __('More', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('More', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'content_length',
    [
        'label'         => esc_html__('Content Length', 'pitoon-addon'),
        'type'             => \Elementor\Controls_Manager::TEXT,
        'default'         => '12',
        'placeholder'     => esc_html__('Type Content Length', 'pitoon-addon'),
    ]
);

$this->add_control(
    'blog_icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-right-arrow',
            'library' => 'font-awesome',
        ],
    ]
);

$this->end_controls_section();
