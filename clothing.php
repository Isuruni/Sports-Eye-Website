<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="pictures/logo.png" />
        <title>Sports Eye categories</title>
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
    <body>
        <div>
           <?php
            require 'new_header.php';
           ?>
		   <h2 align="center"><br><i>Choose From the Best</i></h2>
		   
		   <?php
		   $collection = [ ['Team Sports','pictures/Team.png'],
						['Racket Sports' , 'pictures/Racket.png'],
						['Sports Clothing & Shoes','pictures/Clothing.png'],
						['Outdoor Recreations','pictures/Outdoor.png'],
						['Exercise & Fitness', 'pictures/Exercise.png'],
						['Other Accessories','pictures/Other.png']
						];
					?>
				
			<div class="container">
				<div class="row my-5 align-items-center justify-content-center">
				<?php
				 foreach ($collection as [$title, $imgsrc] ){
				?>
					<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 pb-4 cat">
					<div class="card">
						  <img src=<?php echo $imgsrc; ?> class="card-img-top" alt="">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $title; ?></h5>
							
							<a href="products1.php" class="btn btn-primary">Go to Products</a>
						  </div>
					</div>
					
					</div>

				 <?php } ?>
				</div>
			</div>
		  
           
		  
            <!--footer -->
			<?php include 'footer.php'?>
			
        </div>
    </body>
</html>