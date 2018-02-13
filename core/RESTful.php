<?php

namespace ESC\core;

use ESC\core\logger\Logger;
use ESC\core\logger\LoggerFileTransport;
use ESC\ESI;
use ESC\request\Request;

class RESTful
{
    private $logger;

    public function call(Request $request)
    {
        $this->getLogger()->log('Call ' . get_class($request) . "[{$request->getType()}:{$request->getUrl()}]");

        /**
         * @var $cURL cURL
         */
        $cURL = ESI::app()->curl;
        $cURL->method($request->getType());
        if ($request->getType() == Request::METHOD_POST && !empty($request->getData())) {
            $cURL->data($request->getData());
        }
        $response = $cURL->send($request->getUrl());

        return $request->response($response);
    }

    public function authorizedCall(Request $request, $accessToken)
    {
        $this->getLogger()->log('Authorized call ' . get_class($request) . "[{$request->getType()}:{$request->getUrl()}]");

        /**
         * @var $cURL cURL
         */
        $cURL = ESI::app()->curl;
        $response = $cURL->method($request->getType())
            ->header([
                "Authorization: Bearer {$accessToken}"
            ])
            ->send($request->getUrl());

        return $request->response($response);
    }

    private function getLogger()
    {
        if (is_null($this->logger)) {
            $this->logger = new Logger(new LoggerFileTransport());
        }

        return $this->logger;
    }
}
