<?php

require 'vendor/autoload.php';

use Carbon\Carbon;
 
$date = Carbon::now();

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

echo $date->toDayDateTimeString();
