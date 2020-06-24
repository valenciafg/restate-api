<?php
/*
Title: Legal Documents
Post Type: res_project
Order: 6
*/

$name = array(
    'type'      => 'text',
    'field'     => 'restate_project_legal_doc_name',
    'columns'   => 12,
    'label'     => esc_html__('Name','restate-api')
);

$file = array(
    'type'  => 'file',
    'field'     => 'restate_project_legal_doc_file',
    'label'     => esc_html__('Document','restate-api'),
    'options'       => ['button' => esc_html__('Legal Document', 'restate-api')],
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
    'field'     => 'restate_project_legal_docs',
    'template'  => 'field',
    'add_more'  => true,
    'fields'    => array(
        $name,
        $file,
    )
));