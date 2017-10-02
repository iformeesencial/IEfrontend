<?php
	//session_start();
	include("../Facebook/autoload.php");

	$FB = new \Facebook\Facebook([
		'app_id' => '1868377656824708',
	  'app_secret' => '34c364017d0cb06f022a9c03cecc1ce5',
	  'default_graph_version' => 'v2.10',
	]);

	$helper = $FB->getRedirectLoginHelper();
?>
