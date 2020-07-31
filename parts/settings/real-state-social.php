<?php
/*
 Title: Real Estate Social Media
 Setting: real_estate_setting
 Tab: Social Media
 Flow: Real Estate Options Flow
 */

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_social_whatsapp',
    'label' => esc_html__('Whatsapp Number','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Enter the real estate Whatsapp number','restate-api')
    )
));

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

$embed = array(
    'type'  => 'textarea',
    'field' => 'real_estate_setting_social_fb_embed',
    'columns'   => 10,
    'label'     => esc_html__('Facebook Post Code','restate-api')
);

piklist('field', array(
    'type'      => 'group',
    'field'     => 'real_estate_setting_social_fb_posts',
    'template'  => 'field',
    'add_more'  => true,
    'fields'    => array(
        $embed,
    )
));

$code = array(
    'type'  => 'number',
    'field' => 'real_estate_setting_social_post_code',
    'columns'   => 10,
    'label'     => esc_html__('Code','restate-api')
);

$type = array(
    'type'  => 'select',
    'field' => 'real_estate_setting_social_post_type',
    'columns'   => 10,
    'label'     => esc_html__('Type','restate-api'),
    'choices' => array(
        'masonry'   => esc_html__('Masonry','restate-api'),
        'timeline'  => esc_html__('Timeline','restate-api'),
        'feed'      => esc_html__('Feed','restate-api'),
        'carousel'  => esc_html__('Carousel','restate-api'),
        'grid'      => esc_html__('Grid','restate-api')
    )
);

piklist('field', array(
    'type'      => 'group',
    'field'     => 'real_estate_setting_social_posts',
    'template'  => 'field',
    'add_more'  => true,
    'fields'    => array(
        $code,
        $type
    )
));