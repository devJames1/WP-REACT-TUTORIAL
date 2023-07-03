<?php
/**
 * This file will create admin menu page
 */

class WPRT_Create_Admin_Page {
    public function __construct(){
        add_action('admin_menu', [$this, 'create_admin_menu']);
    }

    public function create_admin_menu(){
        $capability = 'manage_options';
        $slug = 'wprt-settings';

        add_menu_page(
            __('WP React Tutorial', 'wp-react-tutorial'),
            __('WP React Tutorial', 'wp-react-kickoff'),
            $capability,
            $slug,
            [$this, 'menu_page_template'],
            'dashicons-buddicon-replies'
        );
    }

    public function menu_page_template() {
        echo '<div class="wrap"><div id="wprt-admin-app"></div></div>';
    }

}

new WPRT_Create_Admin_Page();