<?php

namespace ESC\core;

/**
 * Class cURL
 * @package ESC\core
 * @method method($method)
 * @method data($data)
 * @method header($header)
 */

class cURL
{
    const METHOD_GET = 'GET';
    const METHOD_PUT = 'PUT';
    const METHOD_POST = 'POST';
    const METHOD_DELETE = 'DELETE';

    private $method = self::METHOD_POST;
    private $data;
    private $header;

    public function __call($name, $arguments)
    {
        $this->{$name} = $arguments[0];
        return $this;
    }

    public function send($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if (!$this->method) {
            curl_setopt($ch, CURLOPT_POST, false);
        } else {
            curl_setopt(
                $ch,
                $this->method == $this::METHOD_POST ? CURLOPT_POST : CURLOPT_CUSTOMREQUEST,
                $this->method == $this::METHOD_POST ? true : $this->method
            );
        }

        if ($this->data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data);
        }

        if ($this->header) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $this->header);
        }

        $result = curl_exec($ch);
        return curl_errno($ch) ? null : json_decode($result);
    }
}
