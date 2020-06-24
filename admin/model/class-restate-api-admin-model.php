<?php

class Restate_Api_Admin_Model {
    public function __construct() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'model/post-type/class-restate-api-admin-model-cpt-project.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'model/taxonomy/class-restate-api-admin-model-tax-location.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'model/taxonomy/class-restate-api-admin-model-tax-common-area.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'model/taxonomy/class-restate-api-admin-model-tax-stage.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'model/taxonomy/class-restate-api-admin-model-tax-project-type.php';
    }

    public static function register_cpt() {
        $ctp_project = new Restate_Api_Admin_Model_Cpt_Project();
        $ctp_project->register();

        $tax_location = new Restate_Api_Admin_Model_Tax_Location();
        $tax_location->register();
        $tax_common_area = new Restate_Api_Admin_Model_Tax_Commmon_Area();
        $tax_common_area->register();
        $tax_stage = new Restate_Api_Admin_Model_Tax_Stage();
        $tax_stage->register();
        $tax_project_type = new Restate_Api_Admin_Model_Tax_Project_Type();
        $tax_project_type->register();
    }
}
