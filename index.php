<?php include("includes/site-info.php"); ?>

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
  <?php include('includes/header-styles.php'); ?>
  <!--==== STYLES END ====-->
</head>

<body>
  <!--==== HEADER START ====-->
  <?php include('includes/header.php'); ?>
  <!--==== HEADER END ====-->

  <!--==== Banner start ====-->
  <section class="banner homeBanner prop-bottom-left">
    <div class="bannerImage"> <img src="assets/images/banners/home-banner.png" alt="Hero Banner"> </div>
    <div class="bannerTextContainer">
      <div class="container">
        <div class="bannerText mx-auto text-center">
          <h6 class="bannerLabel">CONSTRUCTION MANAGEMENT SOFTWARE</h6>
          <h1 class="bannerTitle">Build Quicker, Build Smarter,
            Build Better</h1>
          <p class="bannerSubtitle small">Stay on top of construction outcomes, fast track your projects, minimize risks and protect your profits. Digitise your construction sites with our intelligent workforce management software.</p>
          <div class="d-flex align-items-center gap-3 justify-content-center"> <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a> <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a> </div>
        </div>
      </div>
    </div>
    <a class="bannerToggleButton" href="#solutions"> <span class="dot"></span> </a>
  </section>
  <!--==== Banner end ====-->

  <!--==== Solutions start ====-->
  <section class="solutionsSection bg-black prop-bottom-right prop-sm" id="solutions">
    <div class="container pb-md-5">
      <div class="row row-gap-3 row-gap-md-4 row-gap-lg-5">
        <div class="col-xl-6">
          <h4 class="section_heading fc-white">Solutions Purpose-built <br>
            for you</h4>
          <p class="fs-18">Step into the forefront of innovation alongside the titans of the trade. Bettamint is where the construction industry converges and collaborates to shape the future of workforce management.</p>
        </div>
        <div class="col-sm-12 col-md-12 col-xl-6">
          <div class="horizontalCard d-flex align-items-xl-center flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0"> <img src="assets/images/developers.jpg" alt="Reload Page"> </div>
            <div class="text_wrap">
              <h6 class="fw-600 fs-30 lh-normal fc-white mb-2 mb-md-3">Developers</h6>
              <p class="fw-400 fs-22 mb-2 mb-md-3">Take control with visibility every
                step of the way</p>
              <a href="developers.php" class="fc-primary fw-600 fs-22 no-hover-black hover-underline">More Details <i class="fa-solid fa-arrow-right-long fs-18 ms-2 ms-lg-3"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-6">
          <div class="horizontalCard d-flex flex-column flex-xl-row align-items-center">
            <div class="img_wrap flex-shrink-0"> <img src="assets/images/general-contractors.jpg" alt="Reload Page"> </div>
            <div class="text_wrap">
              <h6 class="fw-600 fs-30 lh-normal fc-white mb-2 mb-md-3">General Contractors</h6>
              <p class="fw-400 fs-22 mb-2 mb-md-3">Deliver on time and on budget from
                the palm of your hand</p>
              <a href="general-contractor.php" class="fc-primary fw-600 fs-22 no-hover-black hover-underline">More Details <i class="fa-solid fa-arrow-right-long fs-18 ms-2 ms-lg-3"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-6">
          <div class="horizontalCard d-flex flex-column flex-xl-row align-items-center">
            <div class="img_wrap flex-shrink-0"> <img src="assets/images/sub-contractors.jpg" alt="Reload Page"> </div>
            <div class="text_wrap">
              <h6 class="fw-600 fs-30 lh-normal fc-white mb-2 mb-md-3">Sub Contractors</h6>
              <p class="fw-400 fs-22 mb-2 mb-md-3">Connect your teams from site to
                office in real time</p>
              <a href="sub-contractors.php" class="fc-primary fw-600 fs-22 no-hover-black hover-underline">More Details <i class="fa-solid fa-arrow-right-long fs-18 ms-2 ms-lg-3"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Solutions end ====-->

  <!--==== Good Company start ====-->
  <?php include('sections/good-company-section.php'); ?>
  <!--==== Good Company end ====-->

  <!--==== Product Section start ====-->
  <section class="productSection">
    <div class="container container-large position-relative">
      <div class="productSectionWrapper d-flex align-items-center">
        <div class="productSectionText">
          <h4 class="section_heading">Product that simplifying work from tendering to close out.</h4>
          <a href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="primary-link-button">See All Products <i class="arrow-right-icon-green"></i></a>
        </div>
        <div class="productCardWrapper">
          <!-- props -->
          <img class="prop prop-top-left" src="assets/images/prop-xs.png" alt="Reload Page"> <img class="prop prop-bottom-right" src="assets/images/prop-lg.png" alt="Reload Page">
          <!-- props -->
          <div class="productCardContainer">
            <div class="productCard">
              <div class="img_wrap"> <img src="assets/images/product-1.jpg" alt="Reload Page"> </div>
              <div class="productCardText">
                <h6 class="fs-25 fw-600 lh-normal fc-black mb-3">Project Management</h6>
                <p class="mb-2 fs-18">Stay on schedule and within budget. Track construction progress in real time. Digital tools to accurately predict your project completion date and highlight risk areas.... </p>
                <a href="project-management.php" class="secondary-link-button text-end w-100 justify-content-end pe-1"> Learn More <i class="arrow-right-icon-purple"></i> </a>
              </div>
            </div>
            <div class="productCard">
              <div class="img_wrap"> <img src="assets/images/product-2.jpg" alt="Reload Page"> </div>
              <div class="productCardText">
                <h6 class="fs-25 fw-600 lh-normal fc-black mb-3">Workforce Management</h6>
                <p class="mb-2 fs-18">We turbocharge your construction sites to ensure your workforce isn’t just clocking in but is highly engaged, actively contributing and well incentivised... </p>
                <a href="workforce-management.php" class="secondary-link-button text-end w-100 justify-content-end pe-1"> Learn More <i class="arrow-right-icon-purple"></i> </a>
              </div>
            </div>
          </div>
          <div class="productCardContainer">
            <div class="productCard">
              <div class="img_wrap"> <img src="assets/images/product-3.jpg" alt="Reload Page"> </div>
              <div class="productCardText">
                <h6 class="fs-25 fw-600 lh-normal fc-black mb-3">Financial Management</h6>
                <p class="mb-2 fs-18">Have a birds eye view of your project’s financial health. View your cashflows and projected costs against budget, mitigate financial risks with real time data and protect your....</p>
                <a href="financial-management.php" class="secondary-link-button text-end w-100 justify-content-end pe-1"> Learn More <i class="arrow-right-icon-purple"></i> </a>
              </div>
            </div>
            <div class="productCard">
              <div class="img_wrap"> <img src="assets/images/product-4.jpg" alt="Reload Page"> </div>
              <div class="productCardText">
                <h6 class="fs-25 fw-600 lh-normal fc-black mb-3">Construction Intelligence</h6>
                <p class="mb-2 fs-18">Your data is your most powerful ally. Turn your project information into meaningful, actionable insights that will guide your business.</p>
                <a href="construction-intelligence.php" class="secondary-link-button text-end w-100 justify-content-end pe-1"> Learn More <i class="arrow-right-icon-purple"></i> </a>
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
        <div class="col-xl-6">
          <h4 class="section_heading">Support Beyond Software that
            Only We Provide</h4>
          <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="primary-link-button fs-18">Get a Personalised Demo <i class="arrow-right-icon-green"></i></a>
        </div>
        <div class="col-xl-5">
          <ul class="supportList list-unstyled">
            <li class="supportCard d-flex align-items-center"> <img class="flex-shrink-0" src="assets/images/support-icon-1.png" alt="Reload Page">
              <div class="text_wrap"> <a class="fs-25 fw-600 fc-black lh-normal d-flex align-items-center gap-3"> 24/7 Customer Support <i class="arrow-right-icon-black"></i> </a>
                <p>Connect with a real bettamint expert via email, chat, or phone support in less than a minute.</p>
              </div>
            </li>
            <li class="supportCard d-flex align-items-center"> <img class="flex-shrink-0" src="assets/images/support-icon-2.png" alt="Reload Page">
              <div class="text_wrap"> <a class="fs-25 fw-600 fc-black lh-normal d-flex align-items-center gap-3"> Seamless Integrations <i class="arrow-right-icon-black"></i> </a>
                <p>Connect to 500+ out-of-the-box integrations you already use
                  and love in the bettamint App Marketplace.</p>
              </div>
            </li>
            <li class="supportCard d-flex align-items-center"> <img class="flex-shrink-0" src="assets/images/support-icon-3.png" alt="Reload Page">
              <div class="text_wrap"> <a class="fs-25 fw-600 fc-black lh-normal d-flex align-items-center gap-3"> Community of Peers <i class="arrow-right-icon-black"></i> </a>
                <p>Connect, learn, inspire and grow your online community with Groundbreakers like you around the world.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--==== Support Section end ====-->

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