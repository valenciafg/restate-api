<?php
/*
Title: Models
Post Type: res_project
Order: 4
*/

$name = array(
    'type'      => 'text',
    'field'     => 'restate_project_model_name',
    'columns'   => 12,
    'label'     => esc_html__('Name','restate-api')
);

$total_area = array(
    'type'      => 'text',
    'field'     => 'restate_project_model_total_area',
    'columns'   => 6,
    'label'     => esc_html__('Total Area (m2)','restate-api')
);

$room_number = array(
    'type'          => 'number',
    'field'         => 'restate_project_model_room_number',
    'label'         => esc_html__('Room Number','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 6
);

$starting_price_pen = array(
    'type'          => 'number',
    'field'         => 'restate_project_model_starting_price_pen',
    'label'         => esc_html__('Starting Price PEN','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 6
);

$starting_price_usd = array(
    'type'          => 'number',
    'field'         => 'restate_project_model_starting_price_usd',
    'label'         => esc_html__('Starting Price USD','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 6
);

$model_blueprints = array(
    'type'  => 'file',
    'field' => 'restate_project_model_blueprints',
    'label' => esc_html__('Blueprints','experiensa'),
    'options'   => ['button' => esc_html__('Blueprints Image Gallery','restate-api')],
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
    'field'     => 'restate_project_models',
    'template'  => 'field',
    'add_more'  => true,
    'fields'    => array(
        $name,
        $total_area,
        $room_number,
        $starting_price_pen,
        $starting_price_usd,
        $model_blueprints
    )
));