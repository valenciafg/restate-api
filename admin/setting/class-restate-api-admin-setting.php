<?php

class Restate_Api_Admin_Setting {
    public function __construct() {}

    /**
    * sub_menu define where to put it in the admin menu (wordpress left sidebar), for more information please visit:
    * https://codex.wordpress.org/Administration_Menus
    * https://developer.wordpress.org/reference/functions/add_submenu_page/
    * examples:
    * Dashboard: ‘index.php’
    * Posts: ‘edit.php’
    * Media: ‘upload.php’
    * Pages: ‘edit.php?post_type=page’
    * Comments: ‘edit-comments.php’
    * Custom Post Types: ‘edit.php?post_type=your_post_type’
    * Appearance: ‘themes.php’
    * Plugins: ‘plugins.php’
    * Users: ‘users.php’
    * Tools: ‘tools.php’
    * Settings: ‘options-general.php’
    * Network Settings: ‘settings.php’
    **/
    public function register_default_setting_page($pages){
        $pages[] = array(
            'page_title'    => esc_html__('Real Estate Options','restate-api'),
            'menu_title'    => esc_html__('Real Estate Options', 'restate-api'),
            'capability'    => 'manage_options',
            'sub_menu'      => 'options-general.php',
            'menu_slug'     => 'real-estate-api-settings',
            'setting'       => 'real_estate_setting',
            'menu_icon'     => 'dashicons-editor-kitchensink',
            'page_icon'     => 'dashicons-editor-kitchensink',
            'single_line'   => false,
            'save_text'     => esc_html__('Save options','restate-api'),
        );
        return $pages;
    }
}