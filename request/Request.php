<?php

namespace ESC\request;

class Request
{
    const METHOD_GET = 'GET';
    const METHOD_PUT = 'PUT';
    const METHOD_POST = 'POST';
    const METHOD_DELETE = 'DELETE';

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

    public function response($data)
    {
        return $data;
    }
}
