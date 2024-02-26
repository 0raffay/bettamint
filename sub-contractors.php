<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sub Contractors | <?php echo $siteName; ?></title>

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
        <img src="assets/images/banners/contractors-banner.png" alt="Hero Banner">
      </div>
      <div class="bannerTextContainer">
        <div class="container">
          <div class="bannerText mx-auto text-center">
            <h6 class="bannerLabel">CONSTRUCTION MANAGEMENT SOFTWARE</h6>
            <h1 class="bannerTitle">Sub Contractors</h1>
            <p class="bannerSubtitle small">Seamlessly link on-site and office teams, with instant access to crucial information they need to enable peak performance.</p>
            <div class="d-flex align-items-center gap-3 justify-content-center"> <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a> <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-black bannerMobileContainer prop-bottom-right">
      <div class="container position-relative">
        <img class="bannerMobileImage" src="assets/images/general-phone.png" alt="Reload Page">
        <div class="row justify-content-end">
          <div class="col-xl-7">
            <h4 class="section_heading fc-white mb-4">Control costs, streamline cashflows,<br> deliver outcomes, maximize efficiency.</h4>
            <p class="fs-18 fw-400 mb-4">Move away from inefficient paper and spreadsheets to better manage your
              on-site operations.
               </p>

            <div class="mb-4 mb-lg-5">
              <a href="#" class="white-link-button hover-white fs-25 gap-4 mb-3 pb-1">Enhance productivity <i class="arrow-right-icon-green"></i></a>
              <p class="fs-18">Gain complete visibility over projects to accurately predict, schedule, and monitor labor needs throughout your organization.</p>
            </div>
            <div class="mb-4 mb-lg-5">
              <a href="#" class="white-link-button hover-white fs-25 gap-4 mb-3 pb-1">Elevate performance <i class="arrow-right-icon-green"></i></a>
              <p class="fs-18">Standardise field delivery to consistently meet specifications, uphold quality, and adhere to safety standards effectively.</p>
            </div>
            <div class="mb-4 mb-lg-5">
              <a href="#" class="white-link-button hover-white fs-25 gap-4">Ensure profitability <i class="arrow-right-icon-green"></i></a>
              <p class="fs-18">Increase your earnings by minimizing margin erosion, rework, and overlooked variation orders.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!--==== Banner end ====-->

  <!--==== Performence Section start ====-->
  <section class="performenceSection">
    <div class="container container-large">
      <div class="section_text mb-4 mb-lg-5 pb-lg-4">
        <h6 class="text-center fs-18 lh-normal text-uppercase fw-400 fc-grey-700" style="letter-spacing: 1px;">Sub Contractors</h6>
        <h4 class="section_heading text-center">Explore tools purpose built for sub contractors.</h4>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-1.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">PRODUCTIVITY</h6>
              <h4 class="section_heading mb-3">Stay on Track</h4>
              <p class="fs-18 fw-400">Track quantities of material installed to keep your site teams productive and your projects on schedule. Bettamint automatically turns your data into actionable insights that help you more accurately and competitively estimate completion timelines and costs.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-2.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">QUALITY</h6>
              <h4 class="section_heading mb-3">Never let a snag turn into rework</h4>
              <p class="fs-18 fw-400">Track and resolve quality issues, safety concerns, workmanship issues and assign them to the respective sub contractors ledger via field notes that are geo-tagged and time stamped. All quality issues have an immutable, auditable financial outcome.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-2.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">DOCUMENTATION</h6>
              <h4 class="section_heading mb-3 text-md-nowrap">Speed up billing, get paid faster</h4>
              <p class="fs-18 fw-400">Mitigate risk by capturing measurements and tracking out-of-scope work with Smartsheets. Automatically notify office teams so they can generate RA bills or a change request and secure payment.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-3.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">PAYMENTS</h6>
              <h4 class="section_heading mb-3">Authenticate payouts</h4>
              <p class="fs-18 fw-400">Meticulous bill payments engineered for precision based on real site data, quality checks, measurements and contractor ledgers paid out directly through our payment infrastructure.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-2.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">CHANGE MANAGEMENT</h6>
              <h4 class="section_heading mb-3 text-md-nowrap">Minimize risks</h4>
              <p class="fs-18 fw-400">Bring change management to the site for quicker approvals and clearer communication, eliminating risks. Give accounting teams real time visibility into change as it occurs on the site.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-2.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">SECURITY</h6>
              <h4 class="section_heading mb-3 text-md-nowrap">Enhance accountability</h4>
              <p class="fs-18 fw-400">Strengthen onboarding and accountability with digital identity verification to fortify the integrity of your operations.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-2.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">ATTENDANCE</h6>
              <h4 class="section_heading mb-3 text-md-nowrap">Headcount made simple</h4>
              <p class="fs-18 fw-400">Automated attendance systems for real-time insights into headcount, skillsets, and workforce efficiency, ensuring optimal deployment and productivity.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-2.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">PAYROLL</h6>
              <h4 class="section_heading mb-3 text-md-nowrap">Control manpower costs</h4>
              <p class="fs-18 fw-400">We streamline payroll processing, providing you with accurate manpower costs and eliminating overpayments to non-existent 'ghost' workers at your sites.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-2.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">ANALYTICS</h6>
              <h4 class="section_heading mb-3 text-md-nowrap">Insights, in sight</h4>
              <p class="fs-18 fw-400">View production rates, estimated completion timelines, costs, cashflows, contractor and worker productivities, manpower turnover, variations, change requests and more though powerful visualisation tools anyone can understand.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-2.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">PROGRESS REPORTS</h6>
              <h4 class="section_heading mb-3 text-md-nowrap">Simplified reporting</h4>
              <p class="fs-18 fw-400">Access a collection of templated and customisable reports to give you the insights you need to make the most informed decisions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Performence Section end ====-->

  <!--==== Counter Section Start ====-->
  <?php
  $counter_section_heading = "Subcontractors see better <br>
  results with Bettamint";
  $count_1 = "63%";
  $count_1_text = " can scale their business with the same resources  ";
  $count_2 = "27%";
  $count_2_text = "less rework costs";
  $count_3 = "6.3%";
  $count_3_text = "better profit margins";
  include("sections/counter-section.php");
  ?>
  <!--==== Counter Section end ====-->


  <!--==== Leading Company start ====-->
  <section class="leadingCompanySection">
    <div class="container py-md-5">
      <div class="section_text small mb-4 mb-md-5 mx-auto text-center">
        <h4 class="section_heading lh-1 mb-3">Leading contractors trust Bettamint</h4>
        <p>Step into the forefront of innovation alongside the titans of the trade. Bettamint is where the construction industry converges and collaborates to shape the future of workforce management.</p>
      </div>

      <ul class="row align-items-center text-center px-3 px-md-0">
        <li class="col-sm-6 col-lg-3 px-3 px-sm-0">
          <img src="assets//images/good-company/1.png" width="230" height="39" alt="Reload Page">
        </li>
        <li class="col-sm-6 col-lg-3 px-3 px-sm-0">
          <img src="assets//images/good-company/2.png" width="100" height="88" alt="Reload Page">
        </li>
        <li class="col-sm-6 col-lg-3 px-3 px-sm-0">
          <img src="assets//images/good-company/3.png" width="345" height="60" alt="Reload Page">
        </li>
        <li class="col-sm-6 col-lg-3 px-3 px-sm-0">
          <img src="assets//images/good-company/4.png" width="160" height="59" alt="Reload Page">
        </li>
      </ul>
    </div>
  </section>
  <!--==== Leading Company end ====-->


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