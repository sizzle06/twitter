<?php
require_once "twitteroauth-master/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

	// Sets Parameters of Twitter OAuth Function
	$consumer_key = "Consumer-Key";
	$consumer_secret = "Consumer-Secret";
	$access_token = "Access-Token";
	$access_token_secret = "Access-Token-Secret";

	header('Content-Type: text/plain; charset=UTF-8');

	// Tweets a message
	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
	$result = $connection->post("statuses/update", ["status" => "hello world"]);
	var_dump($result);
?>