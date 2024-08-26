<?php

namespace Layerdrops\Pitoon\Metaboxes;


class Post
{
    function __construct()
    {
        add_action('cmb2_admin_init', [$this, 'add_metabox']);
    }

    function add_metabox()
    {
        $prefix = 'pitoon_';


        $page_options = new_cmb2_box(array(
            'id'           => $prefix . 'page_general_option',
            'title'        => __('General Options', 'pitoon-addon'),
            'object_types' => array('post'),
            'context'      => 'normal',
            'priority'     => 'default',
        ));

        $page_options->add_field(array(
            'name' => __('Header Image', 'pitoon-addon'),
            'id' => $prefix . 'set_header_image',
            'type' => 'file',
        ));
    }
}
