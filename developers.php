<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Developers | <?php echo $siteName; ?></title>

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
        <img src="assets/images/banners/developers-banner.png" alt="Hero Banner">
      </div>
      <div class="bannerTextContainer">
        <div class="container">
          <div class="bannerText mx-auto text-center">
            <h6 class="bannerLabel">FINANCIAL MANAGEMENT FOR DEVELOPERS</h6>
            <h1 class="bannerTitle">Developers</h1>
            <p class="bannerSubtitle small">Bettamint’s industry standard platform is the highest ranked construction management software for our ability to help drive growth and minimize exposure for the people who pay the bills.</p>
            <div class="d-flex align-items-center gap-3 justify-content-center"> <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a> <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-black bannerMobileContainer prop-bottom-right">
      <div class="container position-relative">
        <img class="bannerMobileImage" src="assets/images/developer-phone.png" alt="Reload Page">
        <div class="row justify-content-end">
          <div class="col-xl-7">
            <h4 class="section_heading fc-white mb-4">Take control of every step of <br>
              your projects’ execution.</h4>
            <p class="fs-18 fw-400 mb-4">Keep a close watch on your contracts being fulfilled to conformance with centralised collaboration and standardised, auditable processes all reinforced with powerful reporting tools.</p>

            <div class="mb-4 mb-lg-5">
              <a href="#" class="white-link-button hover-white fs-25 gap-4 mb-3 pb-1">Monitor The Pace of Your Project <i class="arrow-right-icon-green"></i></a>
              <p class="fs-18">Boost your team's productivity, enabling more efficient project management with a smaller workforce, even as projects scale up.</p>
            </div>
            <div class="mb-4 mb-lg-5">
              <a href="#" class="white-link-button hover-white fs-25 gap-4 mb-3 pb-1">Know your real time financial position <i class="arrow-right-icon-green"></i></a>
              <p class="fs-18">Monitor financial health in real time. Aggregate data in one place for a clear view of financial status across projects and the entire portfolio.</p>
            </div>
            <div class="mb-4 mb-lg-5">
              <a href="#" class="white-link-button hover-white fs-25 gap-4">Standardise project delivery <i class="arrow-right-icon-green"></i></a>
              <p class="fs-18">Deliver projects consistently, leveraging standardised insights for increased safety, efficiency, and cost-effectiveness.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!--==== Banner end ====-->

  <!--==== Leading Company start ====-->
  <section class="leadingCompanySection">
    <div class="container py-md-5">
      <div class="section_text small mb-4 mb-md-5 mx-auto text-center">
        <h4 class="section_heading lh-1 mb-3">Leading developers trust Bettamint</h4>
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

  <!--==== Performence Section start ====-->
  <section class="performenceSection ">
    <div class="container container-large">
      <div class="section_text mb-4 mb-lg-5 pb-lg-4">
        <h6 class="text-center fs-18 lh-normal text-uppercase fw-400 fc-grey-700" style="letter-spacing: 1px;">Performance Management</h6>
        <h4 class="section_heading text-center">Explore tools purpose built for developers</h4>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-1.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">FINANCIALS</h6>
              <h4 class="section_heading mb-3">Numbers you can bank on</h4>
              <p class="fs-18 fw-400">Have a birds eye view of your project’s financial health and cashflows. View your projected cost per square foot against budgeted numbers, mitigate financial risks with real time data and protect your profit margins.</p>
            </div>
          </div>
        </div>
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
              <h4 class="section_heading mb-3 text-md-nowrap">Never let a snag turn into rework</h4>
              <p class="fs-18 fw-400">Track & resolve quality issues, safety concerns, workmanship issues & assign them to the respective contractors ledger via field notes that are geo-tagged & time stamped. All quality issues have an immutable, auditable financial outcome.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-3.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">CONSTRUCTION INTELLIGENCE</h6>
              <h4 class="section_heading mb-3">Leverage every number</h4>
              <p class="fs-18 fw-400">Harness the power of your project data with our suite of tools, including forecasting, analytics, progress reports, and workforce data, for comprehensive, actionable insights and streamlined decision-making.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Performence Section end ====-->


  <!--==== Counter Section Start ====-->
  <?php
  $counter_section_heading = "Support your core business <br>
  with real ROI data.";
  $count_1 = "53%";
  $count_1_text = "of developers say their existing teams can manage more projects with Bettamint.";
  $count_2 = "89%";
  $count_2_text = "of owners say they have more protection from litigation with Bettamint";
  $count_3 = "86%";
  $count_3_text = "of developers say Bettamint helps document processes across all projects.";
  include("sections/counter-section.php");
  ?>
  <!--==== Counter Section end ====-->

  <!--==== Solution Card Section start ====-->
  <?php include("sections/solution-card-section.php"); ?>
  <!--==== Solution Card Section end ====-->





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