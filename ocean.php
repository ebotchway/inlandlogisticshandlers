<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Inland Logistics Handlers | Service</title>
	<?php include('includes/meta.php') ?>
</head>

<body>
	<!--  Header  -->
	<header class="background-white">
		<div class="header-output">
			<div class="header-output">
				<div class="header-in">
					<?php include('includes/menu.php') ?>
				</div>
			</div>
		</div>
	</header>
	<!-- // Header  -->

	<!-- Search  -->
	<!-- <div id="search">
		<button type="button" class="close">×</button>
		<form class="clearfix d-block">
			<input type="search" value="" placeholder="Search for . . . ." />
			<button type="submit" class="btn btn-primary">Search</button>
		</form>
	</div> -->
	<!-- // Search  -->

	<!-- Get A Quote  -->
	<div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content margin-top-150px background-main-color">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<img src="assets/img/contact-img.jpg" alt="" />
					</div>
					<div class="col-lg-7">
						<div class="padding-30px">
							<h3 class="padding-bottom-15px">Get A Free Quote</h3>
							<?php include('includes/form.php') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // Get A Quote  -->


	<div class="page-title">
		<div class="container">
			<div class="padding-tb-120px">
				<h1>Cargo Transportation</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Cargo Transportation</li>
				</ol>
			</div>
		</div>
	</div>


	<div class="padding-tb-100px">
		<div class="container">
			<div class="row">

				<div class="col-lg-9">
					<div class="service-slider-img margin-bottom-30px">
						<ul class="slider-1">
							<li><img src="assets/img/service_1.jpg" alt=""></li>
							<li><img src="assets/img/service_2.jpg" alt=""></li>
							<li><img src="assets/img/service_3.jpg" alt=""></li>
						</ul>
					</div>
					<h2>Ocean Freight</h2>

					<p>
						Transporting with ocean freight is the method we at Inland Logistics Handlers use for transporting often large loads of goods by sea putting cargo in large containers which are loaded onto vessels.
						Over 90% of all the world's trade is carried by sea and we are skilled at what we do.
					</p>


					<?php include('includes/accord.php') ?>
				</div>
				<div class="col-lg-3">
					<div class="background-main-color margin-bottom-40px">
						<div class="services-list">
							<ul>
								<li><a href="air.php">Air Freight</a></li>
								<li class="active"><a href="ocean.php">Ocean Freight</a></li>
								<li><a href="package.php">Packaging and Storage</a></li>
								<li><a href="cargo.php">Cargo Transportation </a></li>
							</ul>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>


	<?php include('includes/action.php') ?>

	<footer class="layout-dark">
		<?php include('includes/footer.php') ?>
	</footer>
	<?php include('includes/scripts.php') ?>
</body>

</html>
