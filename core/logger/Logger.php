<?php

namespace ESC\core\logger;

class Logger
{
    private $transport;

    public function __construct(ILoggerTransport $transport)
    {
        $this->transport = $transport;
    }

    public function log($message, $level = ILoggerTransport::LEVEL_INFO)
    {
        $this->transport->log($message, $level);
    }
}
