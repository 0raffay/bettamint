<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Product Management | <?php echo $siteName; ?></title>

	<?php include("includes/compatibility.php"); ?>
	<?php include("includes/og.php"); ?>

	<!-- META TITLE AND DESCRIPTION -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- META TITLE AND DESCRIPTION -->

	<!--==== STYLES START ====-->
	<?php include('includes/header-styles.php'); ?>
	<!--==== STYLES END ====-->
</head>

<body>

	<!--==== HEADER START ====-->
	<?php include('includes/header.php'); ?>
	<!--==== HEADER END ====-->

	<!--==== Banner start ====-->
	<section class="banner bg-black prop-bottom-left">
		<div class="bannerImage">
			<img src="assets/images/banners/project-management.jpg" alt="Hero Banner">
		</div>
		<div class="bannerTextContainer">
			<div class="container">
				<div class="bannerText mx-auto text-center">
					<h6 class="bannerLabel">CONSTRUCTION MANAGEMENT SOFTWARE</h6>
					<h1 class="bannerTitle">Project Management</h1>
					<p class="bannerSubtitle small">Stay on schedule and within budget. Track construction progress in real time. Digital tools to accurately predict your project completion date and highlight risk areas.</p>
					<div class="d-flex align-items-center gap-3 justify-content-center">
						<a href="#" class="btn btn-secondary">Sign Up Now</a>
						<a href="#" class="btn btn-primary">Request a Demo</a>
					</div>
				</div>
				<img class="bannerMainImage" src="assets/images/product-management-image.png" alt="Reload Page">
			</div>
		</div>
	</section>
	<!--==== Banner end ====-->


	<!--==== Good Company start ====-->
	<?php include('sections/good-company-section.php'); ?>
	<!--==== Good Company end ====-->


	<section class="panelSection">
		<div class="container container-large">
			<div class="row align-items-center">
				<div class="col-lg-5 mb-lg-0 mb-4">
					<h6 class="purple_label mb-2">Productiviy</h6>
					<h4 class="section_heading mb-3">Stay on Track</h4>
					<p class="fs-18 mb-3">Track quantities of material installed to keep your site teams productive and your projects on schedule. Bettamint automatically turns your data into actionable insights that help you more accurately and competitively estimate completion timelines and costs.</p>
					<a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
				</div>
				<div class="col-lg-7">
					<img src="assets/images/pm-1.png" alt="Reload Page">
				</div>
			</div>
		</div>
	</section>

	<section class="panelSection">
		<div class="container container-large">
			<div class="row align-items-center">
				<div class="col-lg-6 mb-lg-0 mb-4">
					<img src="assets/images/pm-2.png" alt="Reload Page">
				</div>
				<div class="col-lg-6">
					<h6 class="purple_label mb-2">QUALITY</h6>
					<h4 class="section_heading mb-3">Never let a snag turn into rework</h4>
					<p class="fs-18 mb-3">Track and resolve quality issues, safety concerns, workmanship issues and assign them to the respective contractors ledger via field notes that are geo-tagged and time stamped. All quality issues have an immutable, auditable financial outcome.</p>
					<a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
				</div>
			</div>
		</div>
	</section>

	<section class="panelSection bg-grey-image">
		<div class="container container-large">
			<div class="row align-items-center">
				<div class="col-lg-6 mb-lg-0 mb-4">
					<h6 class="purple_label mb-2">DOCUMENTATION</h6>
					<h4 class="section_heading mb-3">Get Paid</h4>
					<p class="fs-18 mb-3">Mitigate risk by capturing measurements and tracking out-of-scope work with Smartsheets. Automatically notify office teams so they can generate a bill or a change request and secure payment.</p>
					<a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
				</div>
				<div class="col-lg-6">
					<img src="assets/images/pm-3.png" alt="Reload Page">
				</div>
			</div>
		</div>
	</section>

	<section class="panelSection">
		<div class="container container-large">
			<div class="row align-items-center">
				<div class="col-lg-7 mb-lg-0 mb-4">
					<img src="assets/images/pm-4.png" alt="Reload Page">
				</div>
				<div class="col-lg-5">
					<h6 class="purple_label mb-2">PROFITABILITY</h6>
					<h4 class="section_heading mb-3">Protect your margins</h4>
					<p class="fs-18 mb-3">Monitor costs in real time, identify at-risk scopes of work, issue logs and act fast to make decisions that positively impact your project's budgets and profitability.</p>
					<a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
				</div>
			</div>
		</div>
	</section>

	<section class="panelSection bg-grey-half-image">
		<div class="container container-large">
			<div class="row align-items-center">
				<div class="col-lg-6 mb-lg-0 mb-4">
					<h6 class="purple_label mb-2">COMMUNICATION</h6>
					<h4 class="section_heading mb-3">Keep information accurate </h4>
					<p class="fs-18 mb-3">Trust that all stakeholders have access to the latest information in a centralised location, and in a format that everyone can understand.</p>
					<a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
				</div>
				<div class="col-lg-6">
					<img src="assets/images/pm-5.png" alt="Reload Page">
				</div>
			</div>
		</div>
	</section>

	<section class="panelSection">
		<div class="container container-large py-lg-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-5 mb-lg-0 mb-4">
					<img src="assets/images/pm-6.png" alt="Reload Page">
				</div>
				<div class="col-lg-6">
					<h6 class="purple_label mb-2">REWARDS</h6>
					<h4 class="section_heading mb-3">Supercharge teams with incentives</h4>
					<p class="fs-18 mb-3">Experience the power of an incentivised workforce with Bettapay. Set short-term, time-bound goals connected to instantly paid out bonuses and watch as your project timelines accelerate. Fast track construction, supercharge productivity, and improve retention at your construction sites. </p>
					<a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
				</div>
			</div>
		</div>
	</section>



	<!--==== Story Start ====-->
	<?php include('sections/story-section.php'); ?>
	<!--==== Story end ====-->

	<!--==== news Section start ====-->
	<?php include("sections/news-section.php"); ?>
	<!--==== news Section end ====-->

	<!--==== Future Section start ====-->
	<?php include('sections/future-section.php'); ?>
	<!--==== Future Section end ====-->

	<!--==== CTA Section Start ====-->
	<?php include('sections/cta-section.php'); ?>
	<!--==== CTA Section End ====-->

	<!--==== FOOTER START ====-->
	<?php include('includes/footer.php'); ?>
	<!--==== FOOTER END ====-->

	<!--==== SCRIPTS START ====-->
	<?php include('includes/footer-scripts.php'); ?>
	<!--==== SCRIPTS END ====-->
</body>

</html>