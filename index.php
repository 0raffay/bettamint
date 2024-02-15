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

	<!--==== Product Section start ====-->
	<section class="productSection">
		<div class="container container-large position-relative">
			<div class="d-flex align-items-center">
				<div class="productSectionText">
					<h4 class="section_heading">Product that simplifying work
						from tendering to close out.</h4>
					<a href="" class="primary-link-button">See All Products <i class="arrow-right-icon-green"></i></a>
				</div>
				<div class="productCardWrapper">
					<div class="productCardContainer">
						<div class="productCard">
							<div class="img_wrap">
								<img src="assets/images/product-1.jpg" alt="Reload Page">
							</div>
							<div class="productCardText">
								<h6 class="fs-25 fw-600 lh-normal fc-black mb-3">Project Management</h6>
								<p class="mb-2 fs-18">Stay on schedule and within budget. Track construction progress in real time. Digital tools to accurately predict your project completion date and highlight risk areas.... </p>
								<a href="" class="secondary-link-button text-end w-100 justify-content-end pe-1">
									Learn More <i class="arrow-right-icon-purple"></i>
								</a>
							</div>
						</div>
						<div class="productCard">
							<div class="img_wrap">
								<img src="assets/images/product-2.jpg" alt="Reload Page">
							</div>
							<div class="productCardText">
								<h6 class="fs-25 fw-600 lh-normal fc-black mb-3">Workforce Management</h6>
								<p class="mb-2 fs-18">We turbocharge your construction sites to ensure your workforce isn’t just clocking in but is highly engaged, actively contributing and well incentivised... </p>
								<a href="" class="secondary-link-button text-end w-100 justify-content-end pe-1">
									Learn More <i class="arrow-right-icon-purple"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="productCardContainer">
						<div class="productCard">
							<div class="img_wrap">
								<img src="assets/images/product-3.jpg" alt="Reload Page">
							</div>
							<div class="productCardText">
								<h6 class="fs-25 fw-600 lh-normal fc-black mb-3">Financial Management</h6>
								<p class="mb-2 fs-18">Have a birds eye view of your project’s financial health. View your cashflows and projected costs against budget, mitigate financial risks with real time data and protect your....</p>
								<a href="" class="secondary-link-button text-end w-100 justify-content-end pe-1">
									Learn More <i class="arrow-right-icon-purple"></i>
								</a>
							</div>
						</div>
						<div class="productCard">
							<div class="img_wrap">
								<img src="assets/images/product-4.jpg" alt="Reload Page">
							</div>
							<div class="productCardText">
								<h6 class="fs-25 fw-600 lh-normal fc-black mb-3">Construction Intelligence</h6>
								<p class="mb-2 fs-18">Your data is your most powerful ally. Turn your project information into meaningful, actionable insights that will guide your business.</p>
								<a href="" class="secondary-link-button text-end w-100 justify-content-end pe-1">
									Learn More <i class="arrow-right-icon-purple"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== Product Section end ====-->

	<!--==== Support Section start ====-->
	<section class="supportSection">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<h4 class="section_heading">Support Beyond Software that
						Only We Provide</h4>
					<a href="" class="primary-link-button fs-18">Get a Personalised Demo <i class="arrow-right-icon-green"></i></a>
				</div>
				<div class="col-lg-5">
					<ul class="supportList list-unstyled">
						<li class="supportCard d-flex align-items-center">
							<img class="flex-shrink-0" src="assets/images/support-icon-1.png" alt="Reload Page">
							<div class="text_wrap">
								<a class="fs-25 fw-600 fc-black lh-normal d-flex align-items-center gap-3">
									24/7 Customer Support
									<i class="arrow-right-icon-black"></i>
								</a>
								<p>Connect with a real bettamint expert via email, chat, or phone support in less than a minute.</p>
							</div>
						</li>
						<li class="supportCard d-flex align-items-center">
							<img class="flex-shrink-0" src="assets/images/support-icon-2.png" alt="Reload Page">
							<div class="text_wrap">
								<a class="fs-25 fw-600 fc-black lh-normal d-flex align-items-center gap-3">
									Seamless Integrations
									<i class="arrow-right-icon-black"></i>
								</a>
								<p>Connect to 500+ out-of-the-box integrations you already use
									and love in the bettamint App Marketplace.</p>
							</div>
						</li>
						<li class="supportCard d-flex align-items-center">
							<img class="flex-shrink-0" src="assets/images/support-icon-3.png" alt="Reload Page">
							<div class="text_wrap">
								<a class="fs-25 fw-600 fc-black lh-normal d-flex align-items-center gap-3">
									Community of Peers
									<i class="arrow-right-icon-black"></i>
								</a>
								<p>Connect, learn, inspire and grow your online community with Groundbreakers like you around the world.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--==== Support Section end ====-->

	<!--==== news Section start ====-->

	<section class="newsSection pt-md-0 prop-bottom-left prop-top-right">
		<div class="newsWrapper bg-grey-400 py-lg-5">
			<div class="container">
				<div class="section_text small text-center mx-auto mb-4 mb-md-5">
					<h4 class="section_heading">Latest Stories from the News Room</h4>
					<a href="#" class="primary-link-button fs-18">Browse All Stories <i class="arrow-right-icon-green"></i></a>
				</div>

				<div class="newsCard big">
					<div class="row align-items-center nowrap">
						<div class="col-lg-6">
							<div class="img_wrap">
								<img src="assets/images/news-img-1.jpg" alt="Reload Page">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="newsCardBigText">
								<h6 class="purpleLabel">Contractors & Developers</h6>
								<h4 class="fs-30 fw-400 mb-20">Indian Real Estate Sector:
									<span style="display: block;">
										Skyscraper In 2023, Realty Indices Too Surge Over 77%
										During the Year, Luxury...
									</span>
								</h4>
								<p class="fs-18 fw-400 mb-20">Despite high interest rates and non-stop price hikes, the Indian real estate, especially the housing sector has witnessed an unprecedented growth in 2023. Without an iota of doubt, the industry players...</p>
								<div class="d-flex align-items-center">
									<img src="assets/images/person-icon-1.png" class="me-2 d-block" alt="Reload Page">
									<strong class="border-right fs-14 fw-500">By: Reality & More</strong>
									<span class="fs-14 fw-400 news-dot" style="color: #58677D;">Friday, 1 April 2022</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="newsAndStories">
					<div class="newsAndStoryCard d-flex align-items-center gap-3">
						<div class="img_wrap">
							<img src="assets/images/news-story-card-img-1.png" alt="Reload Page">
						</div>
						<div class="newsStoryCardText">
							<h5 class="fs-18 fw-600">Tempor incididunt ut..</h5>
							<p class="fs-14 fw-400 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							<div class="d-flex align-items-center gap-3">
								<span class="fs-13 fw-500">Reality & More</span>
								<span class="fs-13 fw-400 news-dot" style="color: #58677D;">April 23, 2023</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--==== news Section end ====-->


	<!--==== Future Section start ====-->
	<section class="futureSection bg-black">
		<div class="container">
			<div class="section_text small text-center mx-auto mb-4 mb-md-5">
				<h4 class="section_heading text-white">Building a better future, for the people on
					the frontlines building India</h4>
				<a href="#" class="primary-link-button fs-18">Get a Personalised Demo <i class="arrow-right-icon-green"></i></a>
			</div>
			<div class="futureCardContainer d-flex justify-content-between">
				<div class="futureCard bigCard">
					<div class="futureCardMainImg">
						<img src="./assets/images/future-card-img-1.png" alt="Reload Page">
					</div>
					<div class="futureCardText pe-lg-4">
						<h4 class="fs-25 fw-500 fc-white">Maximizing income for construction
							workers</h4>
						<p class="fs-18 fw-400">Creating a steady & abundance of income opportunities for millions of informal construction workers across India. We are helping workers build a verified record of their professional experience, while improving their skills and sharpening their understanding of finance.</p>
					</div>
				</div>
				<div class="smallFutureCardContainer">
					<div class="futureCard mb-32 smallCard">
						<div class="futureCardText">
							<h4 class="fs-25 fw-500 fc-white">Enhancing the professionalism of
								the construction industry</h4>
							<p class="fs-18 fw-400">Encouraging construction workers to continuously advance their technical & practical skills, adopt industry best practices & standards to improve the overall quality, safety and efficiency of construction projects.</p>
						</div>
						<div class="futureCardMainImg">
							<img src="./assets/images/future-card-img-2.png" alt="Reload Page">
						</div>
					</div>
					<div class="futureCard smallCard">
						<div class="futureCardMainImg">
							<img src="./assets/images/future-card-img-3.png" alt="Reload Page">
						</div>
						<div class="futureCardText">
							<h4 class="fs-25 fw-500 fc-white">Bridging the digital divide</h4>
							<p class="fs-18 fw-400">Building the data infrastructure necessary to unlock digital products & services that are necessary & affordable to daily wage earners.We envision a world in which all individuals & communities are able to fully participate in our society, democracy, and economy.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== Future Section end ====-->

	<!--==== CTA Section Start ====-->
	<section class="ctaSection bg-black">
		<div class="container py-lg-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-4">
					<h4 class="section_heading fc-white mb-2">Get started today</h4>
					<p class="mb-3 pe-lg-5">If you can send an email, you can use bettamint.
						Building better is really that simple.</p>
					<a href="#" class="btn btn-primary">Request a Demo</a>
				</div>
				<div class="col-auto">
					<div class="img_wrap">
						<img src="assets/images/cta-image.png" alt="Reload Page">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== CTA Section End ====-->



	<!--==== FOOTER START ====-->
	<?php include('includes/footer.php') ?>
	<!--==== FOOTER END ====-->

	<!--==== SCRIPTS START ====-->
	<?php include('includes/footer-scripts.php') ?>
	<!--==== SCRIPTS END ====-->
</body>

</html>