<?php

namespace ESC\core;

use ESC\ESI;

class OAuth
{
    private $_clientId;
    private $_host;

    public function __construct()
    {
        $params = ESI::app()->params;
        $this->_host = $params['dev_mode']
            ? 'https://login.eveonline.com/oauth'
            : 'https://login.eveonline.com/oauth';
        $this->_clientId = $params['client_id'];
    }

    public function auth()
    {
        $params = ESI::app()->params;

        $url = $this->_host . '/authorize?' . http_build_query([
            'response_type' => 'code',
            'redirect_uri' => $params['sso_oauth_redirect_url'],
            'client_id' => $this->_clientId,
            'scope' => 'characterContactsRead'
        ]);

        return $url;
    }

    public function getToken($code)
    {
        $params = ESI::app()->params;
        $url = $this->_host . '/token';
        $base64 = base64_encode("{$this->_clientId}:{$params['secret_key']}");

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'grant_type' => 'authorization_code',
            'code' => $code
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Basic {$base64}"
        ]);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'CURL_ERROR';
        }

        return curl_errno($ch) ? null : $result;
    }
}
