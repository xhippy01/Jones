<?php

//customer class file
	require_once("customer.php");  
	//include('functions.php');
	
	$customer = new Customer;
	
	//this has been passed through on the url
	$cust_id = $_SESSION["cust_id"];	
	$customer->getCustomerDetails($cust_id);
	
?>

<nav id='main-nav'>
        <div class='navigation'>
          <div class='search'>
            <form action='search_results.html' method='get'>
              <div class='search-wrapper'>
                <input value="" class="search-query form-control" placeholder="Search..." autocomplete="off" name="q" type="text" />
                <button class='btn btn-link icon-search' name='button' type='submit'></button>
              </div>
            </form>
          </div>
          <ul class='nav nav-stacked'>
          	<li class=''>
              <a href='../index.php'>
                <i class='icon-home'></i>
                <span>Visit the site</span>
              </a>
            </li>
            <li class=''>
              <a href='cms_index.php'>
                <i class='icon-dashboard'></i>
                <span>Dashboard</span>
              </a>
            </li>
			<?php
            if($customer->cust_type == 1)
			  {
				echo "<li class='active'>
				  <a class='dropdown-collapse' href='#'><i class='icon-barcode'></i>
					<span>Products</span>
					<i class='icon-angle-down angle-down'></i>
				  </a>		  
				  
				  <ul class='nav nav-stacked'>
					<li class=''>
					  <a href='cms_cats.php'>
						<i class='icon-caret-right'></i>
						<span>Product Categories</span>
					  </a>
					</li>
					<li class=''>
					  <a href='cms_products.php'>
						<i class='icon-caret-right'></i>
						<span>Product Types</span>
					  </a>
					</li>
				  </ul>
				</li>";
				}
				
			if($customer->cust_type == 1)
			  {
				echo "<li class=''>
              <a href='cms_orders.php'>
                <i class='icon-inbox'></i>
                <span>Orders</span>
              </a>
            </li>";
			}
			else if($customer->cust_type == 0)
			 {
				echo "<li class=''>
              <a href='cms_cust_orders.php?custid=".$customer->cust_id."'>
                <i class='icon-inbox'></i>
                <span>Orders</span>
              </a>
            </li>";
			}
			
            if($customer->cust_type == 1)
			  {
				echo "
				<li class=''>
				  <a href='cms_blank.php'>
					<i class='icon-food'></i>
					<span>Recipes</span>
				  </a>
				</li>
				<li class=''>
				  <a class='dropdown-collapse' href='#'><i class='icon-edit'></i>
				  <span>Pages</span>
				  <i class='icon-angle-down angle-down'></i>
				  </a>
		  
				  <ul class='nav nav-stacked'>
					<li class=''>
					  <a href='emails/confirmation/blue.html'>
						<i class='icon-caret-right'></i>
						<span>Account Confirm</span>
					  </a>
					</li>
					<li class=''>
					  <a href='emails/reset/blue.html'>
						<i class='icon-caret-right'></i>
						<span>Password Reset</span>
					  </a>
					</li>
					<li class=''>
					  <a href='emails/newsletter/blue.html'>
						<i class='icon-caret-right'></i>
						<span>Newsletter</span>
					  </a>
					</li>
					<li class=''>
					  <a href='err404.html'>
						<i class='icon-caret-right'></i>
						<span>Err 404</span>
					  </a>
					</li>
					<li class=''>
					  <a href='err500.html'>
						<i class='icon-caret-right'></i>
						<span>Err 500</span>
					  </a>
					</li>
					<li class=''>
					  <a href='user_profile.html'>
						<i class='icon-caret-right'></i>
						<span>User Profile</span>
					  </a>
					</li>
					<li class=''>
					  <a href='invoice.html'>
						<i class='icon-caret-right'></i>
						<span>Invoice</span>
					  </a>
					</li>
					<li class=''>
					  <a href='forgot_password.html'>
						<i class='icon-caret-right'></i>
						<span>Forgot Password</span>
					  </a>
					</li>
					<li class=''>
					  <a href='sign_up.html'>
						<i class='icon-caret-right'></i>
						<span>Sign Up</span>
					  </a>
					</li>
					<li class=''>
					  <a href='sign_in.html'>
						<i class='icon-caret-right'></i>
						<span>Sign In</span>
					  </a>
					</li>
				  </ul>
				</li>
				<li class=''>
				  <a href='cms_customers.php'>
					<i class='icon-user'></i>
					<span>Customers</span>
				  </a>
				</li>
				<li class=''>
				  <a href='cms_blank.php'>
					<i class='icon-wrench'></i>
					<span>Settings</span>
				  </a>
				</li>
				<li class=''>
				  <a href='cms_blank.php'>
					<i class='icon-lock'></i>
					<span>Admin</span>
				  </a>
				</li>";
				}
				?>
          </ul>
		  <?php
            if($customer->cust_type == 0)
			  {
				echo '<div style="padding:12px;"><img src="../assets/images/pages/hygene.jpg" /></div>';
				}
				?>
        </div>
      </nav>