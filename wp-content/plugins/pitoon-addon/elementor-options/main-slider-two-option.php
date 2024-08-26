<?php

$this->start_controls_section(
    'layout_two_content_section',
    [
        'label' => __('Slider Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$layout_two_sliders = new \Elementor\Repeater();

$layout_two_sliders->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Awesome Title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($layout_two_sliders, 'Title', 'h2', 'layout_two');

$layout_two_sliders->add_control(
    'sub_title',
    [
        'label' => __('Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add paragraph text', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

$layout_two_sliders->add_control(
    'circle_text',
    [
        'label' => __('Circle Text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '1',
        'default' => __('Circle Text', 'pitoon-addon'),
        'label_block' => true,
    ]
);


$layout_two_sliders->add_control(
    'sec_icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-down-right',
            'library' => 'font-awesome',
        ],
    ]
);

$layout_two_sliders->add_control(
    'button_url',
    [
        'label' => __('Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => false,
        ],
        'show_label' => true,
    ]
);

$layout_two_sliders->add_control(
    'background_image',
    [
        'label' => __('Background Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$layout_two_sliders->add_control(
    'shape_one',
    [
        'label' => __('Shape One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$layout_two_sliders->add_control(
    'shape_two',
    [
        'label' => __('Shape Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$layout_two_sliders->add_control(
    'shape_three',
    [
        'label' => __('Shape Three', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$layout_two_sliders->add_control(
    'shape_four',
    [
        'label' => __('Shape Four', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->add_control(
    'layout_two_sliders',
    [
        'label' => __('Main Slider', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_two_sliders->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
