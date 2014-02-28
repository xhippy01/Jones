<?php
//customer class file
	require_once("customer.php");  
	//include('functions.php');
	
	$customer = new Customer;
	
	//this has been passed through on the url
	$cust_id = $_SESSION["cust_id"];	
	$customer->getCustomerDetails($cust_id);
	
?>

<header>
      <nav class='navbar navbar-default'>
        <a class='navbar-brand' href='cms_index.php'>
          <img width="45" class="logo" alt="Flatty" src="../assets/images/logo.png" />
          <img width="21" class="logo-xs" alt="Flatty" src="../assets/images/logo.png" />
        </a>
        <a class='toggle-nav btn pull-left' href='#'>
          <i class='icon-reorder'></i>
        </a>
        <ul class='nav'>
          <li class='dropdown light only-icon'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              <i class='icon-cog'></i>
            </a>
            <ul class='dropdown-menu color-settings'>
              <li class='color-settings-body-color'>
                <div class='color-title'>Body color</div>
                <a data-change-to='assets/stylesheets/light-theme.css' href='#'>
                  Light
                  <small>(default)</small>
                </a>
                <a data-change-to='assets/stylesheets/dark-theme.css' href='#'>
                  Dark
                </a>
                <a data-change-to='assets/stylesheets/dark-blue-theme.css' href='#'>
                  Dark blue
                </a>
              </li>
              <li class='divider'></li>
              <li class='color-settings-contrast-color'>
                <div class='color-title'>Contrast color</div>
                            <a data-change-to="contrast-red" href="#"><i class='icon-cog text-red'></i>
                Red
                <small>(default)</small>
                </a>
    
                            <a data-change-to="contrast-blue" href="#"><i class='icon-cog text-blue'></i>
                Blue
                </a>
    
                            <a data-change-to="contrast-orange" href="#"><i class='icon-cog text-orange'></i>
                Orange
                </a>
    
                            <a data-change-to="contrast-purple" href="#"><i class='icon-cog text-purple'></i>
                Purple
                </a>
    
                            <a data-change-to="contrast-green" href="#"><i class='icon-cog text-green'></i>
                Green
                </a>
    
                            <a data-change-to="contrast-muted" href="#"><i class='icon-cog text-muted'></i>
                Muted
                </a>
    
                            <a data-change-to="contrast-fb" href="#"><i class='icon-cog text-fb'></i>
                Facebook
                </a>
    
                            <a data-change-to="contrast-dark" href="#"><i class='icon-cog text-dark'></i>
                Dark
                </a>
    
                            <a data-change-to="contrast-pink" href="#"><i class='icon-cog text-pink'></i>
                Pink
                </a>
    
                            <a data-change-to="contrast-grass-green" href="#"><i class='icon-cog text-grass-green'></i>
                Grass green
                </a>
    
                            <a data-change-to="contrast-sea-blue" href="#"><i class='icon-cog text-sea-blue'></i>
                Sea blue
                </a>
    
                            <a data-change-to="contrast-banana" href="#"><i class='icon-cog text-banana'></i>
                Banana
                </a>
    
                            <a data-change-to="contrast-dark-orange" href="#"><i class='icon-cog text-dark-orange'></i>
                Dark orange
                </a>
    
                            <a data-change-to="contrast-brown" href="#"><i class='icon-cog text-brown'></i>
                Brown
                </a>
    
              </li>
            </ul>
          </li>
          <li class='dropdown medium only-icon widget'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              <i class='icon-rss'></i>
              <div class='label'>5</div>
            </a>
            <ul class='dropdown-menu'>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-user text-success'></i>
                    </div>
                    <div class='pull-left text'>
                      John Doe signed up
                      <small class='text-muted'>just now</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-inbox text-error'></i>
                    </div>
                    <div class='pull-left text'>
                      New Order #002
                      <small class='text-muted'>3 minutes ago</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-comment text-warning'></i>
                    </div>
                    <div class='pull-left text'>
                      America Leannon commented Flatty with veeery long text.
                      <small class='text-muted'>1 hour ago</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-user text-success'></i>
                    </div>
                    <div class='pull-left text'>
                      Jane Doe signed up
                      <small class='text-muted'>last week</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-inbox text-error'></i>
                    </div>
                    <div class='pull-left text'>
                      New Order #001
                      <small class='text-muted'>1 year ago</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='widget-footer'>
                <a href='#'>All notifications</a>
              </li>
            </ul>
          </li>
          <li class='dropdown dark user-menu'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              <img width="23" height="23" alt="<?php echo $_SESSION['cust_firstname'] . ' '. $_SESSION['cust_lastname'] ?>" src="<?php
					  if($customer->cust_image != '')
					  {
						echo 'userimages/'. $customer->cust_image;
					  }
					  else
					  {
						echo 'http://placehold.it/230x230&text=Photo ';
						}
						
						?>" />
              <span class='user-name'><?php echo $_SESSION['cust_firstname'] . ' '. $_SESSION['cust_lastname'] ?></span>
              <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
              <li>
                <a href='cms_user_profile.php?custid=<?php echo $cust_id; ?>'>
                  <i class='icon-user'></i>
                  Your Profile
                </a>
              </li>
			  <li><a href="cms_cust_orders.php?custid=<?php echo $cust_id; ?>"><i class='icon-inbox'></i> Your Orders</a></li>
			  <?php
			  if($customer->cust_type == 1)
			  {
				echo '<a href="cms_orders.php"><li><i class="icon-inbox"></i> Orders (Simon Only)</a></li>';
				}
				?>
              <li class='divider'></li>
              <li>
                <a href='../logout.php'>
                  <i class='icon-signout'></i>
                  Sign out
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <form action='search_results.html' class='navbar-form navbar-right hidden-xs' method='get'>
          <button class='btn btn-link icon-search' name='button' type='submit'></button>
          <div class='form-group'>
            <input value="" class="form-control" placeholder="Search..." autocomplete="off" id="q_header" name="q" type="text" />
          </div>
        </form>
      </nav>
    </header>