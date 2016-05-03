<?php
require_once 'Log.php';
$log = new Log();
$log->fileName = "log-" . date("Y-m-d") . ".log";
$log->info("This is an INFO message.");
$log->error("This is an ERROR message.");
var_dump($log);