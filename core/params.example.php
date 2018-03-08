<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 12:49
 */

return [
    'components' => [
        'curl' => 'ESC\\core\\cURL',
        'oauth' => 'ESC\\core\\OAuth',
        'rest' => 'ESC\\core\\RESTful'
    ],
    //APP SSO redirect uri
    'sso_oauth_redirect_url' => '',
    //APP secret key
    'secret_key' => '',
    //APP client ID
    'client_id' => ''
];