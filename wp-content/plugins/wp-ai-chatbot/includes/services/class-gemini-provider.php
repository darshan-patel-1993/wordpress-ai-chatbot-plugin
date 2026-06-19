<?php

class WPAI_Gemini_Provider extends WPAI_AI_Provider {

    public function generate_response($message) {

        $settings = WPAI_Settings::get();

        $body = [
            'contents' => [
                [
                    'parts' => [
                        [
                            'text' => $message
                        ]
                    ]
                ]
            ]
        ];

        $response = wp_remote_post(
            $settings['api_url'],
            [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'body' => wp_json_encode($body)
            ]
        );

        return $response;
    }
}