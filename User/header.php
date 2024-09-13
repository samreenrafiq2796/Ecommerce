<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php 
session_start();
include "../connection.php"; 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
							
						</li>
					
						
						<li>

							
						
								<select name="" id="">
								<?php 
									$q = mysqli_query($conn, "select * from category");
									while ($ddd = mysqli_fetch_array($q)) {
										echo "<a href='shop.php'><option value=''>". $ddd[1]."</option></a>";
									}

							?>

								</select>
							
						</li>
						<li><a class="nav-link" href="about.php">About us</a></li>
						<li><a class="nav-link" href="#">Services</a></li>
						<li><a class="nav-link" href="#">Blog</a></li>
						<li><a class="nav-link" href="contact.php">Contact us</a></li>
						<li><a class="nav-link" href="#">
							<?php
								if (isset($_SESSION["u_name"])) {
									echo $_SESSION["u_name"];
								}

							?>
						</a></li>

					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<?php
								if (isset($_SESSION["u_name"])) {
									echo '<li><a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" style="font-size:26px"></i></a></li>';
									
								}
								else{
									echo '<li><a class="nav-link" href="../login/index.php"><img src="images/user.svg"></a></li>';

								}

							?>
						<li><a class="nav-link" href="#"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->
