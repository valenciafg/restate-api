<?php 

class Restate_Api_Admin_Model_Tax_Location {
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
        $name = "res_location";
        $labels = array(
			'name'                       => esc_html__( 'Locations', 'Taxonomy General Name', 'restate-api' ),
			'singular_name'              => esc_html__( 'Location', 'Taxonomy Singular Name', 'restate-api' ),
			'menu_name'                  => esc_html__( 'Locations', 'restate-api' ),
			'all_items'                  => esc_html__( 'All Locations', 'restate-api' ),
			'parent_item'                => esc_html__( 'Parent Location', 'restate-api' ),
			'parent_item_colon'          => esc_html__( 'Parent Location:', 'restate-api' ),
			'new_item_name'              => esc_html__( 'New Location Name', 'restate-api' ),
			'add_new_item'               => esc_html__( 'Add New Location', 'restate-api' ),
			'edit_item'                  => esc_html__( 'Edit Location', 'restate-api' ),
			'update_item'                => esc_html__( 'Update Location', 'restate-api' ),
			'view_item'                  => esc_html__( 'View Location', 'restate-api' ),
			'separate_items_with_commas' => esc_html__( 'Separate Locations with commas', 'restate-api' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Locations', 'restate-api' ),
			'choose_from_most_used'      => esc_html__( 'Choose from the most used', 'restate-api' ),
			'popular_items'              => esc_html__( 'Popular Locations', 'restate-api' ),
			'search_items'               => esc_html__( 'Search Locations', 'restate-api' ),
			'not_found'                  => esc_html__( 'Not Found', 'restate-api' ),
			'items_list'                 => esc_html__( 'Locations list', 'restate-api' ),
			'items_list_navigation'      => esc_html__( 'Locations list navigation', 'restate-api' ),
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