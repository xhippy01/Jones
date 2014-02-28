<?php
	session_start();
  
  include('../../../connect.php');

  $custid = $_REQUEST["custid"];
  
  $total = 0;

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Your Basket | J. Jones Butchers</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='../assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='../assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='../assets/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='../assets/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='../assets/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='../assets/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!-- / START - page related stylesheets [optional] -->
    
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="../assets/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="../assets/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="../assets/stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / demo file [not required!] -->
    <link href="../assets/stylesheets/demo.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../assets/stylesheets/jones.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="../assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="../assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class='contrast-sea-blue '>
    <div id="outer-container">
    <?php

    include('cms_header.php');
	
	$result = mysqli_query($con,"SELECT *
								FROM basket b
								INNER JOIN basket_products bp ON b.basket_id = bp.basket_id
								INNER JOIN product_variation pv ON bp.b_p_v_id = pv.pv_id
								INNER JOIN product_type pt ON pv.pv_t_id = pt.pt_id 
								INNER JOIN customer_profiles c ON b.basket_cust_id = c.cust_id
								WHERE b.basket_cust_id = " . $custid);

    ?>

    
    <div id='wrapper'>
      <div id='main-nav-bg'></div>
      <?php

      include('cms_nav.php');

      ?>

      <section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div id='orders'>
                <div class='row'>
                  <div class='col-sm-12'>
                    <div class='page-header'>
                      <h1 class='pull-left'>
                        <i class='icon-inbox'></i>
                        <span>Your Basket</span>
                      </h1>
                    </div>
                    <div class='row'>
                      <div class='col-sm-12'>
                        <div class='box'>
                          <div class='box-content' id='orders'>
<?php
                            


echo "<div class='col-sm-12'>
	<div class='box'>
	  <div class='box-content'>
		<div id='detail'>";
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
	echo "</div>
</div>";

mysqli_close($con);
?>
          <footer id='footer'>
            <div class='footer-wrapper'>
              <div class='row'>
                <div class='col-sm-6 text'>
                  Copyright © 2014 PrettyJaded Web Design
                </div>
              </div>
            </div>
          </footer>
        </div>
      </section>
    </div>
  </div>
    <!-- / jquery [required] -->
    <script src="../assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="../assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery migrate (for compatibility with new jquery) [required] -->
    <script src="../assets/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="../assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="../assets/javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="../assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="../assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="../assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="../assets/javascripts/theme.js" type="text/javascript"></script>
    <!-- / demo file [not required!] -->
    <script src="../assets/javascripts/demo.js" type="text/javascript"></script>
    <!-- / START - page related files and scripts [optional] -->
    <script src="../assets/javascripts/plugins/timeago/jquery.timeago.js" type="text/javascript"></script>
    <!-- / END - page related files and scripts [optional] -->

    <script>
      $(document).ready(function(){
        $.ajaxSetup({cache:false});

        $('#orders p').click(function() {
        var href = $(this).find("a").attr("id");
        if(href) {
            $('#detail').load('cust_basket_products.php',{'id':href});
            }
        });
		
		$('.clearbutton').live("click",function() {
        var custid = $(this).find("a").attr("id");
		var switcher = 2;
			alert(custid + ", " + switcher);
			$('#detail').load('cms_func_edit_basket.php',{'custid':custid,'switcher':switcher});
        });

      });
    </script>

  </body>
</html>
