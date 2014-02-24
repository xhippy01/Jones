<?php
	session_start();
  
  include('../../../connect.php');

  $cust_id = $_REQUEST["custid"];

  $result = mysqli_query($con,"SELECT * FROM customer_profiles WHERE cust_id = ".$cust_id);

  while($row = mysqli_fetch_array($result))
  {
    $cust_id = $row['cust_id'];
	
    $cust_firstname = $row['cust_firstname'];
    $cust_lastname = $row['cust_lastname'];
	
	$_SESSION['cust_firstname'] = $cust_firstname;
	$_SESSION['cust_lastname'] = $cust_lastname;
	
    $cust_username= $row['cust_username'];
    $cust_email=$row['cust_email'];
    $cust_bio= $row['cust_bio'];
    $cust_image= $row['cust_image'];
    $cust_mailing= $row['cust_mailing_list'];
  }

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
                          <a href='index.html'>
                            <i class='icon-bar-chart'></i>
                          </a>
                        </li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li>Example pages</li>
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
                      <img class="img-responsive" src="http://placehold.it/230x230&text=Photo" />
                    </div>
                  </div>
                </div>
                <div class='col-sm-9 col-lg-10'>
                  <div class='box'>
                    <div class='box-content box-double-padding'>
                      <form class='form' style='margin-bottom: 0;'>
                        <fieldset>
                          <div class='col-sm-4'>
                            <div class='lead'>
                              <i class='icon-github text-contrast'></i>
                              Lorem ipsum
                            </div>
                            <small class='text-muted'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisl est, vulputate at porttitor non, interdum a mauris. Phasellus imperdiet gravida pulvinar.</small>
                          </div>
                          <div class='col-sm-7 col-sm-offset-1'>
                            <div class='form-group'>
                              <label>Username</label>
                              <input class='form-control' id='username' placeholder='Username' value='<?php echo $cust_username; ?>' type='text'>
                            </div>
                            <div class='form-group'>
                              <label>E-mail</label>
                              <input class='form-control' id='email' placeholder='E-mail' value='<?php echo $cust_email; ?>' type='text'>
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
                              Personal info
                            </div>
                            <small class='text-muted'>Here you can tell us a little about yourself, you don't have to, we're just being nosey!</small>
                          </div>
                          <div class='col-sm-7 col-sm-offset-1'>
                            <div class='form-group'>
                              <label>First name</label>
                              <input class='form-control' id='firstname' placeholder='First name' value='<?php echo $cust_firstname; ?>' type='text'>
                            </div>
                            <div class='form-group'>
                              <label>Last name</label>
                              <input class='form-control' id='lastname' placeholder='Last name' value='<?php echo $cust_lastname; ?>' type='text'>
                            </div>
                            <div class='form-group'>
                              <label>Address</label>
                              <input class='form-control' id='lastname' placeholder='Last name' value='<?php echo $cust_lastname; ?>' type='text'>
                            </div>

                            <div class='form-group'>
                              <label>Contact Number</label>
                              <input class='form-control' id='lastname' placeholder='Last name' value='<?php echo $cust_lastname; ?>' type='text'>
                            </div>
                            <div class='form-group'>
                              <label>Bio</label>
                              <textarea class='autosize form-control' id='bio' value='<?php echo $cust_bio; ?>' placeholder='Bio'></textarea>
                            </div>
                            <hr class='hr-normal'>
                            <div class='form-group'>
                              <div class='controls'>
                                <div class='checkbox'>
                                  <label>
                                    <input data-target='#change-password' data-toggle='collapse' id='changepasswordcheck' type='checkbox' value='option1'>
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
                              Save
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
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
</html>
