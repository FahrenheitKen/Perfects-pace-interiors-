<?php

//content
$this->start_controls_section(
    'content_two',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => ['layout_two']
        ]
    ]
);

$counter_list_two = new \Elementor\Repeater();

$counter_list_two->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default  Text', 'pitoon-addon'),
    ]
);

$counter_list_two->add_control(
    'number',
    [
        'label' => __('Number', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Number', 'pitoon-addon'),
        'default' => __('680', 'pitoon-addon'),
    ]
);

$counter_list_two->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-checking',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'counter_list_two',
    [
        'label' => __('Counter Lists', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $counter_list_two->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);


$this->end_controls_section();
