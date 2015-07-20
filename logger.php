<?php

function logMessage($logLevel, $message)
{
    // todo - complete this function
    date_default_timezone_set('America/Chicago');
    $date = date('Y-m-d');
    $time = date('h:i:s');
    $handle = fopen('txt/log-' . $date . '.txt', 'a');
    $logLevel = strtoupper($logLevel);
    $message = strtoupper($message);
    fwrite($handle, "$date $time [$logLevel] $message" . PHP_EOL);
    fclose($handle);
    return print_r("Messaged logged." . PHP_EOL);
}

function logInfo ($infoMessage) 
{
    logMessage("INFO", $infoMessage);
}

function logError ($errorMessage) 
{
    logMessage("ERROR", $errorMessage);
}

logInfo("Today is Monday.");
logError("Why Monday.");
