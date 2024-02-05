<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>I Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/camera.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Cameras</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Watches</p>
                                    <p>Original watches from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/shirt.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Shirts</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>

            <br><br> <br><br><br><br>
          <footer class="footer">
               <div class="container">
                   <div class="box">
               <center>
                   <p>Copyright &copy <a href="#">Aniket Patil</a> <a href="#"> , Aftab Ambekari</a><a href="#"> & Dhiraj Gholap</a>  Store. All Rights Reserved.</p>
                                    </center>
               </div>
             
            <div class="box">
                <center>
                <h3>contact info</h3>
                <a href="#"> +91 702-046-3746 </a><br/>
                <a href="#">  +91 779-287-0909 </a><br/>
                <a href="#"> istore.mh50@gmail.com </a><br/>
                <a href="#"> Karad, Maharashtra - 415110 </a><br/>
                <center>
                 </div>
                 <div class="box">
                   <center>
                <h3>follow us</h3>
                <a href="#">  facebook </a>
                <a href="#">  twitter </a>
                <a href="#">  instagram </a>
                <a href="#">  linkedin </a>
                                    </center>
               </div>
            </div>
           </footer>
        </div>
    </body>
</html>