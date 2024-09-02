<?php include("header.php") ?>


		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>About Us</h1>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/couch.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>

						<div class="row my-5"><?php 
						 $query="SELECT * FROM about_us limit 4";
						 $result=mysqli_query($conn,$query);
						 while($data=mysqli_fetch_array($result)){
						echo "	<div class='col-6 col-md-6'>
							<div class='feature'>
								<div class='icon'>
									<img src='images/truck.svg' alt='Image' class='imf-fluid'>
								</div>
								<h3>$data[1]</h3>
								<p>$data[2]</p>
							</div>
						</div>
						";
						 }
						?>
						
						

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		

		

		<?php include("footer.php") ?>
	
