<?php
/*
Title: Sales Advisor
Post Type: res_project
Order: 2
*/
$fullname = array(
    'type'      => 'text',
    'field'     => 'restate_project_advisor_fullname',
    'columns'   => 10,
    'label'     => esc_html__('Fullname','restate-api')
);

$whatsapp_number = array(
    'type'      => 'text',
    'field'     => 'restate_project_advisor_whatsapp_number',
    'columns'   => 10,
    'label'     => esc_html__('Whatsapp Number','restate-api')
);

$email = array(
    'type'      => 'text',
    'field'     => 'restate_project_advisor_email',
    'columns'   => 10,
    'label'     => esc_html__('Email','restate-api')
);

$gender = array(
	'type'  => 'radio',
	'field' => 'restate_project_advisor_gender',
    'label' => esc_html__('Gender','restate-api'),
    'columns'   => 10,
	'attributes' => array(
		'class' => 'text'
	),
	'choices' => array(
		'female' => esc_html__('Female','restate-api'),
		'male' => esc_html__('Male','restate-api')
	)
);

piklist('field', array(
    'type'      => 'group',
    'label'     => esc_html__('Sales Advisor','restate-api'),
    'fields'    => array(
        $fullname,
        $whatsapp_number,
        $email,
        $gender
    )
));