<?php

class Log
{
    public $filename;
    public $handle;
    public $date;
    public $time

    function __construct($prefix = 'log')
    {
        date_default_timezone_set('America/Chicago');
        $this->date = date('Y-m-d');
        // $time = date('H:i:s');

        $this->filename = 'txt/' . $prefix . '-' . $this->date . '.txt';
        $this->handle = fopen($this->filename, 'a');
    }

    function __destruct()
    {
        fclose($handle);
    }

    function logMessage($logLevel, $message)
    {
        date_default_timezone_set('America/Chicago');
        $date = date('Y-m-d');
        $time = date('H:i:s');

        $logLevel = strtoupper($logLevel);
        $message = strtoupper($message);
        fwrite($handle, "$date $time [{$logLevel}] $message" . PHP_EOL);

        return print_r("Messaged logged." . PHP_EOL);
    }

    function logInfo($message)
    {
        $this->logMessage("INFO", $message);   
    }

    function logError ($message) 
    {
        $this->logMessage("ERROR", $message);
    }
}