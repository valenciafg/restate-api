<?php 

class Restate_Api_Admin_Model_Cpt_Project {
    public function __construct() {

    }
    /**
	 * Creates a new custom post type
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */
    public function register() {
        $name = "res_project";
        $labels = array(
            'name'                  => esc_html__( 'Projects', 'Post Type General Name', 'restate-api' ),
            'singular_name'         => esc_html__( 'Project', 'Post Type Singular Name', 'restate-api' ),
            'menu_name'             => esc_html__( 'Projects', 'restate-api' ),
            'name_admin_bar'        => esc_html__( 'Projects', 'restate-api' ),
            'parent_item_colon'     => esc_html__( 'Parent Project:', 'restate-api' ),
            'all_items'             => esc_html__( 'All Projects', 'restate-api' ),
            'add_new_item'          => esc_html__( 'Add New Project', 'restate-api' ),
            'add_new'               => esc_html__( 'Add New', 'restate-api' ),
            'new_item'              => esc_html__( 'New Project', 'restate-api' ),
            'edit_item'             => esc_html__( 'Edit Project', 'restate-api' ),
            'update_item'           => esc_html__( 'Update Project', 'restate-api' ),
            'view_item'             => esc_html__( 'View Project', 'restate-api' ),
            'search_items'          => esc_html__( 'Search Project', 'restate-api' ),
            'not_found'             => esc_html__( 'Not found', 'restate-api' ),
            'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'restate-api' ),
            'items_list'            => esc_html__( 'Projects list', 'restate-api' ),
            'items_list_navigation' => esc_html__( 'Projects list navigation', 'restate-api' ),
            'filter_items_list'     => esc_html__( 'Filter Projects list', 'restate-api' ),
        );
        $rewrite = array(
            'slug'                  => 'res_project',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $options = array(
            'label'                 => esc_html__( 'Project', 'restate-api' ),
            'description'           => esc_html__( 'List of Projects', 'restate-api' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'excerpt', 'thumbnail' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 8,
            'menu_icon'             => 'dashicons-building',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'show_in_rest'          => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'page',
        );
        register_post_type( $name, $options );
    }
}