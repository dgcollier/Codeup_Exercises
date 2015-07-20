<?php

function logMessage($logLevel, $message)
{
    date_default_timezone_set('America/Chicago');
    $date = date('Y-m-d');
    $time = date('H:i:s');

    $handle = fopen('txt/log-' . $date . '.txt', 'a');
    $logLevel = strtoupper($logLevel);
    $message = strtoupper($message);
    fwrite($handle, "$date $time [{$logLevel}] $message" . PHP_EOL);
    fclose($handle);

    return print_r("Messaged logged." . PHP_EOL);
}

function logInfo ($message) 
{
    logMessage("INFO", $message);
}

function logError ($message) 
{
    logMessage("ERROR", $message);
}

logInfo("This is the info message.");
logError("This is the error message.");
