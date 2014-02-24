<?php
//addcats - used to update the categories table

  include('../../connect.php');

  $catname = strip_tags($_REQUEST["catname"]);
  $catdesc = strip_tags($_REQUEST["catdesc"]);

  //$proresult = mysqli_query($con,"SELECT * FROM product_type WHERE pt_cat = ".$cat_id);
  //$proresult = mysqli_query($con,"SELECT * FROM product_variation WHERE pv_t_id = $pt_id");

  //while($prorow = mysqli_fetch_array($proresult))
  //{
    //$proid = $prorow['pt_id'];
    //$proname = $prorow['pt_name'];
    //$profeatured = $prorow['pt_feature'];
    
    //echo '<tr>
      //<td><a id='.$proid.'>#'.$proid.'</a></td>

      //<td>'.$proname.'</td>

      //<td>'.$profeatured.'</td>

    //</tr>';
    //}

    //mysqli_close($con);
if($catname != '')
{
  mysqli_query($con,"INSERT INTO product_categories (pc_name, pc_desc)
                                                  VALUES
                                                  ('$catname','$catdesc')");
}

//mysql_close($con);

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
            <td><textarea class="form-control" id="catdesc_'.$catid.'" rows="2">'.$catdesc.'</textarea></td>
            <td width="10%"><a href="#" class="alert btn btn-primary">View Products</a></td>
            <td id="btnsave" width="10%"><a id='.$catid.' class="alert btn btn-primary">Save</a></td>
          </tr>';
  }
  echo '</form>';
  mysqli_close($con);

?>