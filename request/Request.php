<?php

namespace ESC\request;

use ESC\core\sorter\ISorter;

class Request
{
    const METHOD_GET = 'GET';
    const METHOD_PUT = 'PUT';
    const METHOD_POST = 'POST';
    const METHOD_DELETE = 'DELETE';

    const RESPONSE_TYPE_RAW = 1;
    const RESPONSE_TYPE_SINGLE = 2;
    const RESPONSE_TYPE_LIST = 3;

    private $host = 'https://esi.tech.ccp.is/latest';
    protected $url;
    protected $type = 'GET';
    protected $data = [];
    protected $responseType = self::RESPONSE_TYPE_RAW;
    protected $responseInstanceType;

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
        switch ($this->responseType) {
            case self::RESPONSE_TYPE_SINGLE:
                $instance = $this->responseInstanceType;
                return new $instance($data);
                break;
            case self::RESPONSE_TYPE_LIST:
                return $this->responseList($data, $this->responseInstanceType);
                break;
            default:
                return $data;
        }
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
