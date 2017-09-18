<?php

namespace ESC\core\logger;

class LoggerFileTransport implements ILoggerTransport
{
    public function log($message, $level)
    {
        $filePath = __DIR__ . '/../../log/' . (new \DateTime())->format('dmY') . '.log';
        if (!file_exists($filePath)) {
            try {
                mkdir(__DIR__ . '/../../log/', 0777, true);
                file_put_contents($filePath, '');
            } catch (\Exception $exception) {
                throw $exception;
            }
        }

        try {
            $message = (new \DateTime())->format('Y.m.d H:i:s') . " [{$level}] {$message}" . PHP_EOL;
            file_put_contents($filePath, $message, FILE_APPEND);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
