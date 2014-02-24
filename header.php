<?php

if($email)
{
  $greeting = "Welcome <a href='cms/cms_user_profile.php?custid=$cust_id'>" . $email . "</a> | <a href='logout.php'>Log out</a>";
}
else
{
  $greeting = "<a href='sign_in.php'>Log in</a> | <a href='sign_up.php'>Sign up?</a>";
}

?>
<div class="row">
  <div class="col-lg-12 text-right" id="login">
    <p><?php echo $greeting ?></p>
  </div>
</div>
<div class="bs-docs-section clearfix">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-2">
            <a href="index.php"><img src="assets/images/logo.png" /></a>
          </div>
          <div id="contact" class="col-lg-2 col-md-offset-8 text-right">  
            <a href="https://www.facebook.com/pages/Jones-Butchers/104454009641565?fref=ts" alt="go to our Facebook page"><img id="social" src="assets/images/facebook.png"></a>
            <a href="#" alt="go to our Facebook page"><img id="social" src="assets/images/email.png"></a>
          </div>
        </div>
      </div>