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
    'title',
    [
        'label' => __('Add Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('News', 'pitoon-addon')
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
            'size' => 2,
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

$this->end_controls_section();
