<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us | <?php echo $siteName; ?></title>

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
  <section class="banner prop-bottom-left">
    <div class="bannerImage">
      <img src="assets/images/banners/about-banner.png" alt="Hero Banner">
    </div>
    <div class="bannerTextContainer">
      <div class="container">
        <div class="bannerText mx-auto text-center">
          <h6 class="bannerLabel">CONSTRUCTION MANAGEMENT SOFTWARE</h6>
          <h1 class="bannerTitle">We're obsessed with
            construction.</h1>
          <p class="bannerSubtitle small">We’re not just in the construction business, we live and breathe it. For over 30 years, we've worked with industry folks across geographies, enterprise sizes and asset classes to build solutions around the way you work . We've been right there, figuring out the best ways to make your project flow smoothly and ensuring your team gets paid without a hitch. Curious about what we offer?</p>
          <div class="d-flex align-items-center gap-3 justify-content-center">
            <a href="#" class="btn btn-secondary">Sign Up Now</a>
            <a href="#" class="btn btn-primary">Request a Demo</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Banner end ====-->
  <!--==== Solutions start ====-->
  <section class="solutionsSection bg-black prop-bottom-right prop-sm" id="solutions">
    <div class="container pb-md-5">
      <div class="section_text mb-4 mb-lg-5 pb-lg-3">
        <h4 class="section_heading fc-white text-center">Explore our solutions for</h4>
      </div>
      <div class="bannerCardContainer">
        <div class="row justify-content-between">
          <div class="col-sm-6 mx-auto mb-lg-0 mb-4 col-lg-auto">
            <div class="bannerCard mx-auto">
              <div class="img_wrap">
                <img src="assets/images/developers.jpg" alt="Reload Page">
              </div>
              <a href="" class="white-link-button fs-25 fw-600 d-flex justify-content-between hover-white">Developers <i class="arrow-right-icon-green"></i></a>
            </div>
          </div>
          <div class="col-sm-6 mx-auto mb-lg-0 mb-4 col-lg-auto">
            <div class="bannerCard mx-auto">
              <div class="img_wrap">
                <img src="assets/images/general-contractors.jpg" alt="Reload Page">
              </div>
              <a href="" class="white-link-button fs-25 fw-600 d-flex justify-content-between hover-white">Sub Contractors  <i class="arrow-right-icon-green"></i></a>
            </div>
          </div>
          <div class="col-sm-6 mx-auto mb-lg-0 mb-4 col-lg-auto">
            <div class="bannerCard mx-auto">
              <div class="img_wrap">
                <img src="assets/images/sub-contractors.jpg" alt="Reload Page">
              </div>
              <a href="" class="white-link-button fs-25 fw-600 d-flex justify-content-between hover-white">General Contractors <i class="arrow-right-icon-green"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Solutions end ====-->

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


  <section class="panelSection">
    <div class="container container-large">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <h6 class="purple_label mb-2">WE HELP BUILD BETTER</h6>
          <h4 class="section_heading mb-3">We build technology that moves
            the industry forward</h4>
          <p class="fs-18 mb-3">We’re shaking things up in the construction world. Tired of hearing that construction is always a step behind in tech? So are we! That's why we're here – bringing in cool tech that not only gets the job done but also boosts your profits, keeps your data safe, and makes your team super productive.</p>
        </div>
        <div class="col-lg-6">
          <img src="assets/images/pm-2.png" alt="Reload Page">
        </div>
      </div>
  </section>

  <!--==== Counter Section Start ====-->
  <?php
  $counter_section_heading = "Support your core business <br>
  with real ROI data.";
  $count_1 = "53% ";
  $count_1_text = " of developers say their existing teams can manage more projects with Bettamint.";
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

  <!--==== FOOTER START ====-->
  <?php include('includes/footer.php'); ?>
  <!--==== FOOTER END ====-->

  <!--==== SCRIPTS START ====-->
  <?php include('includes/footer-scripts.php'); ?>
  <!--==== SCRIPTS END ====-->
</body>

</html>