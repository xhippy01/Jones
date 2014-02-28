<?php

$var_id = strip_tags($_REQUEST['varid']);
$quantity = strip_tags($_REQUEST['quantity']);
$cust_id = strip_tags($_REQUEST['custid']);

//initialise basket_id so we can check for existing baskets
$basket_id = 0;

include('../../connect.php');

//first lets check if we already have a basket saved
$result = mysqli_query($con,"SELECT * FROM basket WHERE basket_cust_id = ".$cust_id);
while($row = mysqli_fetch_array($result))
{
	$basket_id = $row['basket_id'];
}

if($basket_id == 0)
{
	//if its 0, then we need to create a basket
	mysqli_query($con,"INSERT INTO basket (basket_cust_id, basket_date, basket_status)
                                                  VALUES
                                                  ('$cust_id',now(),0)");
}
else
{
	//now lets get the basket id if we already have a basket saved
	$result = mysqli_query($con,"SELECT * FROM basket WHERE basket_cust_id = ".$cust_id);
	while($row = mysqli_fetch_array($result))
	{
		$basket_id = $row['basket_id'];
	}
	//finally lets save the basket contents
	mysqli_query($con,"INSERT INTO basket_products (basket_id, b_p_v_id, b_p_v_quantity, b_p_v_status)
                                                  VALUES
                                                  ('$basket_id','$var_id','$quantity',0)");	
}

$result = mysqli_query($con,"SELECT * FROM basket_products WHERE basket_id = ".$basket_id);
$num_rows = mysqli_num_rows($result);

echo '('.$num_rows.')';

?>