<?php
/*
 Title: Real Estate Telephone Exchange
 Setting: real_estate_setting
 Tab: Telephone Exchange
 Flow: Real Estate Options Flow
 */

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_te_server',
    'label' => esc_html__('Server','restate-api')
));

piklist('field', array(
    'type' => 'number',
    'field' => 'real_estate_setting_te_port',
    'label' => esc_html__('Port','restate-api')
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_te_aor',
    'label' => esc_html__('SIP Address of Record (AOR)','restate-api'),
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_te_username',
    'label' => esc_html__('SIP Authorization Username','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Username','restate-api')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_te_password',
    'label' => esc_html__('SIP Authorization Password','restate-api'),
    'attributes' => array(
        'class' => 'regular-text',
        'placeholder' => esc_html__('Password','restate-api')
    )
));

piklist('field', array(
    'type' => 'number',
    'field' => 'real_estate_setting_te_extension',
    'label' => esc_html__('Main extension','restate-api')
));

piklist('field', array(
    'type' => 'text',
    'field' => 'real_estate_setting_te_help',
    'label' => esc_html__('Help text','restate-api')
));