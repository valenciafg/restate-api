<?php
/*
 Title: Real Estate Social Media
 Setting: real_estate_setting
 Tab: Social Media
 Flow: Real Estate Options Flow
 */

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_social_facebook',
    'label' => esc_html__('Facebook','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the real estate Facebook','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_social_twitter',
    'label' => esc_html__('Twitter','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the real estate Twitter','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_social_pinterest',
    'label' => esc_html__('Pinterest','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the real estate Pinterest','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_social_linkedin',
    'label' => esc_html__('LinkedIn','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the real estate LinkedIn','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_social_gplus',
    'label' => esc_html__('Google Plus','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the real estate Google Plus','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_social_skype',
    'label' => esc_html__('Skype','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the real estate Skype','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_social_instagram',
    'label' => esc_html__('Instagram','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the real estate Instagram','restate-api')
    ),
    'validate' => array(
        array(
            'type' => 'url'
        )
    )
));
