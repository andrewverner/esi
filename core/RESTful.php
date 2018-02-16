<?php

namespace ESC\core;

use ESC\core\logger\Logger;
use ESC\core\logger\LoggerFileTransport;
use ESC\ESI;
use ESC\request\Request;

class RESTful
{
    private $logger;

    public function call(Request $request, array $headers = [])
    {
        $this->getLogger()->log('Call ' . get_class($request) . "[{$request->getType()}:{$request->getUrl()}]");

        /**
         * @var $cURL cURL
         */
        $cURL = ESI::app()->curl;
        $cURL->method($request->getType());
        if ($request->getType() == Request::METHOD_POST && !empty($request->getData())) {
            $cURL->data($request->getData());
            $headers[] = 'Content-Type: application/json';
        }
        if (!empty($headers)) {
            $cURL->header($headers);
        }
        $response = $cURL->send($request->getUrl());

        return $request->response($response);
    }

    public function authorizedCall(Request $request, $accessToken)
    {
        $headers = [
            "Authorization: Bearer {$accessToken}"
        ];

        return $this->call($request, $headers);
    }

    private function getLogger()
    {
        if (is_null($this->logger)) {
            $this->logger = new Logger(new LoggerFileTransport());
        }

        return $this->logger;
    }
}
