<?php 
	require_once("braintree_init.php");
	require_once "lib/Braintree.php";

	$nonce=$_POST['nonce'];
	$amount=$_POST['amount'];
	$result=Braintree_Transaction::sale([
		'amount'=>$amount,
		'paymentMethodNonce'=>$nonce,
		'options'=>	[
			'submitForSettlement'=>True
		]
	]);
	echo $result;
 ?>