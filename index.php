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

    <title>J. Jones Homepage</title>

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


      <!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<!--<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation 
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item 
      <img src="images/banner.jpg" alt="" />
      <div class="carousel-caption">
        <button class="btn btn-info" type="button"><h1>Check out whats in store</h1></button>
      </div>
    </div>
    <div class="item">
      <img src="images/leg.jpg" alt="" />
      <div class="carousel-caption">
        <button class="btn btn-info" type="button"><h1>Grab a leg!</h1></button>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x400" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x400" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel 
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div> /.carousel -->

<div class='box-content'>
  <div class='carousel slide' id='myCarousel' style='margin-bottom:0;'>
    <ol class='carousel-indicators'>
      <li data-slide-to='0' data-target='#myCarousel'></li>
      <li data-slide-to='1' data-target='#myCarousel'></li>
      <li class='active' data-slide-to='2' data-target='#myCarousel'></li>
    </ol>
    <div class='carousel-inner'>
      <div class='active item'><img src="http://placehold.it/1200x400/550055/fff&text=You can have anything here" /></div>
      <div class='item'><img src="http://placehold.it/1200x=400/143249/fff&text=From recipes to products" /></div>
      <div class='item'><img src="http://placehold.it/1200x400/f34541/fff&text=Its your choice!" /></div>
    </div>
    <a class='left carousel-control' data-slide='prev' href='#myCarousel'>
      <span class='icon-circle-arrow-left icon-prev'></span>
    </a>
    <a class='right carousel-control' data-slide='next' href='#myCarousel'>
      <span class='icon-circle-arrow-right icon-next'></span>
    </a>
  </div>
</div>

<!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Featured Product</h2>
          <?php

            $result = mysqli_query($con,"SELECT * FROM product_type WHERE pt_feature = 1");

            while($row = mysqli_fetch_array($result))
            {
              $id = $row['pt_id'];
              $name = $row['pt_name'];
              $desc = $row['pt_desc'];

              echo '<h3>'.$name.'</h3>';
              echo '<p>'.$desc.'</p>';
              echo "<p><a class='btn btn-primary' href='single_product.php?id=$id' role='button'>View product &raquo;</a></p>";
            }
            ?>
          
        </div>
        <div class="col-lg-4">
          <h2>Featured Recipe</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View recipe &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Hog Roast</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
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
          <div class="col-lg-4">
            <h2>Widget1</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-info" href="#" role="button">View product &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <h2>Widget2</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-info" href="#" role="button">View recipe &raquo;</a></p>
         </div>
          <div class="col-lg-4">
            <h2>Widget3</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
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
