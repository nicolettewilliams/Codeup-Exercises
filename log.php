<?php

class Log 
{
    private $filename;
    private $handle;
    public function __construct($prefix = 'log')
    {
        $filename = "{$prefix}-" . date('Y-m-d') . '.log';
        $this->setFilename($filename);
        $this->handle = fopen($this->filename, 'a');
    }
    private function setFilename($filename)
    {
        if (!is_string($filename)){
            echo "Filename must be a string!";
            die();
        }
        $this->filename = $filename;
    }
    public function logMessage($level, $message) 
    {
        $logEntry = PHP_EOL . date('Y-m-d H:i:s') . " [{$level}] {$message}";
        fwrite($this->handle, $logEntry);
    }
    public function info($message) 
    {
        $this->logMessage('INFO', $message);
    }
    public function error($message)
    {
        $this->logMessage('ERROR', $message);
    }
    public function __destruct()
    {
        fclose($this->handle);
    }
}