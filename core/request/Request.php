<?php

namespace ESC\request;

class Request
{
    private $host = 'https://esi.tech.ccp.is/latest';
    protected $url;

    public function getUrl()
    {
        return $this->url;
    }
}
