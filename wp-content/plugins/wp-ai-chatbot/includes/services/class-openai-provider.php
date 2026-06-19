<?php

class WPAI_OpenAI_Provider extends WPAI_AI_Provider {

    public function generate_response($message) {

        $settings = WPAI_Settings::get();

        $body = [
            'model' => $settings['model'],
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $message
                ]
            ]
        ];

        return wp_remote_post(
            $settings['api_url'],
            [
                'headers' => [
                    'Authorization' =>
                        'Bearer ' . $settings['api_key'],
                    'Content-Type' => 'application/json'
                ],
                'body' => wp_json_encode($body)
            ]
        );
    }
}