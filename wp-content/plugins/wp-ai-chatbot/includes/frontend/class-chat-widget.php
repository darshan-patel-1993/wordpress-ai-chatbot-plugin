<?php

if (!defined('ABSPATH')) {
    exit;
}

class WPAI_Chat_Widget {

    public function __construct() {

        add_action(
            'wp_footer',
            [$this, 'render']
        );
    }

    public function render() {

        include WPAI_PATH .
        'templates/chatbot.php';
    }
}