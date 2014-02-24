<?php
	session_start();
  
  include('../../../connect.php');

  //$cust_id = $_REQUEST["custid"];

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Orders | J. Jones Butchers</title>
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
              <div id='orders'>
                <div class='row'>
                  <div class='col-sm-4'>
                    <div class='page-header'>
                      <h1 class='pull-left'>
                        <i class='icon-inbox'></i>
                        <span>Orders</span>
                      </h1>
                    </div>
                    <div class='row' id='list'>
                      <div class='col-sm-12'>
                        <div class='box'>
                          <div class='box-content' id='orders'>

                            <?php
                            $result = mysqli_query($con,"SELECT * FROM orders O LEFT JOIN customer_profiles C ON O.order_cust_id = C.cust_id ORDER BY order_id ASC");

                            while($row = mysqli_fetch_array($result))
                            {
                              $orderno = $row['order_id'];
                              $orderdate = $row['order_date'];
                              $order_status = $row['order_status'];

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

                              echo "<div class='pull-left'>
                              <p>
                                <a id='$orderno'>
                                  <strong>#$orderno</strong>
                                  $cust_firstname $cust_lastname
                                </a>
                              </p>
                              <p>
                                <span class='label label-warning'>In process</span>
                              </p>
                            </div>
                            <div class='text-right pull-right'>
                              <h4 class='contrast price'>$12.00</h4>
                              <p>
                                <span class='timeago fade has-tooltip' data-placement='top' title='$orderdate'>April 13, 2013 - 07:30</span>
                                <i class='icon-time'></i>
                              </p>
                            </div>
                            <div class='clearfix'></div>
                            <hr class='hr-normal'>
                            ";


                            }

                            ?>

                          </div>
                          <div class='text-center'>
                            <ul class='pagination'>
                              <li class='disabled'>
                                <a href='#'>
                                  <i class='icon-angle-left'></i>
                                </a>
                              </li>
                              <li class='active'>
                                <a href='#'>
                                  1
                                </a>
                              </li>
                              <li>
                                <a href='#'>2</a>
                              </li>
                              <li>
                                <a href='#'>3</a>
                              </li>
                              <li>
                                <a href='#'>4</a>
                              </li>
                              <li>
                                <a href='#'>5</a>
                              </li>
                              <li>
                                <a href='#'>
                                  <i class='icon-angle-right'></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class='col-sm-8'>
                    <div class='page-header'>
                      <h1 class='pull-left'>
                        <span>#001</span>
                      </h1>
                    </div>
                    <div class='row' id='detail'>
                      <p>go here please!</p>
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
    <script src="../assets/javascripts/plugins/timeago/jquery.timeago.js" type="text/javascript"></script>
    <!-- / END - page related files and scripts [optional] -->

    <script>
      $(document).ready(function(){
        $.ajaxSetup({cache:false});

        $('#orders p').click(function() {
        var href = $(this).find("a").attr("id");
        if(href) {
            $('#detail').load('order_products.php',{'id':href});
            }
        });

      });
    </script>

  </body>
</html>
