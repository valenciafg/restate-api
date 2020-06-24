<?php
/*
Title: Panoramic Gallery
Post Type: res_project
Order: 2
*/

$caption = array(
    'type'      => 'text',
    'field'     => 'restate_project_panoramic_caption',
    'columns'   => 12,
    'label'     => esc_html__('Name','restate-api')
);

$image = array(
    'type'  => 'file',
    'field' => 'restate_project_panoramic_image',
    'label' => esc_html__('Panoramic Image','experiensa'),
    'options'   => ['button' => esc_html__('Panoramic Image','restate-api')],
    'columns'   => 12,
    'validate'  => array(
        array(
            'type' => 'limit',
            'options' => array(
                'min' => 0,
                'max' => 1
            )
        )
    )
);

piklist('field', array(
    'type'      => 'group',
    'field'     => 'restate_project_panoramics',
    'template'  => 'field',
    'add_more'  => true,
    'fields'    => array(
        $caption,
        $image
    )
));
