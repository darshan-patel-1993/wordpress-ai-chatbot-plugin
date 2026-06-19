<?php

if (!defined('ABSPATH')) {
    exit;
}

function wpai_get_settings() {

    return get_option(
        'wp_ai_chatbot_settings',
        []
    );
}