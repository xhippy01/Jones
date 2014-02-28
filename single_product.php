<?php
  //navigation file, lets only creat one of these hey!
  session_start();
  
  include('../../connect.php');

  $pt_id = $_GET["id"];

  $email = $_SESSION['valid_user'];
  $username = $_SESSION['valid_user'];
  $cust_id = $_SESSION['cust_id'];
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

    <title>Jones - Single Product Page</title>

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
    <link href="assets/stylesheets/jquery/jquery_ui.css" media="all" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
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

    <!-- end of navbar-->

          </div>
        </div>
      </div>
    </div>

    <div class="container"> 
      <div class="product_desc">
        <div class="row">
          <div class="col-sm-5">
		  <?php
		  $result = mysqli_query($con,"SELECT * FROM product_type WHERE pt_id = $pt_id");

            while($row = mysqli_fetch_array($result))
            {
				$image = $row['pt_image'];
				$name = $row['pt_name'];
				
				if($image == '')
				{
					echo '<img id="product_image" src="http://placehold.it/480x480/143249/fff&text=Product Image" alt="oh no where\'s my image!" title="oh no where\'s my image!"/>';
				}
				else
				{
					echo '<img id="product_image" height="480px" width="480px" src="stock/'.$image.'" alt="Jones Finest '.$name.'" title="Jones Finest '.$name.'"/>';
				}
			?>
            
          </div>
            <div class="col-sm-7" id="product_right">
              <div class="alert alert-info">
                <span class="glyphicon icon-info"></span><strong>&nbsp;&nbsp;Heads up!</strong> We reserve the right to be 10% in weight either side of the chosen order.
              </div>
              <div id="product_text">
                <?php

                  //do not remove, used to store pt_id to cheekely send to provars through jquery;)
                  echo '<form><input type="hidden" id="ptid" value="'.$pt_id .' "></input></form>';
				  echo '<form><input type="hidden" id="custid" value="'.$cust_id .' "></input></form>';
                  ///////////////////////////////////////////////////////////////////////////

                  
                    
                    $name = $row['pt_name'];
                    $desc = $row['pt_desc'];
					

                    echo '<h3>'.$name.'</h3>';
                    echo '<p>'.$desc.'</p>';
                    //echo "<p><a class='btn btn-primary' href='single_product.php?id=$id' role='button'>View product &raquo;</a></p>";               
                  }

                ?>
              </div>   
              <div id="product_table" class='box bordered-box blue-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                  <div class='title'>Choose your weight from the table below</div>
                </div>
                <div class='box-content box-no-padding'>
                  <div class='responsive-table'>
                    <table class='table' style='margin-bottom:0;'>
                      <thead>
                        <tr>
                          <th>
                            Weight
                          </th>
                          <th>
                            Serves
                          </th>
                          <th>
                            Availability?
                          </th>
                          <th>
                            Cost
                          </th>
                          <th>
                            Quantity
                          </th>
                          <th class='text-right'>
                            Add
                          </th>
                        </tr>
                      </thead>
                      <tbody id="pro_vars">
                        <?php

                          $result = mysqli_query($con,"SELECT * FROM product_variation WHERE pv_t_id = $pt_id");

                          while($row = mysqli_fetch_array($result))
                          {
                            $pv_id = $row['pv_id'];
                            $weight = $row['pv_weight'];
                            $serves = $row['pv_serves'];
                            $price = $row['pv_price'];
                            $quantity = $row['pv_quantity'];

                            echo '<tr>
                              <td>'.$weight.'kg</td>

                              <td>Serves '.$serves.'</td>';

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
                                echo '<td>£'.$price.'</td>';


                                //<form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8"><input name="authenticity_token" type="hidden" /><div class='form-group'>
                        //<label class='col-md-2 control-label' for='inputText1'>Text field</label>

                                echo '<td><form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">
                                <input name="authenticity_token" type="hidden" />';
								
                                  if($quantity > 0)
                                  {
                                    echo '<input class="form-control" id="quantity_'.$pv_id.'" placeholder="Add Quantity" type="text"></form></td>';
                                  }
                                  else
                                  {
                                    echo '<input class="form-control" disabled="" id="inputText1" placeholder="Add Quantity" type="text"></form></td>';
                                  }

                                //echo "<td><form class='form form-horizontal' style='margin-bottom: 0;' method='post' action='#' accept-charset='UTF-8'>
                                //<input name='authenticity_token' type='hidden' />
                                //<label class='col-md-2 control-label' for='inputText1'>Text field</label></form</td>";
                                echo "<td>
                                  <div class='text-right'>";

                                    if($quantity > 0)
                                    {
                                      echo '<div class="addbutton"><a id="'.$pv_id.'" class="btn btn-primary">Add to Basket</a></div>';
                                    }
                                    else
                                    {
                                      echo '<a class="btn btn-default disabled">Add to Basket</a>';
                                    }
                                    
                            echo '</div>
                              </td>
                            </tr>';
                            }

                          mysqli_close($con);

                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- end of product table -->  
            </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div id="single_carousel">
      <?php

      include('product_carousel.php');

      ?>
    </div>
    

    <?php

    include('footer.php');
    
    ?>

    <script>
      $(document).ready(function(){
        $.ajaxSetup({cache:false});

        $('.carousel').carousel();

        setInterval(function(){
          var i = document.getElementById("ptid").value;
          $('#pro_vars').load('provars.php',{'id':i});
        },30000);
		
		$('.addbutton').live("click",function() {
        var varid = $(this).find("a").attr("id");
		
        if(varid) {
            var custid = document.getElementById("custid").value;
			var quantity = document.getElementById("quantity_"+varid).value;
			if(quantity == 0)
			{
				alert("Please make sure you state a quantity");
			}
			else{
				$('#inbasket').load('add_to_basket.php',{'varid':varid,'custid':custid, 'quantity':quantity});
			}
			
			alert(varid + ", " + custid + ", " + quantity);
            
            }
        });
      });
    </script>
  </body>
</html>

