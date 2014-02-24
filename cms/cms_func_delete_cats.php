<?php
//editcats - to do just that;)

  include('../../connect.php');

  $catid = $_REQUEST["id"];


//we shouldny delete the row, we should only hide them.  That way they can be brought back 
//This way, if anybody had brought a product from the category, we will be able to tie it up

mysqli_query($con,"DELETE FROM product_categories WHERE pc_id = " . $catid);
mysqli_query($con,"DELETE FROM product_type WHERE pt_cat = " . $catid")


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
            
            <td width="10%"><a href="#" class="btn btn-primary">View Products</a></td>
            <td class="btnsave" width="8%"><a id='.$catid.' class="btn btn-primary">Save</a></td>
            <td class="btndelete" width="10%"><a id='.$catid.' class="btn btn-danger disabled">Delete</a></td>
          </tr>';
   }
  echo '</form>';
  mysqli_close($con);

?>