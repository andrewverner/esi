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

    public function auth(array $scope = [])
    {
        $params = ESI::app()->params;

        $url = $this->_host . '/authorize?' . http_build_query([
            'response_type' => 'code',
            'redirect_uri' => $params['sso_oauth_redirect_url'],
            'client_id' => $this->_clientId,
            'scope' => implode(' ', $scope)
        ]);

        return $url;
    }

    public function getToken($code)
    {
        /**
         * @var $cURL cURL
         */
        $cURL = ESI::app()->curl;
        $params = ESI::app()->params;
        $url = $this->_host . '/token';
        $base64 = base64_encode("{$this->_clientId}:{$params['secret_key']}");

        return $cURL->data([
            'grant_type' => 'authorization_code',
            'code' => $code
        ])->header([
            "Authorization: Basic {$base64}"
        ])->send($url);
    }

    public function refreshToken($refreshToken)
    {
        /**
         * @var $cURL cURL
         */
        $cURL = ESI::app()->curl;
        $params = ESI::app()->params;
        $url = $this->_host . '/token';
        $base64 = base64_encode("{$this->_clientId}:{$params['secret_key']}");

        return $cURL->data([
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken
        ])->header([
            "Authorization: Basic {$base64}"
        ])->send($url);
    }

    public function getCharacterID($accessToken)
    {
        $cURL = ESI::app()->curl;
        $url = $this->_host . '/verify';

        return $cURL->method(cURL::METHOD_GET)->header([
            "Authorization: Bearer {$accessToken}"
        ])->send($url);
    }

    private function scopes()
    {
        return [
            ''
        ];
    }
}
