<?php

if (!defined('ABSPATH')) {
    exit;
}

function wpai_sanitize_message($message) {

    return sanitize_text_field(
        wp_unslash($message)
    );
}