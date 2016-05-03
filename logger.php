<?php
function logMessage($logLevel, $message)
{
    $today = "log-" . date("Y-m-d") . ".log";
    $log =  date("Y-m-d H:i:s") . " [$logLevel] $message";
    $handle = fopen($today, 'a');
    fwrite($handle, $log . PHP_EOL);
    fclose($handle);
}
function logInfo($message)
{
    logMessage('INFO', $message);
}
function logError($message)
{
    logMessage('ERROR', $message);
}
logInfo("This is an info message.");
logError("This is an error message.");