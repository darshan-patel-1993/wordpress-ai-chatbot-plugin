<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once WPAI_PATH . 'includes/frontend/class-chat-widget.php';
require_once WPAI_PATH . 'includes/frontend/class-ajax-handler.php';

class WPAI_Frontend {

    public function __construct() {

        new WPAI_Chat_Widget();

        new WPAI_Ajax_Handler();

        add_action(
            'wp_enqueue_scripts',
            [$this, 'assets']
        );
    }

    public function assets() {

        wp_enqueue_style(
            'wpai-frontend',
            WPAI_URL . 'assets/css/frontend.css',
            [],
            WPAI_VERSION
        );

        wp_enqueue_script(
            'wpai-frontend',
            WPAI_URL . 'assets/js/frontend.js',
            ['jquery'],
            WPAI_VERSION,
            true
        );

        wp_localize_script(
            'wpai-frontend',
            'wpai',
            [
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce'    => wp_create_nonce('wpai_nonce')
            ]
        );
    }
}