<?php

namespace ESC\request;

class Request
{
    private $host = 'https://esi.tech.ccp.is/latest';
    protected $url;
    protected $type = 'GET';

    public function getUrl()
    {
        return "{$this->host}{$this->url}";
    }

    public function getType()
    {
        return $this->type;
    }
}
