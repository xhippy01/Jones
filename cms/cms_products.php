<?php
  
  include('../../../connect.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Products | J.Jones Butchers</title>
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
    <link href="../assets/stylesheets/plugins/jquery_fileupload/jquery.fileupload-ui.css" media="all" rel="stylesheet" type="text/css" />
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
                        <i class='icon-barcode'></i>
                        <span>Products</span>
                      </h1>
                    </div>
                    <div class='row'>
                      <div class='col-sm-12'>
                        <div class='box'>
                          <div class='box-content'>

                    <div id="product_table" class='box bordered-box blue-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                  <div class='title'>Product Categories</div>
                </div>
                <div class='box-content box-no-padding'>
                  <div class='responsive-table'>
                    <table class='table' style='margin-bottom:0;'>
                      <thead>
                        <tr>
                          <th>
                            Category
                          </th>
                          <th>
                            Name
                          </th>
                        </tr>
                      </thead>
                      <tbody id="pro_cats">
                        <?php

                          $catresult = mysqli_query($con,"SELECT * FROM product_categories");

                            while($catrow = mysqli_fetch_array($catresult))
                            {
                              
                              $catid = $catrow['pc_id'];
                              $catname = $catrow['pc_name'];
                              //$catdesc = $catrow['pc_desc'];

                            echo '<tr>
                              <td><a id='.$catid.'>#'.$catid.'</a></td>

                              <td>'.$catname.'</td>';

                            echo '</tr>';
                            
                            }

                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <!-- adding a category functionality -->

              <div id="product_table" class='box bordered-box blue-border' style='margin-bottom:0;'>
                <div class='box-header orange-background'>
                  <div class='title'>Add Product Category</div>
                </div>
                <div class='box-content box-no-padding'>
                  <div class='responsive-table'>
                    <table class='table' style='margin-bottom:0;'>
                      <thead>
                        <tr>
                          
                          <th>
                            Name
                          </th>
                        </tr>
                      </thead>
                      <tbody id="pro_cats">
                        <tr>
                          <form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">
                              <td><input class="form-control" id="inputText1" type="text" ></td>

                              <td>
                                <div class='text-right'>

                                  <a href="#" class="btn btn-warning">Add</a>
                                    
                                </div>
                              </td>
                          </form>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>  

              <!-- end add category functionality -->

                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class='col-sm-8'>
                    <div class='page-header'>
                      <h1 class='pull-left'>
                        
                      </h1>
                    </div>

                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='box'>
                        <div class='box-content'>
                            
                        <div id="product_table" class='box bordered-box blue-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                  <div class='title'>Product Types</div>
                </div>
                <div class='box-content box-no-padding'>
                  <div class='responsive-table'>
                    <table class='table' id="product_table" style='margin-bottom:0;'>
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Name
                          </th>
                          
                          <th>
                            Featured
                          </th>
                        </tr>
                      </thead>
                      <tbody id="pro_types">
                        <?php

                          $proresult = mysqli_query($con,"SELECT * FROM product_type WHERE pt_cat = 1");
                          //$proresult = mysqli_query($con,"SELECT * FROM product_variation WHERE pv_t_id = $pt_id");

                          while($prorow = mysqli_fetch_array($proresult))
                          {
                            $proid = $prorow['pt_id'];
                            $proname = $prorow['pt_name'];
                            $profeatured = $prorow['pt_feature'];
                            
                            echo '<tr>
                              <td><form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">
                              <a id='.$proid.'>#'.$proid.'</a></td>

                              <td><input class="form-control" id="inputText1" type="text" value="'.$proname.'"></td>

                              <td><input class="form-control" id="inputText1" type="text" value="'.$profeatured.'"></td>';
                            
                            echo "<td>
                                  <div class='text-right'>";

                                      echo '<a href="#" class="btn btn-primary">Save</a>';
                                    
                              echo '</div>
                              </td>
                              </tr>';
                            }


                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- so product types can be added-->

              <div id="product_table" class='box bordered-box blue-border' style='margin-bottom:0;'>
                <div class='box-header orange-background'>
                  <div class='title'>Add Product Type</div>
                </div>
                <div class='box-content box-no-padding'>
                  <div class='responsive-table'>
                    <table class='table' id="product_table" style='margin-bottom:0;'>
                      <thead>
    
                      </thead>
                      <tbody id="pro_types">
                        
                            
                      <tr>
                      <div class='box-content'>
                              <form class="form" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8"><input name="authenticity_token" type="hidden" /><div class='form-group'>
                        <label for='inputText'>Product Name</label>
                        <input class='form-control' id='inputText' type='text'>
                      </div>
                      <div class='form-group'>
                        <label for='inputTextArea'>Product Description</label>
                        <textarea class='form-control' id='inputTextArea' placeholder='Your full product description should be entered in here.' rows='3'></textarea>
                      </div>
                      <div class='form-group'>
                        <label>Product Image</label>
                        <div class='box-content'>
                      <form action='//jquery-file-upload.appspot.com/' enctype='multipart/form-data' id='fileupload' method='POST'>
                        <div class='row fileupload-buttonbar'>
                          <div class='col-sm-7'>
                            <span class='btn btn-success fileinput-button'>
                              <i class='icon-plus icon-white'></i>
                              <span>Add image...</span>
                              <input data-bfi-disabled='' multiple='' name='files[]' type='file'>
                            </span>
                            <button class='btn btn-primary start' type='submit'>
                              <i class='icon-upload icon-white'></i>
                              <span>Start upload</span>
                            </button>
                            
                          </div>
                          <div class='col-sm-5 fileupload-progress fade'>
                            <div aria-valuemax='100' aria-valuemin='0' class='progress progress-success progress-striped active' role='progressbar'>
                              <div class='bar' style='width:0%;'></div>
                            </div>
                            <div class='progress-extended'> </div>
                          </div>
                        </div>
                        <div class='fileupload-loading'></div>
                        <br>
                        <table class='table table-striped' role='presentation'>
                          <tbody class='files' data-target='#modal-gallery' data-toggle='modal-gallery'></tbody>
                        </table>
                      </form>
                    </div>
                      </div>
                      
                      
                        <div class='btn btn-warning text-right'>
                          
                          Add
                        </div>
                      
                      </form>
              
                    </div>
                              
                    </td>
                    </tr>
    

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <!-- end of type add functionality -->

            </div>
          </div>
        </div>
      </div>  

                    <div class='row' id='detail'>
                      <div class='col-sm-12'>
                        <div class='box'>
                          <div class='box-content'>
                            
                            <div id="product_table" class='box bordered-box blue-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                  <div class='title'>Product Variations</div>
                </div>
                <div class='box-content box-no-padding'>
                  <div class='responsive-table'>
                    <table class='table' style='margin-bottom:0;'>
                      <thead>
                        <tr>
                          <th>
                            Weight (kg)
                          </th>
                          <th>
                            Serves
                          </th>
                          <th>
                            Availability?
                          </th>
                          <th>
                            Cost (£)
                          </th>
                          <th>
                            Quantity
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody id="pro_vars">
                        <?php

                          $result = mysqli_query($con,"SELECT * FROM product_variation WHERE pv_t_id = 2");


                          echo '<form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">';
                          while($row = mysqli_fetch_array($result))
                          {
                            $pv_id = $row['pv_id'];
                            $weight = $row['pv_weight'];
                            $serves = $row['pv_serves'];
                            $price = $row['pv_price'];
                            $quantity = $row['pv_quantity'];

                            echo '<tr>
                              <td>
                              <input class="form-control" id="inputText1" type="text" value="'.$weight.'"></td>

                              <td><input class="form-control" id="inputText1" type="text" value="'.$serves.'"></td>';

                                if($quantity == 0)
                                {
                                  $label = "<td><span class='label label-important'>Out of Stock</span></td>";
                                }
                                else if($quantity <= 10)
                                {
                                  $label = "<td><span class='label label-warning'> Low Stock  </span></td>";
                                }
                                else if($quantity > 10)
                                {
                                  $label = "<td><span class='label label-success'>  In Stock  </span></td>";
                                }
                                echo $label;
                                echo '<td><input class="form-control" id="inputText1" type="text" value="'.$price.'"></td>';
                                echo '<td><form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">';
                                echo '<input name="authenticity_token" type="hidden" />';

                                echo '<input class="form-control" id="inputText1" type="text" value="'.$quantity.'"></form></td>';
                
                                echo '</td>';
                                echo "<td>
                                  <div class='text-right'>";

                                      echo '<a href="#" class="btn btn-primary">Save</a>';
                                    
                              echo '</div>
                              </td>
                            </tr>';
                            }
                            echo '</form>';

                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- end of product table -->  

              <!-- editing area for variations-->

              <div class='box bordered-box blue-border' style='margin-bottom:0;'>
                <div class='box-header orange-background'>
                  <div class='title'>Add Product Variation</div>
                </div>
                <div class='box-content box-no-padding'>
                  <div class='responsive-table'>
                    <table class='table' id="product_table" style='margin-bottom:0;'>
                      <thead>
                        <tr>
                          <th>
                            Weight (kg)
                          </th>
                          <th>
                            Serves
                          </th>
                          <th>
                            Cost (£)
                          </th>
                          <th>
                            Quantity
                          </th>
                          
                        </tr>
                      </thead>
                        <tr>
                        <form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">

                            <td>
                            <input class="form-control" id="inputText1" type="text" ></td>

                            <td><input class="form-control" id="inputText1" type="text" ></td>

                          
                              <td><input class="form-control" id="inputText1" type="text"></td>
                      
                              

                              </td><input class="form-control" id="inputText1" type="text" ></td>
              
                              </td>
                              <td>
                                <div class='text-right'>

                                    <a href="#" class="btn btn-primary">Save</a>
                                  
                            </div>
                            </td>
                           </form> 
                          </tr>
                          
                        </table>
                        </div>
                      </div>


              <!-- end variation editing area-->

              <div class='row'>
                <div class='col-sm-4'>
                  <div class='lead'>
                    <i class='icon-barcode contrast'></i>
                    Product Description
                  </div>
                </div>
                <div class='col-sm-7 col-sm-offset-1'>
                  <p>Description of product will be written here and displayed in the site
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-4'>
                  <div class='lead'>
                    <i class='icon-picture contrast'></i>
                    Product Image
                  </div>
                </div>
                <div class='col-sm-7 col-sm-offset-1'>
                  <img width="250px" height="250px" src="http://placehold.it/250x250" alt="product name">
                </div>
              </div>
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

    <script id="template-upload" type="text/x-tmpl">
                {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-upload fade">
                  <td class="preview"><span class="fade"></span></td>
                  <td class="name"><span>{%=file.name%}</span></td>
                  <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
                  {% if (file.error) { %}
                  <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
                  {% } else if (o.files.valid && !i) { %}
                  <td>
                    <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
                  </td>
                  <td>{% if (!o.options.autoUpload) { %}
                    <button class="btn btn-primary start">
                      <i class="icon-upload icon-white"></i>
                      <span>Start</span>
                    </button>
                    {% } %}</td>
                  {% } else { %}
                  <td colspan="2"></td>
                  {% } %}
                  <td>{% if (!i) { %}
                    <button class="btn btn-warning cancel">
                      <i class="icon-ban-circle icon-white"></i>
                      <span>Cancel</span>
                    </button>
                    {% } %}</td>
                </tr>
                {% } %}
              </script>
              <!-- The template to display files available for download -->
              <script id="template-download" type="text/x-tmpl">
                {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-download fade">
                  {% if (file.error) { %}
                  <td></td>
                  <td class="name"><span>{%=file.name%}</span></td>
                  <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
                  <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
                  {% } else { %}
                  <td class="preview">{% if (file.thumbnail_url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="gallery" download="{%=file.name%}"><img src="{%=file.thumbnail_url%}"></a>
                    {% } %}</td>
                  <td class="name">
                    <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
                  </td>
                  <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
                  <td colspan="2"></td>
                  {% } %}
                  <td>
                    <button class="btn btn-danger delete" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="icon-trash icon-white"></i>
                    <span>Delete</span>
                    </button>
                    <input type="checkbox" name="delete" value="1" class="toggle">
                  </td>
                </tr>
                {% } %}
              </script>
    <script>
      $(document).ready(function(){
        $.ajaxSetup({cache:false});

        $('#pro_types tr').click(function() {
        var href = $(this).find("a").attr("id");
        if(href) {
            $('#pro_vars').load('cms_provars.php',{'id':href});
            }
        });

        $('#pro_cats tr').click(function() {
        var href = $(this).find("a").attr("id");
        if(href) {
            $('#pro_types').load('cms_procats.php',{'id':href});
            }
        });

        //setInterval(function(){
          //var i = document.getElementById("ptid").value;
          //$('#pro_vars').load('provars.php',{'id':i});
        //},3000);



      });

    </script>

  </body>
</html>
