<?php

class Log{
    protected $filename;
    protected $handle;
    public function __construct($prefix = 'log')
     {
        $this->setFilename($prefix);
        //pointer assigned to $handle
        $this->handle = fopen($this->getFilename(), 'a');
     }

    protected function setFilename($prefix)
    {
        $date = date("Y-m-d");
        if(is_string($prefix)){
        $this->filename = trim($prefix) . "-{$date}.log";
        }else{
            die();
        }
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function logMessage($logLevel, $message)
    {
        $date = date("Y-m-d");
        $time = date("h:i:sa");
        $log = "$date $time";
        fwrite($this->handle, PHP_EOL . "$log $logLevel: $message");
    }

    public function info($message){
        $this->logMessage("INFO", $message);
    }

    public function error($message){
        $this->logMessage("ERROR", $message);
    }
    
    public function __destruct()
    {
        if(isset($this->handle)){
            fclose($this->handle);
        }
    }
}