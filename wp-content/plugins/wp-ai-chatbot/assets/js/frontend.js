jQuery(function ($) {

    $('#wpai-send').on('click', function () {

        let message = $('#wpai-message').val();

        $.post(
            wpai.ajax_url,
            {
                action: 'wpai_chat',
                nonce: wpai.nonce,
                message: message
            },
            function (response) {

                console.log(response);
            }
        );
    });
});