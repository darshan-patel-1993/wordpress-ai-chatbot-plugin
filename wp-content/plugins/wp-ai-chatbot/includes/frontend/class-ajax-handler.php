<?php
class WPAI_Ajax_Handler {

    public function __construct() {

        add_action(
            'wp_ajax_wpai_chat',
            [$this, 'chat']
        );

        add_action(
            'wp_ajax_nopriv_wpai_chat',
            [$this, 'chat']
        );
    }

    public function chat() {

        check_ajax_referer(
            'wpai_nonce',
            'nonce'
        );

        $message = sanitize_text_field(
            $_POST['message']
        );
       
$provider =  WPAI_Provider_Factory::make();

        $response =
            $provider->generate_response(
                $message
            );
        wp_send_json_success(
            $response
        );
    }
}