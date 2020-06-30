<?php
require  'include/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password =mysqli_real_escape_string($con,$_POST['password']);

$select_query = "SELECT id,email FROM users WHERE email= '$email' AND password= '$password'";
$result= mysqli_query($con, $select_query) or die(mysqli_errno($con));
$no_of_row= mysqli_num_rows($result);
if($no_of_row==0)
{
    header('location:login.php');
}
 else 
{
    $row= mysqli_fetch_array($result);
    $_SESSION['email']=$email;
    $_SESSION['id']= $row['id'];
    
    
    header('location:product.php');
}
?>
