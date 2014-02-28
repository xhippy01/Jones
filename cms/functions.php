<?php

function isadmin($custid)
{
	include('../../../connect.php');

	//check to see if a worker has logged in
	$type = 0;
	$result = mysqli_query($con,"SELECT * FROM customer_profiles WHERE cust_id = " . $custid);
	
	while($row = mysqli_fetch_array($result))
	{
  		$type = $row['cust_type'];
	}
	
	return $type;
}

?>