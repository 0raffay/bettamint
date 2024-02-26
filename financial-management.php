<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Financial Management | <?php echo $siteName; ?></title>

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
        <img src="assets/images/banners/financial-banner.png" alt="Hero Banner">
      </div>
      <div class="bannerTextContainer">
        <div class="container">
          <div class="bannerText mx-auto text-center">
            <h6 class="bannerLabel">Numbers you can bank on</h6>
            <h1 class="bannerTitle">Financial Management</h1>
            <p class="bannerSubtitle small">Have a birds eye view of your project’s financial health. View your cashflows and projected costs against budget, mitigate financial risks with real time data and protect your profit margins.</p>
            <div class="d-flex align-items-center gap-3 justify-content-center"> <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a> <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bannerMainImageContainer text-center prop-bottom-right prop-sm">
      <img class="bannerMainImage" src="assets/images/fp-banner-image.png" alt="Reload Page">
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
          <h6 class="purple_label mb-2">DIGITAL LEDGERS</h6>
          <h4 class="section_heading mb-3">Centralise oversight</h4>
          <p class="fs-18 mb-3">Monitor ledgers of contractors, subcontractors, and workers in one place, track financials, billing, debit notes, change orders, advances, and retention.</p>
          <a target="_blank"  href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="panelSection">
    <div class="container container-large">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <h6 class="purple_label mb-2">BILLING</h6>
          <h4 class="section_heading mb-3">Speed up billing</h4>
          <p class="fs-18 mb-3">Automatically generate RA bills against certified unbilled measurements based on predetermined billing parameters.</p>
          <a target="_blank"  href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
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
          <h6 class="purple_label mb-2">PAYMENTS</h6>
          <h4 class="section_heading mb-3">Authenticate payouts</h4>
          <p class="fs-18 mb-3">Meticulous bill payments engineered for precision based on real site data, quality checks, measurements and contractor ledgers paid out directly through our payment infrastructure.</p>
          <a target="_blank"  href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="panelSection">
    <div class="container container-large">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-lg-0 mb-4">
          <h6 class="purple_label mb-2">CHANGE MANAGEMENT</h6>
          <h4 class="section_heading mb-3">Minimize risks</h4>
          <p class="fs-18 mb-3">Bring change management to the site for quicker approvals and clearer communication, eliminating risks. Give accounting teams real time visibility into change as it occurs on the site.</p>
          <a target="_blank"  href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
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
          <img src="assets/images/pm-5.png" alt="Reload Page">
        </div>
        <div class="col-lg-6">
          <h6 class="purple_label mb-2">FINANCIALS</h6>
          <h4 class="section_heading mb-3">Budget smartly</h4>
          <p class="fs-18 mb-3">Handle on-site changes in real time for more accurate budget reflections. Generate comprehensive financial reports to understand the impact of spending on projected profits.</p>
          <a target="_blank"  href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="panelSection">
    <div class="container container-large py-lg-5">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <h6 class="purple_label mb-2">INVOICING</h6>
          <h4 class="section_heading mb-3">Keep cash flowing</h4>
          <p class="fs-18 mb-3">Stop billing delays from turning into building delays and get paid faster with simplified invoice collection, review, and approval.</p>
          <a target="_blank"  href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="primary-link-button fs-18">Request A Demo <i class="arrow-right-icon-green"></i></a>
        </div>
        <div class="col-lg-5">
          <img src="assets/images/pm-5.png" alt="Reload Page">
        </div>
      </div>
    </div>
  </section>


  <!--==== Counter Section Start ====-->
  <section class="counterSection ">
    <div class="counterSectionMain">
      <div class="container container-large">
        <div class="section_text small mx-auto text-center mb-4 mb-lg-5">
          <h4 class="section_heading">Numbers you can bank on</h4>
          <p class="fs-16">We asked a diverse range of customers, from small businesses to large enterprises, including general and subcontractors, to understand the benefits they've experienced since implementing our tools. Here are their responses.</p>
        </div>

        <div class="row mb-4 mb-lg-5 pb-lg-3">
          <div class="col-lg-4">
            <div class="counterCard">
              <span class="count">
                84%
              </span>
              <h6 class="fs-25 fw-600 fc-black lh-1-2 mb-2">Improved Project Cost Tracking</h6>
              <p class="fs-16 fw-400">73% of customers agree that Bettamint improves their ability to track and manage</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="counterCard">
              <span class="count">
                89%
              </span>
              <h6 class="fs-25 fw-600 fc-black lh-1-2 mb-2">More Accurate Forecasts</h6>
              <p class="fs-16 fw-400">
                70% of customer respondents agree Bettamint’s budget tool has made their forecasts more accurate.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="counterCard">
              <span class="count">
                17%
              </span>
              <h6 class="fs-25 fw-600 fc-black lh-1-2 mb-2">Reduction in Rework</h6>
              <p class="fs-16 fw-400">
                Customer survey respondents who agree Bettamint helps reduce a reported average reduction of 16%.
              </p>
            </div>
          </div>
        </div>

        <div class="text-center">
          <p class="fc-silver text-center fs-13">*based on a 2023 survey of Bettamint customers.</p>
        </div>
      </div>
    </div>
  </section>
  <!--==== Counter Section end ====-->

  <!--==== Tool Start ====-->
  <section class="toolSection">
    <div class="container">
      <div class="section_text text-center mx-auto mb-4 mb-lg-5 pb-lg-3">
        <h4 class="section_heading ">Tools on the go</h4>
        <p>Gone are the days of tying project managers down to a desktop with excel sheets. <br> These tools are at your side from office to jobsite.</p>
      </div>
      <div class="toolCardContainer">
        <div class="row justify-content-center gap-0 gap-lg-5">
          <div class="col-auto">
            <div class="toolCard">
              <h6 class="d-flex gap-3 fs-30 fc-black fw-600 mb-3">
                <img src="assets/images/icons/tool-icon.svg" alt="reload page">
                Tasks
              </h6>
              <p>Get tasks out of binders & crumbled pages and into your to-do list.</p>
            </div>
          </div>
          <div class="col-auto">
            <div class="toolCard">
              <h6 class="d-flex gap-3 fs-30 fc-black fw-600 mb-3">
                <img src="assets/images/icons/tool-icon.svg" alt="reload page">
                Field Notes
              </h6>
              <p>Assign critical snags to contractors and subs on the go.</p>
            </div>
          </div>
          <div class="col-auto">
            <div class="toolCard">
              <h6 class="d-flex gap-3 fs-30 fc-black fw-600 mb-3">
                <img src="assets/images/icons/tool-icon.svg" alt="reload page">
                Variations
              </h6>
              <p>Stay on top of change requests and their impact on profit.</p>
            </div>
          </div>
          <div class="col-auto">
            <div class="toolCard">
              <h6 class="d-flex gap-3 fs-30 fc-black fw-600 mb-3">
                <img src="assets/images/icons/tool-icon.svg" alt="reload page">
                Reports
              </h6>
              <p>Generate insights you need to report to the office in one click.</p>
            </div>
          </div>
          <div class="col-auto">
            <div class="toolCard">
              <h6 class="d-flex gap-3 fs-30 fc-black fw-600 mb-3">
                <img src="assets/images/icons/tool-icon.svg" alt="reload page">
                Budgets
              </h6>
              <p>Keep your eye on the bottom
                line.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Tool end ====-->


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