<?php

define('LARAVEL_START', microtime(true));

$app = include("../vendor/techart/tao3/bootstrap/app.php");

$app->run();
