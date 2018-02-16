<?php

namespace ESC\core;
use ESC\core\logger\ILoggerTransport;
use ESC\core\logger\Logger;
use ESC\core\logger\LoggerFileTransport;

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

    private $logger;

    public function __call($name, $arguments)
    {
        $this->{$name} = $arguments[0];
        return $this;
    }

    public function send($url)
    {
        $this->getLogger()->log('Sending request. URL: ' . $url);

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
            $this->getLogger()->log('Data: ' . print_r($this->data, true));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data);
        }

        if ($this->header) {
            $this->getLogger()->log('Headers: ' . print_r($this->header, true));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $this->header);
        }

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            $this->getLogger()->log('Curl error #' . curl_errno($ch) . ': ' . curl_error($ch), ILoggerTransport::LEVEL_ERROR);
            return null;
        }

        $this->getLogger()->log("Response: {$result}");
        $data = json_decode($result);

        if (isset($data->error)) {
            throw new \Exception($data->error, 500);
        }

        return $data;
    }

    private function getLogger()
    {
        if (is_null($this->logger)) {
            $this->logger = new Logger(new LoggerFileTransport('/var/log/esi/'));
        }

        return $this->logger;
    }
}
