<?php

namespace ESC\core\logger;

interface ILoggerTransport
{
    const LEVEL_INFO = 'INFO';
    const LEVEL_WARNING = 'WARNING';
    const LEVEL_ERROR = 'ERROR';
    const LEVEL_FATAL = 'FATAL';

    public function log($message, $level);
}
