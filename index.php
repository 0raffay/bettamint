<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home | <?php echo $siteName; ?></title>

	<?php include("includes/compatibility.php"); ?>
	<?php include("includes/og.php"); ?>

	<!-- META TITLE AND DESCRIPTION -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- META TITLE AND DESCRIPTION -->

	<!--==== STYLES START ====-->
	<?php include('includes/header-styles.php') ?>
	<!--==== STYLES END ====-->
</head>

<body>

	<!--==== HEADER START ====-->
	<?php include('includes/header.php') ?>
	<!--==== HEADER END ====-->

	<!--==== Banner start ====-->
	<section class="banner homeBanner">
		<div class="bannerImage">
			<img src="assets/images/banners/home-banner.png" alt="Hero Banner">
		</div>
		<div class="bannerTextContainer">
			<div class="container">
				<div class="bannerText mx-auto text-center">
					<h6 class="bannerLabel">CONSTRUCTION MANAGEMENT SOFTWARE</h6>
					<h1 class="bannerTitle">Build Quicker, Build Smarter,
						Build Better</h1>
					<p class="bannerSubtitle small">Stay on top of construction outcomes, fast track your projects, minimize risks and protect your profits. Digitise your construction sites with our intelligent workforce management software.</p>
					<div class="d-flex align-items-center gap-3 justify-content-center">
						<a href="#" class="btn btn-secondary">Sign Up Now</a>
						<a href="#" class="btn btn-primary">Request a Demo</a>
					</div>
				</div>
			</div>
		</div>


		<a class="bannerToggleButton" href="#solutions">
			<span class="dot"></span>
		</a>
	</section>
	<!--==== Banner end ====-->

	<!--==== Solutions start ====-->
	<section class="solutionsSection bg-black" id="solutions">
		<div class="container pb-md-5">
			<div class="row row-gap-5">
				<div class="col-xl-6">
					<h4 class="section_heading fc-white">Solutions Purpose-built <br>
						for you</h4>
					<p class="fs-18">Step into the forefront of innovation alongside the titans of the trade. Bettamint is where the construction industry converges and collaborates to shape the future of workforce management.</p>
				</div>

				<div class="col-sm-12 col-md-12 col-xl-6">
					<div class="horizontalCard d-flex align-items-center flex-column flex-lg-row">
						<div class="img_wrap flex-shrink-0">
							<img src="assets/images/developers.jpg" alt="Reload Page">
						</div>
						<div class="text_wrap">
							<h6 class="fw-600 fs-30 lh-normal fc-white mb-3">Developers</h6>
							<p class="fw-400 fs-22 mb-3">Take control with visibility every
								step of the way</p>
							<a href="" class="fc-primary fw-600 fs-22 no-hover-black hover-underline">More Details <i class="fa-solid fa-arrow-right-long fs-18 ms-3"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-xl-6">
					<div class="horizontalCard d-flex flex-column flex-xl-row align-items-center">
						<div class="img_wrap flex-shrink-0">
							<img src="assets/images/general-contractors.jpg" alt="Reload Page">
						</div>
						<div class="text_wrap">
							<h6 class="fw-600 fs-30 lh-normal fc-white mb-3">General Contractors</h6>
							<p class="fw-400 fs-22 mb-3">Deliver on time and on budget from
								the palm of your hand</p>
							<a href="" class="fc-primary fw-600 fs-22 no-hover-black hover-underline">More Details <i class="fa-solid fa-arrow-right-long fs-18 ms-3"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-xl-6">
					<div class="horizontalCard d-flex flex-column flex-xl-row align-items-center">
						<div class="img_wrap flex-shrink-0">
							<img src="assets/images/sub-contractors.jpg" alt="Reload Page">
						</div>
						<div class="text_wrap">
							<h6 class="fw-600 fs-30 lh-normal fc-white mb-3">Sub Contractors</h6>
							<p class="fw-400 fs-22 mb-3">Connect your teams from site to
								office in real time</p>
							<a href="" class="fc-primary fw-600 fs-22 no-hover-black hover-underline">More Details <i class="fa-solid fa-arrow-right-long fs-18 ms-3"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== Solutions end ====-->

	<!--==== Good Company start ====-->
	<section class="goodCompanySection">
		<div class="container py-md-5">
			<div class="section_text mb-4 mb-md-5 text-center">
				<h4 class="section_heading lh-1 mb-3">You're in Good Company</h4>
				<p>Step into the forefront of innovation alongside the titans of the trade. Bettamint is where the construction industry <br> converges and collaborates to shape the future of workforce management.</p>
			</div>
			<div class="img_wrap text-center">
				<img src="assets/images/good-company.png" alt="Reload Page">
			</div>
		</div>
	</section>
	<!--==== Good Company end ====-->


	<!--==== FOOTER START ====-->
	<?php include('includes/footer.php') ?>
	<!--==== FOOTER END ====-->

	<!--==== SCRIPTS START ====-->
	<?php include('includes/footer-scripts.php') ?>
	<!--==== SCRIPTS END ====-->
</body>

</html>