<?php

defined('ABSPATH') || exit;

require_once WPAI_PATH . 'includes/admin/class-admin.php';
require_once WPAI_PATH . 'includes/frontend/class-frontend.php';

/*|--------------------------------------------------------------------------
| Services
|--------------------------------------------------------------------------
*/
require_once WPAI_PATH . 'includes/services/class-ai-provider.php';
require_once WPAI_PATH . 'includes/services/class-gemini-provider.php';
require_once WPAI_PATH . 'includes/services/class-openai-provider.php';
require_once WPAI_PATH . 'includes/services/class-claude-provider.php';
require_once WPAI_PATH . 'includes/services/provider-factory.php';

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/
require_once WPAI_PATH . 'includes/frontend/class-chat-widget.php';
require_once WPAI_PATH . 'includes/frontend/class-ajax-handler.php';
require_once WPAI_PATH . 'includes/frontend/class-frontend.php';

class WPAI_Loader {

    public function __construct() {

        new WPAI_Admin();

        new WPAI_Frontend();
    }
}