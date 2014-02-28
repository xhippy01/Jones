<?php

	$custid = $_REQUEST['custid'];	
    $fname = $_REQUEST['firstname'];
    $lname = $_REQUEST['lastname'];	   
	$houseno = $_REQUEST['custid'];
	$add1 = $_REQUEST['add1'];
	$add2 = $_REQUEST['add2'];
	$city = $_REQUEST['city'];
	$county = $_REQUEST['county'];
	$postcode = $_REQUEST['postcode'];
	$contact = $_REQUEST['contact'];
	$mobile = $_REQUEST['mobile'];
	$email = $_REQUEST['email'];
    $bio = $_REQUEST['bio'];
	//$cust_password = do I need this?
    $image = '3.jpg';
    $mailing = $_REQUEST['mailing'];
	$dob = $_REQUEST['dob'];

	/*public function setCustomerDetails($custid,$fname,$lname,$houseno,$add1,$add2,$city,
	$county,$postcode,$contact,$mobile,$email,$bio,$password,$mailing,$dob)
	{*/	
		include('../../../connect.php');
		
		mysqli_query($con, "UPDATE customer_profiles SET 
		cust_firstname='$fname',
		cust_lastname='$lname',
		cust_houseno='$houseno',
		cust_address1='$add1',
		cust_address2='$add2',
		cust_city='$city',		
		cust_county='$county',		
		cust_postcode='$postcode',
		cust_contactno='$contact',
		cust_mobileno='$mobile',
		cust_email='$email',
		cust_bio='$bio',
		cust_mailing_list=$mailing,
		cust_dob='$dob',
		WHERE
		cust_id= $custid");	
		
		require_once("customer.php");  
	$customer = new Customer;
	
	//this has been passed through on the url
	//$cust_id = $_SESSION["cust_id"];	
	$customer->getCustomerDetails($custid);
?>

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
									$v = 0;
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