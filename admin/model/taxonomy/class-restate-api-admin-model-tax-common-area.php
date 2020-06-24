<?php 

class Restate_Api_Admin_Model_Tax_Commmon_Area {
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
        $name = "res_common_area";
        $labels = array(
			'name'                       => esc_html__( 'Common Areas', 'Taxonomy General Name', 'restate-api' ),
			'singular_name'              => esc_html__( 'Common Area', 'Taxonomy Singular Name', 'restate-api' ),
			'menu_name'                  => esc_html__( 'Common Areas', 'restate-api' ),
			'all_items'                  => esc_html__( 'All Common Areas', 'restate-api' ),
			'parent_item'                => esc_html__( 'Parent Common Area', 'restate-api' ),
			'parent_item_colon'          => esc_html__( 'Parent Common Area:', 'restate-api' ),
			'new_item_name'              => esc_html__( 'New Common Area Name', 'restate-api' ),
			'add_new_item'               => esc_html__( 'Add New Common Area', 'restate-api' ),
			'edit_item'                  => esc_html__( 'Edit Common Area', 'restate-api' ),
			'update_item'                => esc_html__( 'Update Common Area', 'restate-api' ),
			'view_item'                  => esc_html__( 'View Common Area', 'restate-api' ),
			'separate_items_with_commas' => esc_html__( 'Separate Common Areas with commas', 'restate-api' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Common Areas', 'restate-api' ),
			'choose_from_most_used'      => esc_html__( 'Choose from the most used', 'restate-api' ),
			'popular_items'              => esc_html__( 'Popular Common Areas', 'restate-api' ),
			'search_items'               => esc_html__( 'Search Common Areas', 'restate-api' ),
			'not_found'                  => esc_html__( 'Not Found', 'restate-api' ),
			'items_list'                 => esc_html__( 'Common Areas list', 'restate-api' ),
			'items_list_navigation'      => esc_html__( 'Common Areas list navigation', 'restate-api' ),
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