<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\TestController;

$app = new TestController;
$app->run();

use Carbon\Carbon;
echo '<br>';
echo Carbon::now();
echo '<br>';
echo Carbon::now()->format('y年m月d日');
