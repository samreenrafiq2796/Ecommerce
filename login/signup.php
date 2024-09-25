<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Create Your account</h3>
		      	<form action="" class="signin-form" method="post">
                  <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Name" required name="name">
		      		</div>
                      <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Phone Number" required name="phone">
		      		</div>
                      <div class="form-group">
		      			<select name="gender" id="" class="form-control">
                            <option value="Male" style="color:black">Male</option>
                            <option value="Female" style="color:black">Female</option>
                        </select>
		      		</div>
                      <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Address" required name="address">
		      		</div>
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="E-Mail" required name="email">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required name="pass">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="btn">Sign Up</button><br>
					<center><a href="index.php" class="">Log In</a></center>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>
		<?php
		include("../connection.php");
		session_start();
		if(isset($_POST["btn"]))
		{
			$name=$_POST["name"];
			$phone=$_POST["phone"];
			$gender=$_POST["gender"];
			$address=$_POST["address"];
			$email=$_POST["email"];
			$pass=$_POST["pass"];
            $query="INSERT INTO `user`(`Name`, `EMail`, `Password`, `Gender`, `Phone`, `Address`) 
            VALUES ('$name','$email','$pass','$gender','$phone','$address')";
            if(mysqli_query($conn,$query))
            {
                echo    "<script>
                        alert('Account Created Successfully');
						window.location.href='index.php';
                        </script>";
            }
            else
            {
                echo    "<script>
                        alert('Account Not Created');
                        </script>";
            }
        }
		
		?>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

