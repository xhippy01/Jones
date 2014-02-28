<?php
session_start();
//now lets include a header for each page
$email = '';
$cust_id = '';

if(isset($_SESSION['valid_user']))
{				   
	$email = $_SESSION['valid_user'];
}
if(isset($_SESSION['cust_id']))
{
	$cust_id = $_SESSION['cust_id'];
}

include('../../connect.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>J. Jones - Hog Roast Specialists</title>

	<!-- Custom styles for this template -->
    <!--<link href="js/justified-nav.css" rel="stylesheet">-->
    
    <!-- Bootstrap core CSS 
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="css/jones.css" rel="stylesheet">-->

  <!-- / bootstrap [required] -->
    <link href="assets/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="assets/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="assets/stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/jones.css" media="all" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class='contrast-sea-blue'>
  <div id="outer-container">
    <div class="container">
           
      <?php

      include('header.php');

      ?>

    <!-- Navbar
      ================================================== -->
      
      <?php

      include('navigation.php');

      ?>

          </div>
        </div>
      </div>


<div class='box-content'>
<div class="row">
<div class="col-lg-6">
<img src="assets/images/pages/Team_Shot_Hog.jpg" />
<img src="assets/images/pages/dingleylogo.png" />
<img src="assets/images/pages/hygene.jpg" />
</div>
<div class="col-lg-6">
<h2>Hog Roast Specialists</h2>

<p>Welcome to J Jones of Whittlesey – The Hog Roast Specialists, a local company with a growing reputation for cooking delicious hog roasts, tailored to suit your individual needs.</p>

<p>Based in Cambridgeshire, we cater for all types of functions – Corporate events, birthdays, christenings, weddings or just that special occasion. We specialize in cooking Dingly Dell Free Range, farm reared pigs on the spit which is a delight for all to see. Our hog roasts are cooked on site for around 7 hours – ensuring that your guests enjoy the theatre and spectacle of the event – producing delicious succulent pork every time.</p>

<p>Our qualified, professional staff always serve in chefs whites and our service includes.</p>
<ul>
    <li>Dingly Dell Free Range, Farm Reared Pork</li>
    <li>Delicious bread buns (baked the same day as the function)</li>
    <li>Plates and serviettes</li>
    <li>Home-made apple sauce</li>
    <li>Sage and Onion Stuffing</li>
    <li>Perfect Crunchy Crackling</li>
    <li>Mouth-Watering Pork</li>
</ul>
<p>Whether it is a party for 80 or a corporate day for 300, we will take all the stress away from you and ensure it is a day for you and your guests to remember</p>

<p>Please take a few minutes to look at our menu options and decide on the best choices for you</p>

<p>J.Jones Hog Roast – The local company with a personal service.</p>
</div>
</div>      

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-6">
          <blockquote>
            <p><i>Speechless! That rib eye was out of this world! :) x</i></p>
            <small id="sm">
              Caroline Muckle
            </small>
          </blockquote>
        </div>
        <div class="col-lg-6">
          <blockquote class="pull-right">
            <p><i>Top quality meat at a reasonable price, you most definitely get what you pay for and service with a smile so can't be bad... :-)</i></p>
            <small id="sm">
              Angie Metcalfe
            </small>
          </blockquote>
        </div>
      </div>

      <!-- index page widgets -->
      <div class="footer">
          <div class="row">
          <div class="col-lg-3">
            <h2>Menu 1</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-info" href="#" role="button">View menu 1 &raquo;</a></p>
          </div>
          <div class="col-lg-3">
            <h2>Menu 2</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-info" href="#" role="button">View menu 2 &raquo;</a></p>
         </div>
          <div class="col-lg-3">
            <h2>Menu 3</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class="btn btn-info" href="#" role="button">View menu 3 &raquo;</a></p>
          </div>
		  <div class="col-lg-3">
            <h2>Menu 3</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class="btn btn-info" href="#" role="button">View menu 4 &raquo;</a></p>
          </div>
        </div>
      </div>

      <?php



      include('footer.php');

      ?>

    <!--<script src="js/bootswatch.js"></script>-->
    <script>
      $(document).ready(function(){
        $('.carousel').carousel();
      });
    </script>
  </body>
</html>
