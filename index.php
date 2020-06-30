
<?php 
require  'include/common.php';
 if (isset($_SESSION['email'])) {
 header('location: product.php');
    
}?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php include 'include/header.php';?>
      <div id="background">
           <center>
            <div id="content">
               
                <h1>We sell lifestyle</h1>
                <p>Flat 40 OFF on premium product</p>
                <a href="product.php"><button type="button">Shop Now</button></a>
                
            </div>
            </center>
        </div>
           <div class="container product">
            <div class="row" >
                <div class="col-sm-4 thumbnail">
                    <a href="#"><img src="img/camera.jpg"></a>
                    <div>
                        <center>
                        <h3>Camera</h3>
                        <p>Choose among the best available in the world</p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-4 thumbnail">
                    <a href="#"><img src="img/watch.jpg"></a>
                    <center>
                        <h3>watch</h3>
                        <p> Original watches from the best brand</p>
                        </center>
                </div>
                <div class="col-sm-4 thumbnail">
                    <a href="#"><img src="img/shirt.jpg"></a>
                    <center>
                        <h3>shirt</h3>
                        <p>Our exquisite collection of shirts</p>
                        </center>
                </div>
            </div>
        </div>
<?php include 'include/footer.php';?>  
           
    </body>
</html>
