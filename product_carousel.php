  <?php

  include('../../connect.php');
  //lets get the product category so we can display similar products on the carousel
  $pt_id = $_REQUEST["id"];

  $result = mysqli_query($con,"SELECT * FROM product_type WHERE pt_id = $pt_id");
  while($row = mysqli_fetch_array($result))
  {
    $pt_cat = $row['pt_cat'];
  }

  $catresult = mysqli_query($con,"SELECT * FROM product_type WHERE pt_cat = $pt_cat");

  //this counts to 4, so we can have an active firest set on products
  $count = 0;

  echo '<div id="boot3" class="carousel slide"><!-- class of slide for animation -->
          <!-- start of product carousel -->
            <div class="carousel-inner">';
              
              echo '<div class="item active"><!-- class of active since its the first item -->';

              while($catrow = mysqli_fetch_array($catresult))
              {
                $pro_id = $catrow['pt_id'];
                $pt_name = $catrow['pt_name'];
                $pt_desc = $catrow['pt_desc'];
				$pt_image = $catrow['pt_image'];

                if($count < 4)
                {                  
                  if($pt_id != $pro_id)
                  {
                    echo '<div class="col-sm-3">';
						
						if($pt_image == '')
						{
							echo '<img id="product_image" src="http://placehold.it/250x100/143249/fff&text=Product Image" alt="oh no where\'s my image!" title="oh no where\'s my image!"/>';
						}
						else
						{
							echo '<img width="250px" height="100px" src="stock/'.$pt_image.'" alt="Jones Finest '.$name.'"title="Jones Finest '.$name.'">';
						}
                      
                      echo '<h3>'.$pt_name.'</h3>
                      <p>'.$pt_desc.'</p>
                      <p><a href="single_product.php?id='.$pro_id.'" class="btn btn-primary">Buy now</a>&nbsp;</p>
                    </div>';
                    $count++;
                  }
                    
                  
                }
                if($count == 4)
                {
                  echo '</div>'; //end the active item
                  echo '<div class="item"><!-- class of active since its the first item -->';
                }
                if(($count == 8) || ($count == 12)|| ($count == 16)|| ($count == 20))
                {
                    echo '<div class="item"><!-- class of active since its the first item -->';
                }
                if($count > 3)
                {
                  if($pt_id != $pro_id)
                  {
                    echo '<div class="col-sm-3">
                      <img width="250px" height="100px" src="http://placehold.it/250x100" alt="product name">
                      <h3>'.$pt_name.'</h3>
                      <p>'.$pt_desc.'</p>
                      <p><a href="single_product.php?id='.$pro_id.'" class="btn btn-primary">Buy now</a>&nbsp;</p>
                    </div>';
                    $count++;
                  }
                }
                if(($count == 4) || ($count == 8)|| ($count == 12)|| ($count == 16)|| ($count == 20))
                {
                  echo '</div>';
                }
                

                
              }
            echo '</div><!-- /.carousel-inner -->';

   ?>

     

           <!-- <div class="item active"><!-- class of active since it's the first item 

              <div class="col-sm-3">
              <img width="250px" height="100px" src="stock_images/leg.jpg" alt="product name">
                <h3>Product 1</h3>
                <p>
                  Few attractive words about your product.Few attractive words about your product.
                </p>
                <p>
                  <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                  <a href="#" class="btn">Read more</a>
                </p>
              </div>    

              <div class="col-sm-3">
              <img src="http://placehold.it/250x100" alt="product name">
                <h3>Product 2</h3>
                <p>
                  Few attractive words about your product.Few attractive words about your product.
                </p>
                <p>
                  <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                  <a href="#" class="btn">Read more</a>
                </p>
              </div>

              <div class="col-sm-3">
              <img src="http://placehold.it/250x100" alt="product name">
                <h3>Product 3</h3>
                <p>
                  Few attractive words about your product.Few attractive words about your product.
                </p>
                <p>
                  <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                  <a href="#" class="btn">Read more</a>
                </p>
              </div>  

              <div class="col-sm-3">
              <img src="http://placehold.it/250x100" alt="product name">
                <h3>Product 4</h3>
                <p>
                  Few attractive words about your product.Few attractive words about your product.
                </p>
                <p>
                  <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                  <a href="#" class="btn">Read more</a>
                </p>
              </div> 
            </div><!--end of item active

            <div class="item"><!-- class of an itemthat is hidden at the start 

              <div class="col-sm-3">
              <img src="http://placehold.it/250x100" alt="product name">
                <h3>Product 5</h3>
                <p>
                  Few attractive words about your product.Few attractive words about your product.
                </p>
                <p>
                  <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                  <a href="#" class="btn">Read more</a>
                </p>
              </div>    

              <div class="col-sm-3">
              <img src="http://placehold.it/250x100" alt="product name">
                <h3>Product 6</h3>
                <p>
                  Few attractive words about your product.Few attractive words about your product.
                </p>
                <p>
                  <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                  <a href="#" class="btn">Read more</a>
                </p>
              </div>

              <div class="col-sm-3">
              <img src="http://placehold.it/250x100" alt="product name">
                <h3>Product 7</h3>
                <p>
                  Few attractive words about your product.Few attractive words about your product.
                </p>
                <p>
                  <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                  <a href="#" class="btn">Read more</a>
                </p>
              </div>  

              <div class="col-sm-3">
              <img src="http://placehold.it/250x100" alt="product name">
                <h3>Product 8</h3>
                <p>
                  Few attractive words about your product.Few attractive words about your product.
                </p>
                <p>
                  <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                  <a href="#" class="btn">Read more</a>
                </p>
              </div> 
            </div><!--end of item active
        </div><!-- /.carousel-inner -->
        <!--  Next and Previous controls below
        href values must reference the id for this carousel 
        <a class="carousel-control left" href="#boot3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="carousel-control right" href="#boot3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
      