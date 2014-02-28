<?php

$total = 0;

include('../../../connect.php');
//include('functions.php');

//$orderid = $_REQUEST["id"];

//echo isadmin($cust_id);

$result = mysqli_query($con,"SELECT *
								FROM orders o
								INNER JOIN orders_products op ON o.order_id = op.order_id
								INNER JOIN product_variation pv ON op.o_p_v_id = pv.pv_id
								INNER JOIN product_type pt ON pv.pv_t_id = pt.pt_id 
								INNER JOIN customer_profiles c ON o.order_cust_id = c.cust_id
								WHERE o.order_id = " . $orderid);


echo "<div class='col-sm-12'>
	<div class='box'>
	  <div class='box-content'>
	    <div class='pull-left'>
	      <a class='btn btn-success fullfill-items' href='#'>Fullfill selected items</a>
	      <a class='btn btn-success' href='#'>Mark as complete</a>
	    </div>
	    <div class='pull-right'>
	      <a class='btn' href='#'>Cancel</a>
	    </div>
	    <div class='clearfix'></div>
	    <hr class='hr-normal'>
	    <table class='table table-hover'>
	      <thead>
	      <tr>
	          <th class='only-checkbox'>
	            <input class='check-all' type='checkbox'>
	          </th>
	          <th>Item</th>
	          <th>
	            <div class='text-center'>Item Price</div>
	          </th>
	          <th>
	            <div class='text-center'>Qty</div>
	          </th>
	          <th>
	            <div class='text-right'>Sub Price</div>
	          </th>
	        </tr>
	      </thead>
	      <tbody>";

  		while($row = mysqli_fetch_array($result))
  		{
  			$cust_id = $row['cust_id'];
			$cust_firstname = $row['cust_firstname'];
			$cust_lastname = $row['cust_lastname'];
			$cust_username = $row['cust_username'];

			$cust_houseno = $row['cust_houseno'];
			$cust_address1 = $row['cust_address1'];
			$cust_address2= $row['cust_address2'];
			$cust_city = $row['cust_city'];
			$cust_county = $row['cust_county'];
			$cust_postcode = $row['cust_postcode'];

			$cust_email =$row['cust_email'];
			$cust_contactno = $row['cust_contactno'];
			$cust_mobileno = $row['cust_mobileno'];

			$price = $row['pv_price'];
			$quantity = $row['o_p_v_quantity'];
			$weight = $row['pv_weight'];

			$item_sub_price = $price * $quantity;
	 		        
	        echo "<tr>
	          <td class='only-checkbox'>
	            <input type='checkbox'>
	          </td>
	          <td>".$row['pt_name']. " / " . $weight. "kg</td>
	          <td>
	            <div class='text-center'>£".$price."</div>
	          </td>
	          <td>
	            <div class='text-center'>".$quantity."</div>
	          </td>
	          
	          <td>
	            <div class='text-right'>£".$item_sub_price."</div>
	          </td>
	        </tr>";

	        $total += $item_sub_price;
	    }

	    echo "</tbody>
	    </table>
	    <div class='text-right'>
	      <h3 class='subtotal contrast'>£". number_format($total,2) . "</h3>
	    </div>
	    <hr class='hr-normal'>
	    <div class='row'>
	      <div class='col-sm-4'>
	        <div class='lead'>
	          <i class='icon-envelope contrast'></i>
	          Customer address
	        </div>
	      </div>
	      <div class='col-sm-7 col-sm-offset-1'>
	        <address>
	          <strong></strong>
	          <br>
	          $cust_houseno $cust_address1, $cust_address2
	          <br>
	          $cust_city, $cust_county, $cust_postcode
	          <br>
	          <abbr title='Phone'>P:</abbr>
	          $cust_contactno	  
	          <br>      
	        	<abbr title='Mobile'>M:</abbr>
	          $cust_mobileno
	        </address>  
	      </div>
	    </div>
	    <div class='row'>
	      <div class='col-sm-4'>
	        <div class='lead'>
	          <i class='icon-user contrast'></i>
	          Customer details
	        </div>
	      </div>
	      <div class='col-sm-7 col-sm-offset-1'>
	        <address>
	          <strong>$cust_firstname $cust_lastname</strong>
	          <br>
	          <a href='mailto:#'>$cust_email</a>
	        </address>
	      </div>
	    </div>
	    <div class='form-actions form-actions-padding'>
	      <ul class='pager'>
	        <li class='previous'>
	          <a href='#'>← Previous order</a>
	        </li>
	        <li class='next'>
	          <a href='#'>Next order →</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>
</div>";

mysqli_close($con);

?>