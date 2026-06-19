<?php

/**
 * Plugin Name: WP AI Chatbot
 * Description: AI Customer Support Chatbot
 * Version: 1.0.0
 * Author: Darshan patel
 * Author URI: https://github.com/darshan-patel-1993
 */

defined('ABSPATH') || exit;

define('WPAI_VERSION', '1.0.0');
define('WPAI_PATH', plugin_dir_path(__FILE__));
define('WPAI_URL', plugin_dir_url(__FILE__));

require_once WPAI_PATH . 'includes/class-loader.php';

function wpai_chatbot_init() {
    return new WPAI_Loader();
}

wpai_chatbot_init();