<?php
require 'include/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
 
     <?php    include 'include/header.php';
              require 'include/if-added.php';
              ;?>
        
        <div class="container">
        <div class="jumbotron">
            <center>
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have best camera,watches and shirts for you.No need to hunt around,we have all in one place</p>
            </center>
        </div>
            <div class="row product">
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/5.jpg"></a>
                        <center>
                            <h3>Cannon EOS</h3>
                            <p>Price: Rs 36000.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(1)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=1"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>          
                    </div>
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/2.jpg"></a>
                        <center>
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs 40000.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(2)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=2"><button type="button" class="btn btn-primary btn-block"  >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/3.jpg"></a>
                        <center>
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs 45000.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(3)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=3"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/4.jpg"></a>
                        <center>
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs 50000.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(4)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=4"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
            
            </div>
            <div class="row product">
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/9.jpg"></a>
                        <center>
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs 13000.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(5)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=5"><button type="button" class="btn btn-primary btn-block"  >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/10.jpg"></a>
                        <center>
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs 3000.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(6)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=6"><button type="button" class="btn btn-primary btn-block"  >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/11.jpg"></a>
                        <center>
                            <h3>HMT Milan</h3>
                            <p>Price: Rs 8000.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(7)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=7"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/12.jpg"></a>
                        <center>
                            <h3>Faber Luba #111</h3>
                            <p>Price: Rs 18000.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(8)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=8"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                </div>
                           
            <div class="row product">
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/lpu.jpg"></a>
                        <center>
                            <h3>H&W</h3>
                            <p>Price: Rs 800.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(9)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=9"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/6.jpg"></a>
                        <center>
                            <h3>Luis Phil</h3>
                            <p>Price: Rs 1000.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(10)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=10"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/13.jpg"></a>
                        <center>
                            <h3>John Zok</h3>
                            <p>Price: Rs 1500.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(11)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block"disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=11"><button type="button" class="btn btn-primary btn-block"  >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                    <div class="col-md-3 col-sm-6 thumbnail">
                        <a href="#"><img src="img/14.jpg"></a>
                        <center>
                            <h3>Jhalsani</h3>
                            <p>Price: Rs 1300.00</p>
                        </center>
                        <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(12)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=12"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                    </div>
                </div>
            </div>  
        <?php        require 'include/footer.php';?>
    </body>
</html>
                                                        