<?php

namespace ESC\core;

use ESC\ESI;
use ESC\request\Request;

class RESTful
{
    public function send(Request $request)
    {
        /**
         * @var $cURL cURL
         */
        $cURL = ESI::app()->curl;
        return $cURL->method($request->getType())
            ->send($request->getUrl());
    }
}
