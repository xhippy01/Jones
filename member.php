<?php
session_start();
//include('../../connect.php');

//this includes the functions file
require_once('fns.php');

$email = $_REQUEST['email'];
$passwd = $_REQUEST['passwd'];

if($email && $passwd)
{
  try{
    login($email, $passwd);
    //if they are in the database register the user id
    $_SESSION['valid_user'] = $email;
	
  }

  catch(Exception $e)
  {
  	//unsuccessful login
  	header('Location:sign_in.php');
  	exit;
  }

  header('Location:index.php');
}

?>