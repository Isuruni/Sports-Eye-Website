<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="pictures/logo.png" />
        <title>Sports Eye FAQ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
    </head>
	<body>
       
           <?php
            require 'new_header.php';
           ?>
		   <div>
		   <h3 class="text-center mb-4 pb-2 text-dark fw-bold">FAQ</h3>
			  <p class="text-center mb-5">
				You may find the answers for your questions in the most frequently asked questions below
			  </p>
			  </div>
				<div class="container ">
				<div class="row my-5 align-items-center  ">
			
					<div class="col-sm-6 ">
					<div class="card text-center pt-4 border-dark mb-3 h-100">
						  <h6 class="text-primary">Are only sports items availbale in the Sports Eye?</h6>
						<p>
							Yes, Sports Eye is established with the sole purpose of providing sports items you will need from one place to your doorstep.
						</p>
						  </div>
					</div>
					<div class="col-sm-6">
					<div class="card text-center pt-4 border-dark mb-3 h-100">
						 <h6 class="text-primary">Will you deliver the selected items to us?</h6>
						  <p>
							Yes, we are delivering to you what you have ordedered. You just have to order what you want with a simple clicck and relax at your home.
						  </p>
						  </div>
					</div>
					</div>
			
			
				<div class="row my-5 align-items-center">
			
					<div class="col-sm-6">
					<div class="card text-center pt-4 border-dark mb-3 h-100" >
						 <h6 class="text-primary">Can we cancel the orders?
						  </h6>
						  <p >
							Extremely sorry to state, but you are not given the chance to cancel your order. So, don't forget to checkout carefully. We hope you would understand.
						  </p>
						  </div>
					</div>
					<div class="col-sm-6">
					<div class="card text-center pt-4 border-dark mb-3 h-100" >
						 <h6 class="text-primary">Is there a way to contact you?
						  </h6>
						  <p >
							Yes you have, go to Contact Us page from this <a href="contactus.php">link</a>. You will find several ways to contact us. We are there for you 24/7, 365 days and we will like to hear from you.
						  </p>
						  </div>
					</div>
					</div>
					</div>
				
            <!--footer -->
			<?php include 'footer.php'?>
			
        
    </body>
</html>


	


