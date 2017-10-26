<?php
require "predis/autoload.php";
Predis\Autoloader::register();

try {
	$redis = new Predis\Client();
	
	$key = "ABC";
	$time = $redis->ttl($key);
	echo "Key: '$key'  with value: '" . $redis->get('message') . "' ";
	if($time===-1)
		echo "was expired!";
	else
		echo "will expire in $time seconds";
}
catch (Exception $e) {
	die($e->getMessage());
}