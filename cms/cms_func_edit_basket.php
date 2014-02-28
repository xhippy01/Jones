<!-- edit basket functions -->
<?php
include('../../../connect.php');

$func = $_REQUEST['switcher'];
$custid = $_REQUEST['custid'];

switch($func)
{
	case 1:
		//remove_selected
		break;
	case 2:
		//clear_basket
		$total = 0;
		
		$result = mysqli_query($con,"SELECT * FROM basket WHERE basket_cust_id = ".$custid);
		while($row = mysqli_fetch_array($result))
		{
			$basket_id = $row['basket_id'];
		}
		mysqli_query($con,"DELETE FROM basket WHERE basket_cust_id=". $custid);
		mysqli_query($con,"DELETE FROM basket_products WHERE basket_id=" . $basket_id);
		
		$result = mysqli_query($con,"SELECT *
								FROM basket b
								INNER JOIN basket_products bp ON b.basket_id = bp.basket_id
								INNER JOIN product_variation pv ON bp.b_p_v_id = pv.pv_id
								INNER JOIN product_type pt ON pv.pv_t_id = pt.pt_id 
								INNER JOIN customer_profiles c ON b.basket_cust_id = c.cust_id
								WHERE b.basket_cust_id = " . $custid);
		
		if(mysqli_num_rows($result) > 0)
		{
	    echo "<div class='pull-left'>
				<a class='btn btn-default remove-items' href='#'>Remove selected items</a>
				</div>
				<div class='pull-right'>
				<div class='clearbutton'><a class='btn' id='".$cust_id."'>Clear Basket</a></div>
				</div>";
		}
	    echo "<div class='clearfix'></div>
	    <hr class='hr-normal'>
	    <table class='table'>
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
		if(mysqli_num_rows($result) > 0)
		{
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
				$quantity = $row['b_p_v_quantity'];
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
					<div class='text-right'>£".number_format($item_sub_price,2)."</div>
				  </td>
				</tr>";

				$total += $item_sub_price;
			}
		}
		else
		{
			
			echo "<tr><td colspan='5'><br><center>Your Basket is Empty! You need to add some yummy food for your dinner.</center></td></tr>";
		}

	    echo "</tbody>
	    </table>
	    <div class='text-right'>
	      <h3 class='subtotal contrast'>£". number_format($total,2) . "</h3>
	    </div>";
		if(mysqli_num_rows($result) > 0)
		{
	    echo "<hr class='hr-normal'>
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
	       
	        <li class='next'>
	          <a href='#'>Proceed to Checkout  →</a>
	        </li>
	      </ul>
	    </div>
		</div>
	  </div>";
	  }
	  echo "</div>";
		break;
}

?> 