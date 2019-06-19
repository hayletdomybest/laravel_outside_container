<?php
require_once("../vendor/autoload.php");

$app = include __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(\Log\MyLog::class);
$logStr = $kernel->write();
?>