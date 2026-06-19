<?php

if (!defined('ABSPATH')) {
    exit;
}

class WPAI_Activator {

    public static function activate() {

        $default_settings = [
            'provider'      => 'gemini',
            'api_key'       => '',
            'api_url'       => '',
            'model'         => '',
            'system_prompt' => 'You are a helpful customer support assistant.'
        ];

        if (!get_option('wp_ai_chatbot_settings')) {
            add_option(
                'wp_ai_chatbot_settings',
                $default_settings
            );
        }
    }
}