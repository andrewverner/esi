<?php

namespace ESC\request;

use ESC\response\struct\Struct;

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

    protected function responseList($data, $instance)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $item) {
            $list[] = new $instance($item);
        }

        return $list;
    }
}
