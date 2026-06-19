<?php

class WPAI_Provider_Factory {

    public static function make() {

        $settings = WPAI_Settings::get();
    
        switch ($settings['provider']) {

            case 'openai':
                return new WPAI_OpenAI_Provider();

            case 'claude':
                return new WPAI_Claude_Provider();

            default:
                return new WPAI_Gemini_Provider();
        }
    }
}