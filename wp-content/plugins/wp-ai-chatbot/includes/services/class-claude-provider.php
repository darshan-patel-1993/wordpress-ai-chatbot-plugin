<?php

if (!defined('ABSPATH')) {
    exit;
}

class WPAI_Claude_Provider extends WPAI_AI_Provider {

    public function generate_response($message) {

        $settings = WPAI_Settings::get();

        $response = wp_remote_post(
            $settings['api_url'],
            [
                'headers' => [
                    'x-api-key' => $settings['api_key'],
                    'anthropic-version' => '2023-06-01',
                    'Content-Type' => 'application/json'
                ],
                'body' => wp_json_encode([
                    'model' => $settings['model'],
                    'max_tokens' => 1024,
                    'messages' => [
                        [
                            'role' => 'user',
                            'content' => $message
                        ]
                    ]
                ])
            ]
        );

        return $response;
    }
}