<?php
require 'include/common.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);


                                    $data = $_POST;

                                    if (empty($data['name']) ||
                                        empty($data['email']) ||
                                        empty($data['password']) ||
                                        empty($data['contact']) ||
                                         empty($data['city']) ||
                                            empty($data['address']) )  {
                                        header('location: sign up.php?blank=Please fill all required fields');
                                        die('Please fill all required fields!');
                                        }
                                    
$select_query = "SELECT id FROM users WHERE email='$email'";
$result= mysqli_query($con,$select_query) or die(mysqli_error($con));
$no_of_row = mysqli_num_rows($result);
if($no_of_row>0)
{
    header('location: sign up.php?error=already exist');
}
 else
{
    $registration_query = "INSERT INTO users (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
    $result2 = mysqli_query($con, $registration_query)or die(mysqli_error($con));
    $_SESSION['id'] = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    header('location: product.php');
}
