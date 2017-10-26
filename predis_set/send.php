<?php
require "predis/autoload.php";
//PredisAutoloader::register();
Predis\Autoloader::register();

try {
	$redis = new Predis\Client();

	// This connection is for a remote server
	/*
		$redis = new PredisClient(array(
		    "scheme" => "tcp",
		    "host" => "153.202.124.2",
		    "port" => 6379
		));
	*/
	$redis->set('message', 'Hello world');
	echo 'key: message was sent with the value Hello world';
}
catch (Exception $e) {
	die($e->getMessage());
}