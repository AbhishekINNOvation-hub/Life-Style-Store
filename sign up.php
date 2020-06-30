<?php
require 'include/common.php';
 if (isset($_SESSION['email'])) {
 header('location: product.php');
    
}?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
        <?php   require 'include/header.php';?>
        <div class="container">
            <div class="row rowstyle">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1> SIGN UP</h1>
                        </div>
                        <div class="panel-body">
                            
                            <form method="post" action="signup_script.php">
                                <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                                <?php if(isset($_GET['error'])){
                                     echo $_GET['error'];

                                  }?>
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{8,}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contact" placeholder="Contact" pattern="[0-9]{10}">
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>
                                <?php
                                if(isset($_GET['blank'])){
                                    echo $_GET['blank'];
                                    echo '<br>';
                                }?>
                                <button type="submit" class="btn btn-primary">Submit</button>
                               </form>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php        require 'include/footer.php';?>
    </body>
</html>

