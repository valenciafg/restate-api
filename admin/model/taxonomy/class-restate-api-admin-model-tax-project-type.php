<?php 

class Restate_Api_Admin_Model_Tax_Project_Type {
    public function __construct() {

    }
    /**
	 * Creates a new custom taxonomy
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_taxonomy()
	 */
    public function register() {
        $name = "res_project_type";
        $labels = array(
			'name'                       => esc_html__( 'Types', 'Taxonomy General Name', 'restate-api' ),
			'singular_name'              => esc_html__( 'Type', 'Taxonomy Singular Name', 'restate-api' ),
			'menu_name'                  => esc_html__( 'Types', 'restate-api' ),
			'all_items'                  => esc_html__( 'All Types', 'restate-api' ),
			'parent_item'                => esc_html__( 'Parent Type', 'restate-api' ),
			'parent_item_colon'          => esc_html__( 'Parent Type:', 'restate-api' ),
			'new_item_name'              => esc_html__( 'New Type Name', 'restate-api' ),
			'add_new_item'               => esc_html__( 'Add New Type', 'restate-api' ),
			'edit_item'                  => esc_html__( 'Edit Type', 'restate-api' ),
			'update_item'                => esc_html__( 'Update Type', 'restate-api' ),
			'view_item'                  => esc_html__( 'View Type', 'restate-api' ),
			'separate_items_with_commas' => esc_html__( 'Separate Types with commas', 'restate-api' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Types', 'restate-api' ),
			'choose_from_most_used'      => esc_html__( 'Choose from the most used', 'restate-api' ),
			'popular_items'              => esc_html__( 'Popular Types', 'restate-api' ),
			'search_items'               => esc_html__( 'Search Types', 'restate-api' ),
			'not_found'                  => esc_html__( 'Not Found', 'restate-api' ),
			'items_list'                 => esc_html__( 'Types list', 'restate-api' ),
			'items_list_navigation'      => esc_html__( 'Types list navigation', 'restate-api' ),
		);
		$rewrite = array(
			'slug'                       => $name,
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
            'show_in_rest'               => true,
			'show_tagcloud'              => true,
            'query_var'                  => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( $name, array( 'attachment', 'res_project' ), $args );
    }
}