<?php
class Log
{
    public $fileName;
    public $handle;
    public function __construct($prefix = 'log')
    {
        $this->fileName = $prefix . "-" . date("Y-m-d") . ".log";
        $this->handle = fopen($this->fileName, 'a');
    }
    public function logMessage($logLevel, $message)
    {
        $log =  date("Y-m-d H:i:s") . " [$logLevel] $message";
        fwrite($this->handle, $log . PHP_EOL);
        // fclose($this->handle);
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