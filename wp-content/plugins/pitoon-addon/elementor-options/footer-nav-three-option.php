<?php
$this->start_controls_section(
    'content_section_three',
    [
        'label' => __('Explore Menu Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$this->add_control(
    'sec_title_three',
    [
        'label' => __('Add Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Explore', 'pitoon-addon')
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h3', 'layout_three');

$nav_menus = new \Elementor\Repeater();

$nav_menus->add_control(
    'nav_menu',
    [
        'label' => __('Select Nav Menu', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => pitoon_get_nav_menu(),
        'label_block' => true,
    ]
);


$this->add_control(
    'nav_menus_explore',
    [
        'label' => __('Nav Menus', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $nav_menus->get_controls(),
        'prevent_empty' => false,
    ]
);


$this->end_controls_section();
