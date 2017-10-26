<?php
require "predis/autoload.php";
Predis\Autoloader::register();

try {
	$redis = new Predis\Client();
	$key = "ABC";
	$redis->set($key, 'expire in 1 minute');
	$redis->expire($key, 60); // expires in 1 minute
	echo "Key: '$key' was set with duration of 60 seconds";
}
catch (Exception $e) {
	die($e->getMessage());
}