<?php 

class Restate_Api_Admin_Model_Tax_Stage {
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
        $name = "res_stage";
        $labels = array(
			'name'                       => esc_html__( 'Stages', 'Taxonomy General Name', 'restate-api' ),
			'singular_name'              => esc_html__( 'Stage', 'Taxonomy Singular Name', 'restate-api' ),
			'menu_name'                  => esc_html__( 'Stages', 'restate-api' ),
			'all_items'                  => esc_html__( 'All Stages', 'restate-api' ),
			'parent_item'                => esc_html__( 'Parent Stage', 'restate-api' ),
			'parent_item_colon'          => esc_html__( 'Parent Stage:', 'restate-api' ),
			'new_item_name'              => esc_html__( 'New Stage Name', 'restate-api' ),
			'add_new_item'               => esc_html__( 'Add New Stage', 'restate-api' ),
			'edit_item'                  => esc_html__( 'Edit Stage', 'restate-api' ),
			'update_item'                => esc_html__( 'Update Stage', 'restate-api' ),
			'view_item'                  => esc_html__( 'View Stage', 'restate-api' ),
			'separate_items_with_commas' => esc_html__( 'Separate Stages with commas', 'restate-api' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Stages', 'restate-api' ),
			'choose_from_most_used'      => esc_html__( 'Choose from the most used', 'restate-api' ),
			'popular_items'              => esc_html__( 'Popular Stages', 'restate-api' ),
			'search_items'               => esc_html__( 'Search Stages', 'restate-api' ),
			'not_found'                  => esc_html__( 'Not Found', 'restate-api' ),
			'items_list'                 => esc_html__( 'Stages list', 'restate-api' ),
			'items_list_navigation'      => esc_html__( 'Stages list navigation', 'restate-api' ),
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