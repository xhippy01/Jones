<?php
//if(isset($_REQUEST["custid"]))
//{
	//$cust_id = $_REQUEST["custid"];
//}
//else
//{
	//$cust_id = '';
//}

?>


<div class="bs-example">
              
              <div class="navbar navbar-inverse">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">Home</a>
                </div>
                <div class="navbar-collapse collapse navbar-inverse-collapse">
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="single_product.php?id=1">Pork</a></li>
                        <li><a href="single_product.php?id=2">Beef</a></li>
                        <li><a href="single_product.php?id=3">Lamb</a></li>
                        <li><a href="single_product.php?id=4">Chicken</a></li>
                        <li><a href="single_product.php?id=5">Game</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">What else...</li>
                        <li><a href="#">Jars of delight</a></li>
                        <li><a href="#">Pies</a></li>
                      </ul>
                    </li>
                    <li><a href="recipes.html">Recipes</a></li>
                    <li><a href="#">Hog Roast</a></li>
                  </ul>
                  <?php
				  
				  if($cust_id != '')
				  {
					  echo '
					  <ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Basket</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
						  <ul class="dropdown-menu">
							<li><a href="cms/cms_user_profile.php?custid='. $cust_id .'">User Profile</a></li>
							<li><a href="cms/cms_cust_orders.php?custid='. $cust_id .'">Your Orders</a></li>
							<li><a href="cms/cms_orders.php">Orders (Simon Only)</a></li>
							
							<li><a href="#"></a></li>
							<li class="divider"></li>
							<li><a href="logout.php">Log out</a></li>
						  </ul>
						</li>
					  </ul>
					  ';
				  }
				  ?>
                </div><!-- /.nav-collapse -->
              </div><!-- /.navbar -->
            </div><!-- /example -->