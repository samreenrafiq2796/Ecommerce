<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-43">
						Register Your Account
					</span>
					
<<<<<<< HEAD
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>
					
=======
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Name">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>
>>>>>>> 59b89c26486c4d7202fe7e0cd92a06f227c1eee6
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
<<<<<<< HEAD
                  
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="number" name="number">
						<span class="focus-input100"></span>
						<span class="label-input100">Phone Number</span>
					</div>
                    <div class="wrap-input100 validate-input" >
=======

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="phonenum">
						<span class="focus-input100"></span>
						<span class="label-input100">Phone Number</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
>>>>>>> 59b89c26486c4d7202fe7e0cd92a06f227c1eee6
						<input class="input100" type="text" name="address">
						<span class="focus-input100"></span>
						<span class="label-input100">Address</span>
					</div>
<<<<<<< HEAD
                    
                    <select name="gender">Gender
                        <option value="male">Male</option>
                        <option value="male">Female</option>
                    </select>
                
                   
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="sub">
							signup
						</button>
                        <a href="index.php">Sign in Your Account</a>
=======
                  
						<select name="gender" id="" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>

                        </select>
					
<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="sub">
							Sign up
						</button>
						<a href="index.php">Sign in Your Account</a>
>>>>>>> 59b89c26486c4d7202fe7e0cd92a06f227c1eee6
					</div>
					
					
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	<?php

		include("../connection.php");
		session_start();
		if(isset($_POST["sub"])){
<<<<<<< HEAD
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["pass"];
			$number = $_POST["number"];
			$address = $_POST["address"];
			$gen = $_POST["gender"];
        }
		$sql="INSERT INTO `user`(`Name`, `EMail`, `Password`, `Gender`, `Phone`, `Address`)
         VALUES ('$name ','$email','$password','$gen','$number','$address')";
	if(mysqli_query($conn,$sql)){
        echo "<script> alert('created successfuly')</script>";
    }
    else{
        echo "<script> alert('Try again')</script>";
    }
=======
			$e = $_POST["email"];
			$p = $_POST["pass"];
			$n = $_POST["Name"];
			$phunm = $_POST["phonenum"];
			$add = $_POST["address"];
			$gen = $_POST["gender"];
			$role="user";


			$insert_query = "INSERT INTO `user`( `Name`, `Email`, `password`, `Gender`, `PhoneNumber`, `Address`, `Role`) 
			VALUES ('$n','$e','$p','$gen','$phunm','$add','$role')";

			if (mysqli_query($conn, $insert_query)) {
				echo "<script>
				alert('Your Account has been created');
				window.location.href='index.php';
				</script>";
			} else {
				echo "<script>
				alert('Something Went Wrong');			
				</script>";
			}
			
	


			

		}
>>>>>>> 59b89c26486c4d7202fe7e0cd92a06f227c1eee6


?>

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>