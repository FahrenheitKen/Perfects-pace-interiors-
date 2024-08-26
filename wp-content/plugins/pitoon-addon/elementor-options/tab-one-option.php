<?php
$this->start_controls_section(
    'content_tab_button',
    [
        'label' => __('Tab', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'section_image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);


$layout_one_tab_button = new \Elementor\Repeater();

$layout_one_tab_button->add_control(
    'active_status',
    [
        'label' => __('Is active?', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'pitoon-addon'),
        'label_off' => __('No', 'pitoon-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

$layout_one_tab_button->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('default title', 'pitoon-addon'),
    ]
);

$layout_one_tab_button->add_control(
    'slug',
    [
        'label' => __('Slug', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add slug', 'pitoon-addon'),
        'default' => __('default slug', 'pitoon-addon'),
    ]
);

$layout_one_tab_button->add_control(
    'layout_one_template',
    [
        'label' => __('Tab Post', 'pitoon-addon'),
        'placeholder' => __('Select a section template for as tab content', 'pitoon-addon'),

        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => pitoon_post_query('tab'),
    ]
);

$this->add_control(
    'layout_one_tab_list',
    [
        'label' => __('Tab Lists', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_one_tab_button->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
