<?php
  
  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

  include('../../connect.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Products | J.Jones Butchers</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='assets/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='assets/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='assets/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='assets/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!-- / START - page related stylesheets [optional] -->
    <link href="assets/stylesheets/plugins/jquery_fileupload/jquery.fileupload-ui.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="assets/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="assets/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="assets/stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / demo file [not required!] -->
    
    <link href="assets/stylesheets/jones.css" media="all" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
      <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class='contrast-sea-blue '>

     <!--<p>Content here. <a class="alert" href=#>Alert!</a></p>-->
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
                  <div class='col-sm-12'>
                    <div class='page-header'>
                      <h1 class='pull-left'>
                        <i class='icon-barcode'></i>
                        <span>Products</span>
                      </h1>
                    </div>

                    <div class='row box box-transparent'>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link blue-background'>
                    <a href='cms_cats.php'>
                      <div class='header'>
                        <div class='icon-barcode'></div>
                      </div>
                      <div class='content'>Categories</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link green-background'>
                    <a href='cms_products.php'>
                      <div class='header'>
                        <div class='icon-inbox'></div>
                      </div>
                      <div class='content'>Types</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link orange-background'>
                    <a href='#'>
                      <div class='header'>
                        <div class='icon-food'></div>
                      </div>
                      <div class='content'>Recipes</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link blue-background'>
                    <a href='cms_customers.php'>
                      <div class='header'>
                        <div class='icon-user'></div>
                      </div>
                      <div class='content'>Customers</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link purple-background'>
                    <a href='#'>
                      <div class='header'>
                        <div class='icon-wrench'></div>
                      </div>
                      <div class='content'>Settings</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link red-background'>
                    <a href='#'>
                      <div class='header'>
                        <div class='icon-lock'></div>
                      </div>
                      <div class='content'>Admin</div>
                    </a>
                  </div>
                </div>
              </div>



                    <div class='row'>
                      <div class='col-sm-12'>
                        <div class='box'>
                          <div class='box-content'>

                            <div id="product_table" class='box bordered-box blue-border' style='margin-bottom:0;'>
                              <div class='box-header orange-background'>
                                <div class='title'>Add a new Product Category</div>
                              </div>
                              
                                <div class='responsive-table'>
                                  <table class='table' style='margin-bottom:0;'>
                                    <thead>
                                      <tr>
                                        <th>
                                          Name
                                        </th>
                                        <th>
                                          Description
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                          <tr>
                                            <form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">
                                              <td width="30%"><input class="form-control" id="catname" type="text" ></td>
                                              <td width="60%"><input class="form-control" id="catdesc" type="text" ></td>
                                              <td class="addcat" width="10%"><a href="#" class="btn btn-warning">Add</a></td>
                                            </form>
                                          </tr>
                                    </tbody>
                                  </table>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div>

                    <div class='row'>
                      <div class='col-sm-12'>
                        <div class='box'>
                          <div class='box-content'>

                            <div id="product_table" class='box bordered-box blue-border' style='margin-bottom:0;'>
                              <div class='box-header blue-background'>
                                <div class='title'>Existing Product Categories</div>
                              </div>
                              <div class='box-content box-no-padding'>
                                <div class='responsive-table'>
                                  <table class='table' style='margin-bottom:0;'>
                                    <thead>
                                      <tr>
                                        <th>
                                          No.
                                        </th>
                                        <th>
                                          Name
                                        </th>
                                        <th>
                                          Description
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody class="cats">
                                      <?php

                                        $catresult = mysqli_query($con,"SELECT * FROM product_categories");

                                        echo '<form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">'; 
                                          while($catrow = mysqli_fetch_array($catresult))
                                          {
                                            
                                            $catid = $catrow['pc_id'];
                                            $catname = $catrow['pc_name'];
                                            $catdesc = $catrow['pc_desc'];

                                          echo '<tr>
                                            <td width="5%"><a id='.$catid.'>#'.$catid.'</a></td>
                                            <td width="20%"><input class="form-control" id="catname_'.$catid.'" type="text" value="'.$catname.'"></td>
                                            <td width="65%"><input class="form-control" id="catdesc_'.$catid.'" type="text" value="'.$catdesc.'"></td>
                                            <td width="10%"><a href="cms_products.php?catid='.$catid.'" class="btn btn-primary">View Products</a></td>
                                            <td class="btnsave" width="8%"><a id='.$catid.' class="btn btn-primary">Save</a></td>
                                            <td class="btndelete" width="10%"><a id='.$catid.' class="btn btn-danger disabled">Delete</a></td>
                                          </tr>';
                                          
                                          }
                                        echo '</form>';

                                      ?>

                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      


              <!-- adding a category functionality -->

              
              <!-- end add category functionality -->

    
              <!-- so product types can be added-->

              
              <!-- end of type add functionality -->

            
              <!-- end of product table -->  

              <!-- editing area for variations-->

    
              <!-- end variation editing area-->

    
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
    <script src="assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery migrate (for compatibility with new jquery) [required] -->
    <script src="assets/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="assets/javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="assets/javascripts/theme.js" type="text/javascript"></script>
    
    <script src="assets/javascripts/bootbox.min.js" type="text/javascript"></script>

    <script>
      $(document).ready(function(){
        $.ajaxSetup({cache:false});


        $('.btnsave').live("click",function() {
        var href = $(this).find("a").attr("id");
        if(href) {
            var catname = document.getElementById("catname_"+href).value;
            var catdesc = document.getElementById("catdesc_"+href).value;
            $('.cats').load('editcats.php',{'id':href,'catname':catname, 'catdesc':catdesc});
            //alert(href + "," + catname + "," + catdesc);
            }
        });

        $('.addcat').live("click",function() {
        //var href = $(this).find("a").attr("id");
        //if(href) {
            var catname = document.getElementById("catname").value;
            var catdesc = document.getElementById("catdesc").value;
            $('.cats').load('addcats.php',{'catname':catname, 'catdesc':catdesc});
           // }
        });

        //setInterval(function(){
          //var i = document.getElementById("ptid").value;
          //$('#pro_vars').load('provars.php',{'id':i});
        //},3000);



      });

    </script>

     <script>
//$(document).on("click", ".alert", function(e) {
//bootbox.alert("Hello world!", function() {
//console.log("Alert Callback");
//});
//});
</script>

  </body>
</html>
