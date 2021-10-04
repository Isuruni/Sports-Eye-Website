<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="pictures/logo.png" />
        <title>Sports Eye About</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="style1.css" type="text/css">
    </head>
<body >
  <?php
        include 'new_header.php';
    ?>
  <div>
    <div class="container mt-3 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h1 class="text-dark pt-3 title">Who we are?</h1>
          <hr />
          <img src="pictures/logo.png" style="width:250px; height:250px">
          <p class="mt-2"><b><i>Sports Eye</b></i> Sri Lanka's premium online shopping marketplace,
		  specially established to provide customers with sports items. Sports Eye has nearly 50 sports items of diffenet types.
		  We bring you diverse sport items in 6 categories including:
		  <ul>
		  <li>Team Sports</li>
		  <li>Racket Sports</li>
		  <li>Sports Clothing & Shoes</li>
		  <li>Outdoor Recreations</li>
		  <li>Exercise & Fitness</li>
		  <li>Other Accessories</li>
		  </ul>
		 You can select everything you like with just a click and will be available at your doorstep.
		  </p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-dark pt-3">
            <h1 class="title">Keep in touch</h1>
            <h3>24 hours|7 days a week| 365 days  Support</h3>
          </span>
          <hr>
		  <p class="mt-2"><b><i>Contact us</b></i><br>
		  If you have any questions about our products, pls do not hesitate to contact us, we will reply you within 24 hours.<br><br>
           Call us - +942261261<br>
		   Email us - <a href = "mailto: sportseyesupport@gmail.com">sportseyesupport@gmail.com</a>
          </p>

        </div>
      </div>
    </div>
  </div>

<!--footer -->
			<?php include 'footer.php'?>
			<!--footer end-->
</html>