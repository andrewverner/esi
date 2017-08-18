<?php

namespace ESC\core;

use ESC\ESI;
use ESC\request\Request;

class RESTFul
{
    private $_type;

    public function get()
    {
        $this->_type = cURL::METHOD_GET;
        return $this;
    }

    public function post()
    {
        $this->_type = cURL::METHOD_POST;
        return $this;
    }

    public function put()
    {
        $this->_type = cURL::METHOD_PUT;
        return $this;
    }

    public function delete()
    {
        $this->_type = cURL::METHOD_DELETE;
        return $this;
    }

    public function send(Request $request)
    {
        /**
         * @var $cURL cURL
         */
        $cURL = ESI::app()->curl;
        return $cURL->method($this->_type)
            ->send($request->getUrl());
    }
}
