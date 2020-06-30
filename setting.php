<?php
   require 'include/common.php';
    if (!isset($_SESSION['email'])) 
    { header('location: index.php');}
?>
<html>
    <head>
        <title>Setting</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include 'include/header.php';
        ?>  
        
            <div class="container">
            <div class="row rowstyle">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1> Change Password</h1>
                        </div>
                        <div class="panel-body">
                            
                            <form method="post" action="setting_script.php">
                                
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Old Password" name="oldpassword">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password" name="newpassword">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Re-type New Password" name="retypepassword">
                                </div>

                            <button type="submit" class="btn btn-primary">Change</button>
                            </form>
                            
                            <?php if(isset($_GET['error'])){
                                        echo $_GET['error'];
                                        }  
                                      if(isset($_GET['final_error'])){
                                        echo $_GET['final_error'];
                                        }  
                                ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
         <?php
            include 'include/footer.php';
        ?>
    </body>
</html>
