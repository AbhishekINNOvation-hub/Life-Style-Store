<?php 
require  'include/common.php';
if (isset($_SESSION['email'])) {
 header('location: product.php');
    
}?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
       <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
        <?php include 'include/header.php';?>     
        <div class="container">
            <div class="row rowstyle">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1> LOGIN</h1>
                        </div>
                        <div class="panel-body">
                            <p>Login to make a Purchase</p>
                            <form method="POST" action="login_submit.php">
                                
                                <input type="email" name="email" class="form-control"  placeholder="email"><br>
                                <input type="password" name="password" class="form-control"  placeholder="password"><br>
                                <button type="submit" class="btn btn-primary" >Login</button>
                            </form>
                                  
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="sign up.html">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php';?>
    </body>
</html>


