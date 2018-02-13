<?php

namespace ESC\request;

use ESC\core\sorter\ISorter;

class Request
{
    const METHOD_GET = 'GET';
    const METHOD_PUT = 'PUT';
    const METHOD_POST = 'POST';
    const METHOD_DELETE = 'DELETE';

    private $host = 'https://esi.tech.ccp.is/latest';
    protected $url;
    protected $type = 'GET';
    protected $data = [];

    /**
     * @var ISorter
     */
    protected $sorter = null;

    public function getUrl()
    {
        return "{$this->host}{$this->url}";
    }

    public function getType()
    {
        return $this->type;
    }

    public function getData()
    {
        return $this->data;
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

        return isset($this->sorter) ? $this->sorter->sort($list) : $list;
    }
}
