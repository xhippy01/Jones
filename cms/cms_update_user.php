<?php

	$custid = $_POST['custid'];
	
	include('../../../connect.php');
  
	//customer class file
	require_once("customer.php");  
	$customer = new Customer;
	
	//this has been passed through on the url
	$cust_id = $_REQUEST["custid"];
	
	$customer->getCustomerDetails($cust_id);
	$customer->setCustomerDetails($custid,$fname,$lname,$uname,$houseno,$add1,$add2,$city,
	$county,$postcode,$contact,$mobile,$email,$bio,$password,$image,$mailing,$dob,$type);
	echo $custid;
?>