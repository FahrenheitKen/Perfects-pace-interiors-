<?php

$this->start_controls_section(
    'header_title',
    [
        'label' => __('Section Header', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => ['layout_one', 'layout_two']
        ]
    ]
);

$this->add_control(
    'sec_title',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_one');

$this->add_control(
    'sec_title_shape',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->add_control(
    'sec_sub_title',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_one');


$this->end_controls_section();

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'pitoon-addon'),
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
                'max' => 11,
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
    'select_category',
    [
        'label' => __('Product Category', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => pitoon_get_taxonoy('product_cat'),
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'show_filter',
    [
        'label' => __('Enable Filter', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Show', 'pitoon-addon'),
        'label_off' => __('Hide', 'pitoon-addon'),
        'return_value' => 'yes',
        'default' => 'yes',
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$this->add_control(
    'select_product_category',
    [
        'label' => __('Product Category', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => pitoon_get_taxonoy('product_cat'),
        'multiple' => true,
        'condition' => [
            'layout_type' => 'layout_two',
            'show_filter' => 'yes'
        ]
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

$this->end_controls_section();
