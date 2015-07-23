<?php

require_once 'Log.php';

$date = date('Y-m-d');

$log1 = new Log();

$log1->filename = 'txt/log-' . $date . '.txt';

$log1->logInfo('this is log two.');

