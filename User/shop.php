<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

	</head>

	<body>
<?php include "header.php"; ?>
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Shop</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
<!-- 4 -->
				<?php
					if(isset($_SESSION["product_already_added"])){
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							'. $_SESSION["product_already_added"] .'
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';

						unset($_SESSION["product_already_added"]);

					}

					if(isset($_SESSION["msg"])){
						echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
							'. $_SESSION["msg"] .'
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';

						unset($_SESSION["msg"]);
					}
				
				?>
				<form action="" method="get">
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="searchtxt" id="" class="form-control" placeholder="Search Product">
						</div>
						<div class="col-md-6">
							<select name="opt"  class="form-control">
								<option value="n">Name</option>
								<option value="sortaz">Sort A - Z</option>
								<option value="sortza">Sort Z - A</option>
								<option value="sorthigh">Price High  - Low</option>
								<option value="sortlow">Price Low - High</option>

							</select>
						</div>
					</div>
					<center><button type="submit" class="mt-3  btn btn-secondary" name="btn">Search</button></center>
					<br>
				</form>
		      	<div class="row">

				<?php

					if (isset($_GET["btn"])) {
						$box = $_GET["searchtxt"];
						$option = $_GET["opt"];

						if ($option == "n") {
							$query = "select * from product where Name like '%$box%'";
							$run = mysqli_query($conn,$query);
						}
						else if($option == "sortaz"){
							$query = "select * from product order by Name";
							$run = mysqli_query($conn,$query);
						}
						else if($option == "sortza"){
							$query = "select * from product order by Name desc";
							$run = mysqli_query($conn,$query);
						}
						else if($option == "sorthigh"){
							$query = "select * from product order by price desc";
							$run = mysqli_query($conn,$query);
						}
						else if($option == "sortlow"){
							$query = "select * from product order by price";
							$run = mysqli_query($conn,$query);
						}
						else{
							$query = "select * from product";
							$run = mysqli_query($conn,$query);
						}
						while ($data = mysqli_fetch_array($run)) {
							echo "<div class='col-md-3 mt-4'>";
							echo '<div class="card" style="width: 18rem;">
							<img src="../Admin/'.$data[6].'" class="card-img-top" alt="..." height ="300">
							<div class="card-body">
							  <h5 class="text-capitalize card-title">'. $data[1].'</h5>
							  <p class="card-text text-success">Rs. '. $data[2].'</p>
							  <a href="Productdescripton.php?p='.$data[0].'" class="btn btn-primary">Show Detail</a>
							</div>
						  </div>
						  </div>';
						}

					}
					else{
						$query = "select * from product";
						$run = mysqli_query($conn,$query);
	
	
						while ($data = mysqli_fetch_array($run)) {
							echo "<div class='col-md-3 mt-4'>";
							echo '<div class="card" style="width: 18rem;">
							<img src="../Admin/'.$data[6].'" class="card-img-top" alt="..." height ="300">
							<div class="card-body">
							  <h5 class="text-capitalize card-title">'. $data[1].'</h5>
							  <p class="card-text  text-success">Rs '. $data[2].'</p>
							  <a href="Productdescripton.php?p='.$data[0].'" class="btn btn-primary">Show Detail</a>

							</div>
						  </div>
						  </div>';
						}
					}
				
				?>



						
					<!-- End Column 4 -->

		      	</div>
		    </div>
		</div>

		<?php include "footer.php"; ?>

	</body>

</html>
