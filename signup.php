<?php
    
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="pictures/logo.png" />
        <title>Sports Eye sign up</title>
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
	<section class="container justify-content-center">
    <section class="row  mt-0 mb-2">
        <div class="col-md-6 offset-md-3 ">
            <div class="signup-form ">
                <form class="form-container border p-4 ">
                    <h4 class="mb-3 font-weight-bold text-center">Create Your Account</h4>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label>First Name<span class="text-danger">*</span></label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Last Name<span class="text-danger">*</span></label>
                            <input type="text" name="Lname" class="form-control" placeholder="Enter Last Name" required>
                        </div>
						<div class="mb-3 col-md-6">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter Email" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Phone Number<span ></span></label>
                            <input type="text" name="Lname" class="form-control" placeholder="Enter phone number">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Confirm Password<span class="text-danger">*</span></label>
                            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        <div class="col-md-12">
                           <button class="btn btn-primary">Signup</button>
                        </div>
                    </div>
					<p class="text-center mt-3 text-secondary">If you have an account, Please <a href="login.php">Login Now</a></p>
					<p class="text-center mt-3 text-secondary"> Back to home <a href="home.php">Home</a></p>
                </form>
                
            </div>
        </div>
    </section>
</section>

    </body>
</html>