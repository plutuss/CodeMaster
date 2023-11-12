<?php

use Framework\App;

define('APP_DIR', __DIR__);
header("Content-Type: text/html");

require_once APP_DIR . '/../vendor/autoload.php';
session()->sessionCheckTimeout();
require_once APP_DIR . '/../routes/web.php';

$app = new App();
$app->run();