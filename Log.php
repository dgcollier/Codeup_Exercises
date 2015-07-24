<?php

class Log
{
    public $filename;
    public $handle;

    function logMessage($logLevel, $message)
    {
        date_default_timezone_set('America/Chicago');
        $date = date('Y-m-d');
        $time = date('H:i:s');

        $handle = fopen($this->filename, 'a');
        $logLevel = strtoupper($logLevel);
        $message = strtoupper($message);
        fwrite($handle, "$date $time [{$logLevel}] $message" . PHP_EOL);
        fclose($handle);

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