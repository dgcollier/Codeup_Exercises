<?php

class Log
{
    public $filename;
    public $handle;
    // public $timezone = date_default_timezone_set('America/Chicago');
    // public $date = date('Y-m-d');
    // public $time = date('H:i:s');

    public function __construct($prefix = 'log')
    {
        $date = date('Y-m-d');
        $this->filename = 'txt/' . $prefix . '-' . $date . '.txt';
        $this->handle = fopen($this->filename, 'a');
    }

    public function __destruct()
    {
        fclose($this->handle);
    }

    public function logMessage($logLevel, $message)
    {
        $time = date('H:i:s');
        $date = date('Y-m-d');
        $logLevel = strtoupper($logLevel);
        $message = strtoupper($message);
        fwrite($this->handle, "$date $time [{$logLevel}] $message" . PHP_EOL);

        return print_r("Messaged logged." . PHP_EOL);
    }

    public function logInfo($message)
    {
        $this->logMessage("INFO", $message);   
    }

    public function logError ($message) 
    {
        $this->logMessage("ERROR", $message);
    }
}