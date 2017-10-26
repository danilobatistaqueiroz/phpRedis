<?php
require "predis/autoload.php";

Predis\Autoloader::register();
try {
	$redis = new Predis\Client();

	$value = $redis->get('message');

	print($value); 

	echo ($redis->exists('message')) ? " - Oui" : "please populate the message key";
}
catch (Exception $e) {
	die($e->getMessage());
}