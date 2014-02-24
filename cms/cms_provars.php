<?php
//provars - used to refresh the product vartiations in real time

  include('../../connect.php');

  $pt_id = $_REQUEST["id"];

  $result = mysqli_query($con,"SELECT * FROM product_variation WHERE pv_t_id = ".$pt_id);

  while($row = mysqli_fetch_array($result))
  {
    $pv_id = $row['pv_id'];
    $weight = $row['pv_weight'];
    $serves = $row['pv_serves'];
    $price = $row['pv_price'];
    $quantity = $row['pv_quantity'];

    //echo '<h3>'.$name.'</h3>';
    //echo '<p>'.$desc.'</p>';
    //echo "<p><a class='btn btn-primary' href='single_product.php?id=$id' role='button'>View product &raquo;</a></p>";     

    echo '<tr>
      <td>'.$weight.'kg</td><td>Serves '.$serves.'</td>';
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
        echo '<td><form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">
                <input name="authenticity_token" type="hidden" />';
                
        if($quantity > 0)
        {
          echo '<input class="form-control" id="inputText1" placeholder="Add Quantity" type="text"></form></td>';
        }
        else
        {
          echo '<input class="form-control" disabled="" id="inputText1" placeholder="Add Quantity" type="text"></form></td>';
        }
                
        echo '</form></td>';
        echo "<td class='btnsave'>
          <div class='text-right'>";

            if($quantity > 0)
            {
              echo '<a class="btn btn-primary">Save</a>';
            }
            else
            {
              echo '<a class="btn btn-default disabled">Save</a>';
            }
            
    echo '</div>
      </td>
    </tr>';
    }

  mysqli_close($con);


?>