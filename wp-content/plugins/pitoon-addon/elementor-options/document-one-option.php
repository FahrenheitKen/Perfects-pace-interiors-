<?php

//content
$this->start_controls_section(
    'content_one',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$document_list = new \Elementor\Repeater();

$document_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title Text', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($document_list, 'Document Title', 'h3', 'layout_one');

$document_list->add_control(
    'subtitle',
    [
        'label' => __('SubTitle', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add subtitle', 'pitoon-addon'),
        'default' => __('Default Subtitle Text', 'pitoon-addon'),
    ]
);

$document_list->add_control(
    'icon_one',
    [
        'label' => __('Check Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-pdf-file',
            'library' => 'font-awesome',
        ],
    ]
);

$document_list->add_control(
    'url',
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

$this->add_control(
    'document_list',
    [
        'label' => __('Department Lists', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $document_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
