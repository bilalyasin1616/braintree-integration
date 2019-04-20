<?php 
	session_start();
	require_once("lib/autoload.php");
	// if(file_exists(__DIR__ . "/../.env"));
	// {
	// 	$dotenv= new Dotenv\Dotenv(__DIR__ . "/../");
	// 	$dotenv->load();
	// }

	Braintree_Configuration::environment("sandbox");
	Braintree_Configuration::merchantId("your id");
	Braintree_Configuration::publicKey("your key");
	Braintree_Configuration::privateKey("your key");
 ?>