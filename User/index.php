<?php include("header.php") ?>
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
								<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
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

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="shop.html" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->
					<?php
						$fetch_query = mysqli_query($conn, "select * from product limit 3");
						while ($d= mysqli_fetch_array($fetch_query))
					{ ?>
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="productdescription.php?">
							<img src="../Admin/<?php echo $d[5];  ?>" class="product-thumbnail" height="250">
							<h3 class="product-title"><?php echo $d[1];  ?></h3>
							<strong class="product-price">Rs. <?php echo $d[2];  ?></strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
				<?php	}
					
					
					?>
					<!-- Start Column 2 -->
					
					<!-- End Column 2 -->

					

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
					

						<div class="row my-5">
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
