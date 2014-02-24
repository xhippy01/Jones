<?php
//provars - used to refresh the product vartiations in real time

  include('../../connect.php');

  $cat_id = $_REQUEST["id"];

  $proresult = mysqli_query($con,"SELECT * FROM product_type WHERE pt_cat = ".$cat_id);
  //$proresult = mysqli_query($con,"SELECT * FROM product_variation WHERE pv_t_id = $pt_id");

  while($prorow = mysqli_fetch_array($proresult))
  {
    $proid = $prorow['pt_id'];
    $proname = $prorow['pt_name'];
    $profeatured = $prorow['pt_feature'];
    
    echo '<tr>
      <td><a id='.$proid.'>#'.$proid.'</a></td>

      <td>'.$proname.'</td>

      <td>'.$profeatured.'</td>

    </tr>';
    }

    mysqli_close($con);

?>