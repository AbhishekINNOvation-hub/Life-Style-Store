<?php
require 'include/common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['id'];
//echo $item_id.$user_id;
$delect_query = "DELETE FROM `users_items` WHERE user_id = '$user_id' AND item_id = '$item_id'";
mysqli_query($con, $delect_query)or die(mysqli_error($con));
header('location: cart.php');
?>


