<?php

namespace ESC\core\logger;

class LoggerFileTransport implements ILoggerTransport
{
    private $directory;

    public function __construct($logFolderPath = null)
    {
        $this->directory = $logFolderPath ?: __DIR__ . '/../../log/';
    }

    public function log($message, $level)
    {
        $filePath = $this->directory . (new \DateTime())->format('dmY') . '.log';
        if (!file_exists($filePath)) {
            try {
                mkdir($this->directory, 0777, true);
                file_put_contents($filePath, '');
            } catch (\Exception $exception) {

            }
        }

        try {
            $message = (new \DateTime())->format('Y.m.d H:i:s') . " [{$level}] {$message}" . PHP_EOL;
            file_put_contents($filePath, $message, FILE_APPEND);
        } catch (\Exception $exception) {

        }
    }
}
