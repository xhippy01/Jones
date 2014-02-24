<?php
	//includes functions for the site

	session_start();

	//check username and password with the database
	function login($email, $passwrd)
	{
		//if yes, return true
		//else throw exception

		//connect to database
		include('../../connect.php');

		$result =  mysqli_query($con,"SELECT * FROM customer_profiles WHERE cust_email = '" .$email . "' AND cust_password = '" . $passwrd . "'");

		if(!$result)
		{
			throw new Exception('Could not log you in');
		}

		if($result->num_rows > 0)
		{
			while($row = mysqli_fetch_array($result))
            {
				$_SESSION['cust_id'] = $row['cust_id'];
				$_SESSION['cust_firstname'] = $row['cust_firstname'];
				$_SESSION['cust_lastname'] = $row['cust_lastname'];
			}
			return true;
		}
		else
		{
			throw new Exception('Could not log you in');
		}
	}

?>