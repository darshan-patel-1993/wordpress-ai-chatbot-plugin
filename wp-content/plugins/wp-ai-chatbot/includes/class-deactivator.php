<?php

if (!defined('ABSPATH')) {
    exit;
}

class WPAI_Deactivator {

    public static function deactivate() {

        wp_clear_scheduled_hook(
            'wpai_cleanup_logs'
        );
    }
}