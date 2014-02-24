<?php

session_start();

$old_user = $_SESSION['valid_user'];
$old_id = $_SESSION['cust_id'];

//store to test if they *were* logged in
unset($_SESSION['valid_user']);
unset($_SESSION['cust_id']);

$result_dest = session_destroy();

//start output

if(!empty($old_user))
{
	if($result_dest)
	{
		//if they were logged in and are now logged out
		header('Location:index.php');
	}
	else
	{
		//they were logged in and could not be logged out
		header('Location:index.php');
	}
}
else
{
	//if they weren't logged in but came to this page somehow
	header('Location:index.php');
}

?>