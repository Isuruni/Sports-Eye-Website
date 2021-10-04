<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="pictures/logo.png" />
        <title>Sports Eye home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="style1.css" type="text/css">
    </head>
    <body style="margin:left">
        <div>
		<!--Header-->
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Welcome to Sports Eye</h1>
                       <p><b>We bring you all the sports items you will need.
					   <br>Just a simple click and it will be all yours</b></p>
                       <a href="categories.php" class="btn btn-danger"><b>Shop Now</b></a>
                   </div>
                   </center>
               </div>
           </div>
           
		   
			<!--footer -->
			<?php include 'footer.php'?>
			
          
        </div>
    </body>
</html>