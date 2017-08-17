<?php

namespace ESC;

class ESI
{
    const PARAM_HOST_NAME = 'host_name';
    const PARAM_SSO_REDIRECT_URI = 'sso_oauth_redirect_url';
    const PARAM_CLIENT_ID = 'sso_oauth_redirect_url';

    private static $_instance;
    public $params;

    private function __construct()
    {
        $params = include __DIR__ . '/core/params.php';
        $this->params = $params;
    }

    public function __get($name)
    {
        if (isset($this->{$name})) {
            return $this->{$name};
        } elseif (isset($this->params['components'][$name])) {
            $component = $this->params['components'][$name];
            $this->{$name} = new $component;
            return $this->{$name};
        }
        return null;
    }

    private function __sleep() {}
    private function __clone() {}

    public static function app()
    {
        if (!static::$_instance) {
            static::$_instance = new static();
        }
        return static::$_instance;
    }
}
