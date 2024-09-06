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
		      	<div class="row">

				  <?php
						$fetch_query = mysqli_query($conn, "select * from product");
						while ($d= mysqli_fetch_array($fetch_query))
					{ ?>
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="../Admin/<?php echo $d[6];  ?>" class="product-thumbnail" height="250">
							<h3 class="product-title"><?php echo $d[1];  ?></h3>
							<strong class="product-price">Rs. <?php echo $d[2];  ?></strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
				<?php	}
					
					
					?>
					<!-- End Column 4 -->

		      	</div>
		    </div>
		</div>

		<?php include "footer.php"; ?>

	</body>

</html>