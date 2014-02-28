<?php

class Customer
{
	public $cust_id = '';	
    public $cust_firstname = '';
    public $cust_lastname = '';	
    public $cust_username= '';    
	public $cust_houseno = '';
	public $cust_add1 = '';
	public $cust_add2 = '';
	public $cust_city = '';
	public $cust_county = '';
	public $cust_postcode = '';
	public $cust_contactno = '';
	public $cust_mobileno = '';
	public $cust_email = '';
    public $cust_bio = '';
	//$cust_password = do I need this?
    public $cust_image = '';
    public $cust_mailing = '';
	public $cust_date_start = '';
	public $cust_type = '';

	public function setCustomerDetails($custid,$fname,$lname,$uname,$houseno,$add1,$add2,$city,
	$county,$postcode,$contact,$mobile,$email,$bio,$password,$image,$mailing,$dob,$type)
	{	
		include('../../../connect.php');
		
		mysqli_query($con, "UPDATE customer_profiles SET 
		cust_firstname='$fname',
		cust_lastname='$lname',
		cust_username='$uname',
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
		cust_password='$password',
		cust_image='$image',
		cust_mailing_list='mailing',
		cust_dob='$dob',
		cust_type='$type'
		WHERE
		cust_id= $custid");
		
		
		//run an append query to set all the customer details
		/*mysqli_query($con,"INSERT INTO customer_profiles (cust_firstname,cust_lastname,cust_username,cust_houseno,cust_address1,cust_address2,cust_city,
		cust_county,cust_postcode,cust_contactno,cust_mobileno,cust_email,cust_bio,cust_password,cust_image,cust_mailing_list,cust_date_start,
		cust_dob,cust_type)
		VALUES
		('$fname','$lname','$uname','$houseno','$add1','$add2','$city','$county','$postcode','$contact','$mobile','$email','$bio',
		'$password','$image','$mailing',now(),'$dob',2)");	*/	
	}
	
	public function getCustomerDetails($cust_id)
	{
		include('../../../connect.php');
		//gets the recordset for the cust_id
		$result = mysqli_query($con,"SELECT * FROM customer_profiles WHERE cust_id = ".$cust_id);

		  while($row = mysqli_fetch_array($result))
		{
			$this->cust_id = $row['cust_id'];
			
			$this->cust_firstname = $row['cust_firstname'];
			$this->cust_lastname = $row['cust_lastname'];
			
			//$_SESSION['cust_firstname'] = $cust_firstname;
			//$_SESSION['cust_lastname'] = $cust_lastname;
			
			$this->cust_username= $row['cust_username'];
			
			$this->cust_houseno = $row['cust_houseno'];
			$this->cust_add1 = $row['cust_address1'];
			$this->cust_add2 = $row['cust_address2'];
			$this->cust_city = $row['cust_city'];
			$this->cust_county = $row['cust_county'];
			$this->cust_postcode = $row['cust_postcode'];
			$this->cust_contactno = $row['cust_contactno'];
			$this->cust_mobileno = $row['cust_mobileno'];
			$this->cust_email = $row['cust_email'];
			$this->cust_bio = $row['cust_bio'];
			//$cust_password = do I need this?
			$this->cust_image = $row['cust_image'];
			$this->cust_mailing = $row['cust_mailing_list'];
			$this->cust_date_start = $row['cust_date_start'];
			$this->cust_dob = $row['cust_dob'];
			$this->cust_type = $row['cust_type'];			
		}
	}
}

?>