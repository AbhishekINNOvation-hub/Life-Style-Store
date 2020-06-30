<?php 
require  'include/common.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
 
     <?php        require 'include/header.php';?>
                  
     
        <div class="container ">
            <div class="table-resposive">
                <center>
                    <table class="table table-striped rowstyle">
                    <tbody>
                        <tr>
                            <td>Item Number</td>
                            <td>Item Name</td>
                            <td>Price</td>
                            <td></td>
                        </tr>
                          <?php $user_id = $_SESSION['id'];
                  $select_query = "SELECT ui.id,ui.item_id,i.name,i.price FROM users_items ui INNER JOIN items i ON i.id = ui.item_id WHERE user_id = '$user_id' AND status = 'Added to cart'";
                  $result = mysqli_query($con, $select_query);
                  $sum=0;
                  if (mysqli_num_rows($result)==0) {
                      echo "Add item to cart first!";
                  }
                  else
                  {   
                     $sum=0;
                     $i=0;
                      while ($row=mysqli_fetch_array($result))
                      {
                          $i++;
                          $sum += $row['price'];
                          $id = $row['item_id'].',';
                          
                        
                          $_SESSION['item_id'] = $row['item_id'];
                         echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$row['name'].$id.'</td>
                            <td>'.$row['price'].'</td>
                            <td> <a href="cart-remove.php?id='.$row['item_id'].'" class="remove_item_link"> Remove</a> </td>
                        </tr>';
                          }
                  }
                          ?>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs <?php echo $sum.'/-';?></td>
                            <td> <a href="success.php"><button type="button" class="btn btn-primary">Confirm Order</button></a></td>
                        </tr>
                    </tbody>
                
                </table>
                </center>
                
            </div>
         
        </div>  
        <?php     require 'include/footer.php';?>
    </body>
</html>


