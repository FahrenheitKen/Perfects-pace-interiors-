<?php
$this->start_controls_section(
    'content_section',
    [
        'label' => __('Offer Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$offer = new \Elementor\Repeater();

$offer->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Title', 'pitoon-addon'),
        'default' => __('Awesome Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($offer, 'Title', 'h3', 'layout_one');

$offer->add_control(
    'sub_title',
    [
        'label' => __('Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Sub Title', 'pitoon-addon'),
        'default' => __('Awesome Sub Title', 'pitoon-addon'),
    ]
);

$offer->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Shop Now', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$offer->add_control(
    'button_url',
    [
        'label' => __('Button Url', 'pitoon-addon'),
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

$offer->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$offer->add_control(
    'shape',
    [
        'label' => __('Shape', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->add_control(
    'offers',
    [
        'label' => __('Offers', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $offer->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'title' => __('Awesome Title', 'pitoon-addon'),
            ],
        ],
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
