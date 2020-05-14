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

$type = array(
    'type'      => 'select',
    'field'     => 'restate_project_type',
    'label'     => esc_html__('Type','restate-api'),
    'value'     => 'DEPARTAMENTO',
    'choices'   => array(
        'DEPARTAMENTO'  => esc_html__('Department','restate-api'),
        'OFICINA'       => esc_html__('Office','restate-api'),
        'CASA'          => esc_html__('House','restate-api'),
    ),
    'columns'   => 5
);

$stage = array(
    'type'      => 'select',
    'field'     => 'restate_project_stage',
    'label'     => esc_html__('Stage','restate-api'),
    'value'     => 'CONSTRUCCION',
    'choices'   => array(
        'CONSTRUCCION'  => esc_html__('Building','restate-api'),
        'ENTREGA INMEDIATA'       => esc_html__('Immediate Delivery','restate-api'),
        'PRONTA ENTREGA'       => esc_html__('Prompt Delivery','restate-api'),
        'LANZAMIENTO'       => esc_html__('Release','restate-api'),
        'PREVENTA'       => esc_html__('Presale','restate-api'),
    ),
    'columns'   => 5
);

$delivery_date = array(
    'type'      => 'datepicker',
    'label'     => esc_html__('Delivery Date','restate-api'),
    'field'     => 'restate_project_delivery_date',
    'columns'   => 3,
    'options'   => array( 'dateFormat' => 'dd/mm/yy'),
);

$areas = array(
    'type' => 'checkbox',
    'field' => 'restate_project_areas',
    'label' => esc_html__('Areas','restate-api'),
    'choices' => array(
        'LAUNDRY_ROOM'          => esc_html__('Laundry Room','restate-api'),
        'LOBBY'                 => esc_html__('Lobby','restate-api'),
        'POOL'                  => esc_html__('Pool','restate-api'),
        'BAR'                   => esc_html__('Bar','restate-api'),
        'GRILL_AREA'            => esc_html__('Grill Area','restate-api'),
        'GYM'                   => esc_html__('Gym','restate-api'),
        'MULTIPLE_USE_AREA'     => esc_html__('Multiple Use Area','restate-api'),
        'CHILDRENS_PLAY_AREA'   => esc_html__('Childrens Play Area','restate-api'),
        'BIKE_PARKING'          => esc_html__('Bike Parking','restate-api')
    )
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
        //  $type,
        //  $stage,
        $delivery_date,
        //  $areas,
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
        $brochures_files,
    )
));

piklist('field', array(
    'type'  => 'editor',
    'field' => 'restate_project_information_conditions',
    'label' => __('Additional information & Conditions', 'restate-api')
));
