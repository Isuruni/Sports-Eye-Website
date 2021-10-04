<?php
    
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="pictures/logo.png" />
        <title>Sports Eye login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="style2.css" type="text/css">
    </head>
    <body>
        
            
           <!-- Login form creation starts-->
  <section class="container">
   
    <section class="row justify-content-center mt-4">
      <section class="col-12 col-sm-6 col-md-4">
        <form class="form-container ">
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Login Now<br><br></h4>
          <label for="InputEmail1">Email Address<span class="text-danger">*</span></label>
		  <br>
           <input type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" placeholder="Enter email" required>
        </div>
		<br>
        <div class="form-group">
          <label for="InputPassword1">Password<span class="text-danger">*</span></label>
		  <br>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Password" required>
		  <div id="passwordHelpBlock" class="form-text">Password must be 8 characters long
		</div>
        </div>
		<br>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
        <div class="form-footer">
		<br>
          <p> Don't have an account? <a href="signup.php">Sign Up</a></p>
          <p> Back to home <a href="home.php">Home</a></p>
          
        </div>
        </form>
      </section>
    </section>
  </section>
<!-- Login form creation ends -->
		    
       
    </body>
</html>