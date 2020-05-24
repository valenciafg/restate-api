<?php
/*
Title: General
Post Type: res_project
Meta box: true
*/
$slogan = array(
    'type'      => 'text',
    'field'     => 'restate_project_slogan',
    'columns'   => 10,
    'label'     => esc_html__('Slogan','restate-api')
);

$show_banner = array(
    'type'      => 'radio',
    'label'     => esc_html__('Show in Banner', 'restate-api'),
    'field'     => 'restate_project_show_banner',
    'value'     => 'FALSE',
    'columns'   => 2,
    'choices'   => array(
        'TRUE'  => esc_html__('Yes', 'restate-api'),
        'FALSE'  => esc_html__('No', 'restate-api')
    )
);

$delivery_date = array(
    'type'      => 'datepicker',
    'label'     => esc_html__('Delivery Date','restate-api'),
    'field'     => 'restate_project_delivery_date',
    'columns'   => 3,
    'options'   => array( 'dateFormat' => 'dd/mm/yy'),
);

$starting_price_pen = array(
    'type'          => 'number',
    'field'         => 'restate_project_starting_price_pen',
    'label'         => esc_html__('Starting Price PEN','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 3
);

$starting_price_usd = array(
    'type'          => 'number',
    'field'         => 'restate_project_starting_price_usd',
    'label'         => esc_html__('Starting Price USD','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 3
);

$max_rooms = array(
    'type'          => 'number',
    'field'         => 'restate_project_max_rooms',
    'label'         => esc_html__('Maximum Rooms Numbers','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 3
);

$min_area = array(
    'type'          => 'number',
    'field'         => 'restate_project_min_area',
    'label'         => esc_html__('Minimum Area','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 6
);

$max_area = array(
    'type'          => 'number',
    'field'         => 'restate_project_max_area',
    'label'         => esc_html__('Maximum Area','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 6
);

$address = array(
    'type'      => 'textarea',
    'field'     => 'restate_project_address',
    'label'     => esc_html__('Address','restate-api'),
    'columns'   => 12
);

$coordinate_x = array(
    'type'          => 'number',
    'field'         => 'restate_project_coordinate_x',
    'label'         => esc_html__('Coordinate X','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 6
);

$coordinate_y = array(
    'type'          => 'number',
    'field'         => 'restate_project_coordinate_y',
    'label'         => esc_html__('Coordinate Y','restate-api'),
    'attributes'    => array( 'step' => 'any' ),
    'columns'       => 6
);

$inside_photos = array(
    'type'  => 'file',
    'field' => 'restate_project_inside_photos',
    'label' => esc_html__('Inside Gallery','experiensa'),
    'options'   => ['button' => esc_html__('Inside Image Gallery','restate-api')],
    'columns'   => 12
);

$outside_photos = array(
    'type'  => 'file',
    'field' => 'restate_project_outside_photos',
    'label' => esc_html__('Outside Gallery','experiensa'),
    'options'   => ['button' => esc_html__('Outside Image Gallery','restate-api')],
    'columns'   => 12
);

$panoramic_photo = array(
    'type'  => 'file',
    'field' => 'restate_project_panoramic_photo',
    'label' => esc_html__('Panoramic Photo','experiensa'),
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

$brochures_files = array(
    'type'      => 'file',
    'field'     => 'restate_project_brochure_file',
    'help'      => esc_html__( 'Brochures should be PDF files','restate-api'),
    'label'     => esc_html__( 'Brochure File','restate-api' ),
    'columns'   => 12,
    'options'   => ['button' => esc_html__('PDF Brochures','restate-api')],
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
    'type'          => 'file',
    'field'         => 'restate_project_logo_image',
    'label'         => esc_html__( 'Logo Image','restate-api' ),
    'columns'       => 3,
    'options'       => ['button' => esc_html__('Logo Image', 'restate-api')],
    'validate' => array(
      ['type' => 'limit','options' => [ 'min' => 0,'max' => 1]]
    )
  ));

piklist('field', array(
    'type'      => 'group',
    'label'     => esc_html__('General information','restate-api'),
    'fields'    => array(
        $slogan,
        $show_banner,
        $delivery_date,
        $max_rooms,
        $starting_price_pen,
        $starting_price_usd,
        $min_area,
        $max_area,
        $address,    
        $coordinate_x,
        $coordinate_y,
        $inside_photos,
        $outside_photos,
        $panoramic_photo,
        $brochures_files,
    )
));

piklist('field', array(
    'type'  => 'editor',
    'field' => 'restate_project_information_conditions',
    'label' => __('Additional information & Conditions', 'restate-api')
));
