<?php
	session_start();
  
	include('../../../connect.php');
  
	//customer class file
	require_once("customer.php");  
	$customer = new Customer;
	
	//this has been passed through on the url
	$cust_id = $_REQUEST["custid"];
	
	$customer->getCustomerDetails($cust_id);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>User profile | Flatty - Flat Administration Template</title>
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
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-user'></i>
                      <span>User profile</span>
                    </h1>
                    <div class='pull-right'>
                      <ul class='breadcrumb'>
                        <li>
                          <a href='cms_user_profile.php?custid=<?php echo $cust_id; ?>'>
                            <i class='icon-bar-chart'></i>
                          </a>
                        </li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li>User pages</li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li class='active'>User profile</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-3 col-lg-2'>
                  <div class='box'>
                    <div class='box-content'>
						<div class="profileimage">
						<img class="img-responsive" id="profileimage" src="<?php
						  if($customer->cust_image != '')
						  {
							echo 'userimages/'. $customer->cust_image;
						  }
						  else
						  {
							echo 'http://placehold.it/230x230&text=Photo ';
							}
							
							?>
							"/>
						</div>
						</div>
                  </div>
                </div>
				<div class="custdetails">
                <div class='col-sm-9 col-lg-10'>
                  <div class='box'>
                    <div class='box-content box-double-padding'>
                      <form class='form' style='margin-bottom: 0;'>
                        <fieldset>
                          <div class='col-sm-4'>
                            <div class='lead'>
                              <i class='icon-github text-contrast'></i>
                              Username, Email & Password changes
                            </div>
							<small class='text-muted'>
								<strong>Account Type:</strong> 
								<?php if($customer->cust_type == 1)
										{
										echo 'Administrator';
										}
										else
										{
										echo 'Member';	
										}
								?>
								
							</small>
							<br/>
                            <small class='text-muted'>
								<strong>Member since:</strong> 
								<?php 
								
								$datetime = strtotime($customer->cust_date_start);
								echo $mysqldate = date("d/m/Y", $datetime) ;
								
								?>
								
							</small>
							
                          </div>
                          <div class='col-sm-7 col-sm-offset-1'>
                            <div class='form-group'>
								<input class='form-control' id='custid' name='custid' value='<?php echo $customer->cust_id; ?>' type='hidden'>
                              <label>Username</label>
                              <input class='form-control' id='username' placeholder='Username' value='<?php echo $customer->cust_username; ?>' type='text'>
                            </div>
                            <div class='form-group'>
                              <label>E-mail</label>
                              <input class='form-control' id='email' placeholder='E-mail' value='<?php echo $customer->cust_email; ?>' type='text'>
                            </div>
                            <hr class='hr-normal'>
                            <div class='form-group'>
                              <div class='controls'>
                                <div class='checkbox'>
                                  <label>
                                    <input data-target='#change-password' data-toggle='collapse' id='changepasswordcheck' type='checkbox' value='option1'>
                                    Change password?
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class='collapse' id='change-password'>
                              <div class='form-group'>
                                <label>Password</label>
                                <input class='form-control' id='password' placeholder='Password' type='password'>
                              </div>
                              <div class='form-group'>
                                <label>Password confirmation</label>
                                <input class='form-control' id='password-confirmation' placeholder='Password confirmation' type='password'>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <hr class='hr-normal'>
                        <fieldset>
                          <div class='col-sm-4'>
                            <div class='lead'>
                              <i class='icon-user text-contrast'></i>
                              Contact Details & Delivery Address
                            </div>
                            <small class='text-muted'>Here you can tell us a little about yourself, you don't have to fill it all in, we're just being nosey!<br><br>
							Please be mindful that we need this information to complete your orders which are full of yummy goodness!</small>
                          </div>
                          <div class='col-sm-7 col-sm-offset-1'>
                            <div class='form-group'>
							
							<input id='custid' name='custid' value='<?php echo $customer->cust_id; ?>' type='hidden'>
							
                              <label>First name</label>
                              <input class='form-control' id='firstname' name='firstname' placeholder='First name' value='<?php echo $customer->cust_firstname; ?>' type='text'>
                            </div>
                            <div class='form-group'>
                              <label>Last name</label>
                              <input class='form-control' id='lastname' placeholder='Last name' value='<?php echo $customer->cust_lastname; ?>' type='text'>
                            </div>
                            <div class='form-group'>
                              <label>House Number</label>
                              <input class='form-control' id='houseno' placeholder='House Number' value='<?php echo $customer->cust_houseno; ?>' type='text'>
                            </div>
							<div class='form-group'>
                              <label>Address Line 1</label>
                              <input class='form-control' id='add1' placeholder='Address Line 1' value='<?php echo $customer->cust_add1; ?>' type='text'>
                            </div>
							<div class='form-group'>
                              <label>Address Line 2</label>
                              <input class='form-control' id='add2' placeholder='Address Line 2' value='<?php echo $customer->cust_add2; ?>' type='text'>
                            </div>
							<div class='form-group'>
                              <label>City</label>
                              <input class='form-control' id='city' placeholder='City' value='<?php echo $customer->cust_city; ?>' type='text'>
                            </div>
							<div class='form-group'>
                              <label>County</label>
                              <input class='form-control' id='county' placeholder='County' value='<?php echo $customer->cust_county; ?>' type='text'>
                            </div>
							<div class='form-group'>
                              <label>Post Code</label>
                              <input class='form-control' id='postcode' placeholder='Post Code' value='<?php echo $customer->cust_postcode; ?>' type='text'>
                            </div>

                            <div class='form-group'>
                              <label>Contact Number</label>
                              <input class='form-control' id='contactnumber' placeholder='Contact Number' value='<?php echo $customer->cust_contactno; ?>' type='text'>
                            </div>
							<div class='form-group'>
                              <label>Mobile Number</label>
                              <input class='form-control' id='mobilenumber' placeholder='Mobile Number' value='<?php echo $customer->cust_mobileno; ?>' type='text'>
                            </div>
							<div class='form-group'>
							<?php
							$datetime = strtotime($customer->cust_dob);
							$mydobdate = date("d/m/Y", $datetime) ;
							?>
                              <label>Date of Birth</label>
                              <input class='form-control' id='dob' placeholder='DOB' value='<?php echo $mydobdate ?>' type='text'>
                            </div>
                            <div class='form-group'>
                              <label>Bio</label>
                              <textarea class='autosize form-control' id='bio' value='<?php echo $customer->cust_bio; ?>' placeholder='Bio'><?php echo $customer->cust_bio; ?></textarea>
                            </div>
                            <hr class='hr-normal'>
                            <div class='form-group'>
                              <div class='controls'>
                                <div class='checkbox'>
                                  <label>
									<?php
									$v = '';
									if($customer->cust_mailing == 1)
									{
										$v = 'checked';
									}
									
									?>
                                    <input data-target='#mailing' data-toggle='collapse' id='mailing' type='checkbox' <?php echo $v; ?>>
                                    Be on our Mailing List?
                                  </label>
                                </div>
                              </div>
                            </div>                            
                            
                        </div>
                        </fieldset>
                        <div class='form-actions form-actions-padding' style='margin-bottom: 0;'>
                          <div class='text-right'>
                            <div class='btn btn-primary btn-lg'>
                              <i class='icon-save'></i>
                              <a class="btnsave" >Save</a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
					</div><!--end of custdetails -->
                  </div>
                </div>
              </div>
            </div>
          </div>
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
    
    <!-- / END - page related files and scripts [optional] -->
  </body>
  
	<script>
      $(document).ready(function(){
        $.ajaxSetup({cache:false});
		
        $('.btnsave').live("click",function() {
			var custid = document.getElementById("custid").value;
            var firstname = document.getElementById("firstname").value;
            var lastname = document.getElementById("lastname").value;
			var houseno = document.getElementById("houseno").value;
			var add1 = document.getElementById("add1").value;
			var add2 = document.getElementById("add2").value;
			var city = document.getElementById("city").value;
			var county = document.getElementById("county").value;
			var postcode = document.getElementById("postcode").value;
			var contact = document.getElementById("contactnumber").value;
			var mobile = document.getElementById("mobilenumber").value;
			var email = document.getElementById("email").value;
			var bio = document.getElementById("bio").value;
			var mailing = document.getElementById("mailing").checked;
			var image = document.getElementById("profileimage").src;
			var dob = document.getElementById("dob").value;
			
			var m2 = 0;
			if(mailing == true)
			{
				m2 = 1;
			}
			else
			{
				m2 = 0;
			}
			
            $('.custdetails').load('cms_func_editcust.php',{
			'custid':custid,
			'firstname':firstname,
			'lastname':lastname,
			'houseno':houseno,
			'add1':add1,
			'add2':add2,
			'city':city,
			'county':county,
			'postcode':postcode,
			'contact':contact,
			'mobile':mobile,
			'email':email,
			'bio':bio,
			'mailing':m2,
			'dob':dob
			});
            alert(custid + "," + firstname + "," + lastname + ", " + m2);
        });
		
		$('.profileimage').live("click",function() {
		var image = document.getElementById("profileimage").src;
		alert(image);
		});
	});
	</script>
</html>
