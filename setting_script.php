<?php
    require 'include/common.php';
    if (!isset($_SESSION['email'])) 
    { header('location: index.php');}
    $password= mysqli_real_escape_string($con,$_POST['oldpassword']);
    $new_password=mysqli_real_escape_string($con,$_POST['newpassword']);
    $retype_password=mysqli_real_escape_string($con,$_POST['retypepassword']);
    if(strlen($new_password)!= strlen($retype_password)){
        echo 'passwords not same';
    }
    $select_query="SELECT id,password FROM users WHERE password='$password'";
    $select_query_result= mysqli_query($con, $select_query);
    $rows_fetched= mysqli_num_rows($select_query_result);
    if($rows_fetched>0){
        if($new_password==$retype_password){
            $update_query="UPDATE users SET password='$new_password' WHERE password='$password'";
            $update_result= mysqli_query($con , $update_query);
            header('location: product.php');
        }
        else{
            
            header('location: settings.php?error=retype new password');
        }
        
    }
    else{
        
        header('location: settings.php?final_error=enter correct password');
        
    }
        
    ?>
