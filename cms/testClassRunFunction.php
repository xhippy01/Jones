<?php
	//customer class file
	require_once("testClass.php");  
	$customer = new Customer;
	
	//this has been passed through on the url
	$customer->setName('Billybob');
	
	echo "Name = ".$customer->getName();
?>