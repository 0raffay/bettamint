<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Construction Intelligence | <?php echo $siteName; ?></title>

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
  <section class="banner bg-black bannerWithMainImage">
    <div class="position-relative prop-bottom-left">
      <div class="bannerImage">
        <img src="assets/images/banners/home-banner.png" alt="Hero Banner">
      </div>
      <div class="bannerTextContainer">
        <div class="container">
          <div class="bannerText mx-auto text-center">
            <h6 class="bannerLabel">Leverage every number</h6>
            <h1 class="bannerTitle">Construction Intelligence</h1>
            <p class="bannerSubtitle small">Your data is your most powerful ally. Turn your project information into meaningful, actionable insights that will guide your business.</p>
            <div class="d-flex align-items-center gap-3 justify-content-center">
              <a href="#" class="btn btn-secondary">Sign Up Now</a>
              <a href="#" class="btn btn-primary">Request a Demo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bannerMainImageContainer text-center prop-bottom-right prop-sm">
      <img class="bannerMainImage" src="assets/images/ci-banner-image.png" alt="Reload Page">
    </div>
  </section>
  <!--==== Banner end ====-->


  <!--==== Good Company start ====-->
  <?php include('sections/good-company-section.php'); ?>
  <!--==== Good Company end ====-->


  <section class="panelSection">
    <div class="container container-large">
      <div class="row align-items-center">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <img src="assets/images/pm-1.png" alt="Reload Page">
        </div>
        <div class="col-lg-5">
          <h6 class="purple_label mb-2">FORECASTING</h6>
          <h4 class="section_heading mb-3">Course correct</h4>
          <p class="fs-18 mb-3">Identify and track critical costs with forecasting tools that show you the best way to compensate for overspending and delays.</p>
          <a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="panelSection">
    <div class="container container-large">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <h6 class="purple_label mb-2">ANALYTICS</h6>
          <h4 class="section_heading mb-3">Insights, in sight</h4>
          <p class="fs-18 mb-3">View production rates, estimated completion timelines, costs, cashflows, contractor and worker productivities, manpower turnover, variations, change requests and more though powerful visualisation tools anyone can understand.</p>
          <a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
        </div>
        <div class="col-lg-6">
          <img src="assets/images/pm-2.png" alt="Reload Page">
        </div>
      </div>
    </div>
  </section>

  <section class="panelSection bg-grey-image">
    <div class="container container-large">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <img src="assets/images/pm-3.png" alt="Reload Page">
        </div>
        <div class="col-lg-6">
          <h6 class="purple_label mb-2">PROGRESS REPORTS</h6>
          <h4 class="section_heading mb-3">Simplified reporting</h4>
          <p class="fs-18 mb-3">Access a collection of templated and customisable reports to give you the insights you need to make the most informed decisions.</p>
          <a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="panelSection">
    <div class="container container-large">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-lg-0 mb-4">
          <h6 class="purple_label mb-2">WORKFORCE DATA </h6>
          <h4 class="section_heading mb-3">Your project, your data</h4>
          <p class="fs-18 mb-3">Workforce data at your fingertips for enhanced insight, security and
            easy reporting. </p>
          <a href="" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
        </div>
        <div class="col-lg-7">
          <img src="assets/images/pm-4.png" alt="Reload Page">
        </div>
      </div>
    </div>
  </section>

  <section class="panelSection bg-grey-image">
    <div class="container container-large">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <h4 class="section_heading mb-4">Gain control of your bottom line.</h4>
          <p class="mb-4">Move beyond obsolete spreadsheets and paper-based reporting. Bettamints powerful reporting and visualisation tools offer reliable, AI-driven insights for precise forecasting and financial management.</p>
          <h4 class="section_heading mb-5">Isolated data on spreadsheets
            can’t give you insights. <br>
            <span class="fc-primary">
              Bettamint can.
            </span>
          </h4>

          <div class="d-flex align-items-center gap-3 border-bottom pb-4">
            <span class="flex-shrink-0 py-2 px-2 bg-primary-300 fc-primary fs-16 fw-700 lh-normal text-center rounded-3">01</span>
            <div class="text_wrap">
              <a href="" class="white-link-button fs-25 fw-600 fc-black mb-3">Accelerate Smart Decision-Making <i class="arrow-right-icon-black"></i></a>
              <p>Shift from instinct to intelligence with fast, actionable insights. Analyze priorities, track progress, and identify obstacles more efficiently.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <ul class="list-unstyled">
            <li class="d-flex align-items-center gap-4 border-bottom pb-4">
              <span class="flex-shrink-0 py-2 px-2 bg-primary-300 fc-primary fs-16 fw-700 lh-normal text-center rounded-3">02</span>
              <div class="text_wrap">
                <a href="" class="white-link-button fs-25 fw-600 fc-black mb-3">Accelerate Smart Decision-Making <i class="arrow-right-icon-black"></i></a>
                <p>Harmonize data gathering and store it in a unified system for easier analysis and trustworthiness, aligning everyone with company objectives and standards.</p>
              </div>
            </li>
            <li class="d-flex align-items-center gap-4 border-bottom py-4">
              <span class="flex-shrink-0 py-2 px-2 bg-primary-300 fc-primary fs-16 fw-700 lh-normal text-center rounded-3">03</span>
              <div class="text_wrap">
                <a href="" class="white-link-button fs-25 fw-600 fc-black mb-3">Make Financial Moves with Confidence <i class="arrow-right-icon-black"></i></a>
                <p>Discover paths to growth with clearer, committed decisions backed by AI-powered analysis, enhancing your ability to forecast profit.</p>
              </div>
            </li>
            <li class="d-flex align-items-center gap-4 border-bottom py-4">
              <span class="flex-shrink-0 py-2 px-2 bg-primary-300 fc-primary fs-16 fw-700 lh-normal text-center rounded-3">04</span>
              <div class="text_wrap">
                <a href="" class="white-link-button fs-25 fw-600 fc-black mb-3">Get Ahead of Risks<i class="arrow-right-icon-black"></i></a>
                <p>Prevent issues related to schedule, budget, and safety by gaining insight into improvement areas, leveraging both historical and predictive data.</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-4 border-bottom py-4">
              <span class="flex-shrink-0 py-2 mt-4 px-2 bg-primary-300 fc-primary fs-16 fw-700 lh-normal text-center rounded-3">05</span>
              <div class="text_wrap">
                <a href="" class="white-link-button fs-25 fw-600 fc-black mb-3">Start making precise, data-driven decisions. <i class="arrow-right-icon-black"></i></a>
                <p class="mb-3">Equip yourself with the necessary tools to assess performance, identify potential risks, enhance safety & profitability, and increase overall efficiency.</p>
                <ul class="list-unstyled ps-4">
                  <li class="list-style-disc fs-16 fc-grey-700">Move beyond old-fashioned spreadsheets, manual processes, and guesswork.</li>
                  <li class="list-style-disc fs-16 fc-grey-700">Transform your project data into valuable insights that steer your business forward</li>
                  <li class="list-style-disc fs-16 fc-grey-700">Build a company culture around data driven decision making.</li>
                </ul>
              </div>
            </li>
          </ul>
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


  <!--==== FOOTER START ====-->
  <?php include('includes/footer.php'); ?>
  <!--==== FOOTER END ====-->

  <!--==== SCRIPTS START ====-->
  <?php include('includes/footer-scripts.php'); ?>
  <!--==== SCRIPTS END ====-->
</body>

</html>