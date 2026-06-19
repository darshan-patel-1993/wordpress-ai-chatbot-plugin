<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once WPAI_PATH . 'includes/admin/class-settings.php';

class WPAI_Admin {

    public function __construct() {

        add_action(
            'admin_menu',
            [$this, 'menu']
        );

        add_action(
            'admin_enqueue_scripts',
            [$this, 'assets']
        );
    }

    public function menu() {

        add_options_page(
            'WP AI Chatbot',
            'WP AI Chatbot',
            'manage_options',
            'wp-ai-chatbot',
            [$this, 'settings_page']
        );
    }

    public function assets() {

        wp_enqueue_style(
            'wpai-admin',
            WPAI_URL . 'assets/css/admin.css',
            [],
            WPAI_VERSION
        );

        wp_enqueue_script(
            'wpai-admin',
            WPAI_URL . 'assets/js/admin.js',
            ['jquery'],
            WPAI_VERSION,
            true
        );
    }

    public function settings_page() {

        include WPAI_PATH .
        'templates/settings-page.php';
    }
}