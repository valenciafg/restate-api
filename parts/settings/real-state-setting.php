<?php
/*
 Title: Agency Information
 Setting: real_estate_setting
 Tab: Main Settings
 Flow: Real Estate Options Flow
 */
piklist('field', array(
    'type'      => 'file',
    'field'     => 'real_estate_setting_main_logo',
    'label'     => esc_html__('Main Logo','restate-api'),
    'options'   => array(
        'modal_title'   => esc_html__('Add Logo','restate-api'),
        'button'        => esc_html__('Add Logo','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'limit',
            'options' => array(
                'min' => 0,
                'max' => 1
            )
        )
    )
));

piklist('field', array(
    'type'      => 'file',
    'field'     => 'real_estate_setting_secundary_logo',
    'label'     => esc_html__('Secundary Logo','restate-api'),
    'options'   => array(
        'modal_title'   => esc_html__('Add Logo','restate-api'),
        'button'        => esc_html__('Add Logo','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'limit',
            'options' => array(
                'min' => 0,
                'max' => 1
            )
        )
    )
));

piklist('field', array(
    'type'      => 'radio',
    'label'     => esc_html__('Show Pop-up', 'restate-api'),
    'field'     => 'real_estate_setting_show_popup',
    'value'     => 'FALSE',
    'choices'   => array(
        'TRUE'  => esc_html__('Yes', 'restate-api'),
        'FALSE'  => esc_html__('No', 'restate-api')
    )
));

piklist('field', array(
    'type'      => 'file',
    'field'     => 'real_estate_setting_popup_image',
    'label'     => esc_html__('Pop-up image','restate-api'),
    'options'   => array(
        'modal_title'   => esc_html__('Add Pop-up','restate-api'),
        'button'        => esc_html__('Add Pop-up','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'limit',
            'options' => array(
                'min' => 0,
                'max' => 1
            )
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_popup_image_url',
    'label' => esc_html__('Pop-up URL','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the Pop-up URL','restate-api')
    )
));

piklist('field', array(
    'type'      => 'radio',
    'label'     => esc_html__('Show Promotion', 'restate-api'),
    'field'     => 'real_estate_setting_show_promotion',
    'value'     => 'FALSE',
    'choices'   => array(
        'TRUE'  => esc_html__('Yes', 'restate-api'),
        'FALSE'  => esc_html__('No', 'restate-api')
    )
));

piklist('field', array(
    'type'      => 'file',
    'field'     => 'real_estate_setting_promotion_image',
    'label'     => esc_html__('Promotion image','restate-api'),
    'options'   => array(
        'modal_title'   => esc_html__('Add promotion','restate-api'),
        'button'        => esc_html__('Add promotion','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'limit',
            'options' => array(
                'min' => 0,
                'max' => 1
            )
        )
    )
));

piklist('field', array(
    'type'      => 'file',
    'field'     => 'real_estate_setting_blog_banner_image',
    'label'     => esc_html__('Blog Banner image','restate-api'),
    'options'   => array(
        'modal_title'   => esc_html__('Add Image','restate-api'),
        'button'        => esc_html__('Add Image','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'limit',
            'options' => array(
                'min' => 0,
                'max' => 1
            )
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_promotional_video',
    'label' => esc_html__('Promotional video URL','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the promotional video URL','restate-api')
    )
));


piklist('field', array(
    'type'      => 'textarea',
    'field'     => 'real_estate_setting_main_description',
    'label'     => esc_html__('Agency Description','restate-api'),
    'attributes' => array(
        'rows' => 5,
        'cols' => 50,
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the agency description', 'restate-api')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_main_address',
    'label' => esc_html__('Address','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the agency address','restate-api')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_main_postal_code',
    'label' => esc_html__('Postal Code', 'restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the agency postal code','restate-api')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_main_city',
    'label' => esc_html__('City', 'restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the agency city','restate-api')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_main_country',
    'label' => esc_html__('Country', 'restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the agency country','restate-api')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_main_email',
    'label' => esc_html__('Email', 'restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the agency email','restate-api')
    )
));

piklist('field', array(
    'type' => 'tel',
    'field' => 'real_estate_setting_main_phone',
    'label' => esc_html__('Phone', 'restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the agency phone','restate-api')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_main_recaptcha_site_key',
    'label' => esc_html__('reCAPTCHA Site Key','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the reCAPTCHA site key', 'restate-api')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_main_recaptcha_secret_key',
    'label' => esc_html__('reCAPTCHA Secret Key', 'restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the reCAPTCHA secret key', 'restate-api')
    )
));

piklist('field', array(
    'type' => 'text',
    'description' => esc_html__('If you don\'t have, get one here: ','restate-api').'<a href="https://developers.google.com/" target="_blank">Google Developers</a>',
    'field' => 'real_estate_setting_main_google_maps_api_key',
    'label' => esc_html__('Google Maps API Key','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the Google Maps API key','restate-api')
    )
));