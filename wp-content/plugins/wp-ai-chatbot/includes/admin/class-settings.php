<?php

class WPAI_Settings {

    const OPTION_NAME = 'wp_ai_chatbot_settings';

    public static function get() {

        return wp_parse_args(
            get_option(self::OPTION_NAME, []),
            [
                'provider' => 'gemini',
                'api_key' => '',
                'api_url' => '',
                'model' => '',
                'system_prompt' => ''
            ]
        );
    }

    public static function save($data) {

        update_option(
            self::OPTION_NAME,
            $data
        );
    }
}