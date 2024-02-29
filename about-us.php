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
          <h6 class="bannerLabel">BUILT FOR BUILDERS BY BUILDERS</h6>
          <h1 class="bannerTitle">We’re obsessed with construction</h1>
          <p class="bannerSubtitle small">We’re not just in the construction business, we live and breathe it. For over 22 years, we’ve worked with industry folks across geographies, enterprise sizes and asset classes to build solutions around the way you work . We’ve been right there, figuring out the best ways to make your project flow smoothly and ensuring your team gets paid without a hitch. Curious about what we offer?</p>
          <div class="d-flex align-items-center gap-3 justify-content-center"> <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a> <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a> </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Banner end ====-->
  <!--==== Solutions start ====-->
  <section class="solutionsSection bg-black prop-bottom-right prop-sm pt-0" id="solutions">
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
              <a href="developers.php" class="white-link-button fs-25 fw-600 d-flex justify-content-between hover-white">Developers <i class="arrow-right-icon-green"></i></a>
            </div>
          </div>
          <div class="col-sm-6 mx-auto mb-lg-0 mb-4 col-lg-auto">
            <div class="bannerCard mx-auto">
              <div class="img_wrap">
                <img src="assets/images/general-contractors.jpg" alt="Reload Page">
              </div>
              <a href="sub-contractors.php" class="white-link-button fs-25 fw-600 d-flex justify-content-between hover-white">Sub Contractors  <i class="arrow-right-icon-green"></i></a>
            </div>
          </div>
          <div class="col-sm-6 mx-auto mb-lg-0 mb-4 col-lg-auto">
            <div class="bannerCard mx-auto">
              <div class="img_wrap">
                <img src="assets/images/sub-contractors.jpg" alt="Reload Page">
              </div>
              <a href="general-contractor.php" class="white-link-button fs-25 fw-600 d-flex justify-content-between hover-white">General Contractors <i class="arrow-right-icon-green"></i></a>
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
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6">
          <img src="assets/images/about-1.png" alt="Reload Page">
        </div>
        <div class="col-lg-5 mb-lg-0 mb-4">
          <h6 class="purple_label mb-2">WE HELP BUILD BETTER</h6>
          <h4 class="section_heading mb-3">We build technology that moves
            the industry forward</h4>
          <p class="fs-18">We’re shaking things up in the construction world. Tired of hearing that construction is always a step behind in tech? So are we! That's why we're here – bringing in cool tech that not only gets the job done but also boosts your profits, keeps your data safe, and makes your team super productive.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="panelSection">
    <div class="container container-large">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-5 mb-lg-0 mb-4">
          <h6 class="purple_label mb-2">BUT THAT’S NOT ALL</h6>
          <h4 class="section_heading mb-3">We care about people, all people</h4>
          <p class="fs-18">We're in a world that's digitizing faster than ever, and we believe everyone should be part of this journey. Especially in emerging economies, it's clear that the true builders – the hardworking people on the ground – haven't fully reaped the benefits of the construction industry's growth. Digital advancements, while remarkable, are often creating gaps rather than bridges. At Bettamint, we’re committed to offering every daily wage earner a chance for a brighter future by delivering a steady and abundant supply of income opportunities and enhancing their participation in the digital economy. Making sure no one is left behind, as we all move foreward.</p>
        </div>
        <div class="col-lg-6">
          <img src="assets/images/about-2.png" alt="Reload Page">
        </div>
      </div>
    </div>
  </section>

  <!--  About Bettamint Start  -->
  <section class="aboutSection">
    <div class="container-fluid px-lg-0 overflow-hidden">
      <div class="section_text small mx-auto mb-4 mb-lg-5 text-center">
        <h6 class="purple_label">About Bettamint</h6>
        <h4 class="section_heading">We celebrate the possibilities of making the world a better place for all.</h4>
        <p class="fs-18 fw-400 fc-black">We leverage technology and the power of scale to bring digital products and services that are necessary and affordable for daily wage earners, while maximising income for all customers.
        </p>
      </div>
      <div class="aboutSlider dots-variant-1">
        <div class="item">
          <a class="aboutCard d-block position-relative">
            <img src="assets/images/about-pic-one.png" alt="Reload Page">
            <div class="aboutCardText position-absolute">
              <h6>Social Equity</h6>
              <p>We enable fair access to opportunity, income stability and democratise information availability to the digitally disadvantaged.</p>
              <button>Expand <i class="fa-solid fa-up-right-and-down-left-from-center"></i></button>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="aboutCard d-block position-relative">
            <img src="assets/images/about-pic-two.png" alt="Reload Page">
            <div class="aboutCardText position-absolute">
              <h6>Social Inclusion</h6>
              <p>We help workers create an authenticated professional and financial identity, promoting social cohesion and active citizenship.</p>
              <button>Expand <i class="fa-solid fa-up-right-and-down-left-from-center"></i></button>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="aboutCard d-block position-relative">
            <img src="assets/images/about-pic-three.png" alt="Reload Page">
            <div class="aboutCardText position-absolute">
              <h6>Upward Mobility</h6>
              <p>We help improve worker skills, reach, employability and the opportunity to build a better future for themselves.</p>
              <button>Expand <i class="fa-solid fa-up-right-and-down-left-from-center"></i></button>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="aboutCard d-block position-relative">
            <img src="assets/images/about-pic-four.png" alt="Reload Page">
            <div class="aboutCardText position-absolute">
              <h6>Behaviourism</h6>
              <p>We equip daily wage workers with the tools and resources to move from a job mindset to an entrepreneurial mindset.</p>
              <button>Expand <i class="fa-solid fa-up-right-and-down-left-from-center"></i></button>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="aboutCard d-block position-relative">
            <img src="assets/images/about-pic-five.png" alt="Reload Page">
            <div class="aboutCardText position-absolute">
              <h6>Financial Literacy</h6>
              <p>Our financial products allow workers to easily manage their day to day needs and participate in the digital economy.</p>
              <button>Expand <i class="fa-solid fa-up-right-and-down-left-from-center"></i></button>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="aboutCard d-block position-relative">
            <img src="assets/images/about-pic-six.png" alt="Reload Page">
            <div class="aboutCardText position-absolute">
              <h6>Micro-Commerce</h6>
              <p>We lay the foundational infrastructure unlocking new products and services that are necessary and affordable to daily wage workers.</p>
              <button>Expand <i class="fa-solid fa-up-right-and-down-left-from-center"></i></button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--  About Bettamint End  -->


  <!-- Comapny Logo Slider End  -->
  <!--<section class="companySliderSection">
    <div class="container py-md-5">
      <div class="section_text mb-4 mb-lg-5 pb-lg-3 text-center small mx-auto">
        <h4 class="section_heading lh-1 mb-3">Fueling our Innovation</h4>
        <p>Our invaluable partners play a significant role in enabling us to deliver solutions of the highest caliber that consistently drive impactful results for our clients. Each partnership amplifies our resolve to transform and streamline the building process, fostering an environment of innovation and excellence.</p>
      </div>
      <div class="companySlider dots-variant-1">
        <div class="item">
          <ul class="row align-items-center text-center px-3 px-md-0">
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/1.png" width="168" height="36" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/2.png" width="130" height="75" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/3.png" width="200" height="28" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/4.png" width="210" height="81" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/5.png" width="200" height="47" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-0 mb-sm-5">
              <img src="assets/images/slider-logo/6.png" width="200" height="62" alt="Reload Page">
            </li>
          </ul>
        </div>
        <div class="item">
          <ul class="row align-items-center text-center px-3 px-md-0">
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/1.png" width="168" height="36" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/2.png" width="130" height="75" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/3.png" width="200" height="28" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/4.png" width="210" height="81" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-5">
              <img src="assets/images/slider-logo/5.png" width="200" height="47" alt="Reload Page">
            </li>
            <li class="col-sm-6 col-lg-4 px-3 px-sm-0 mb-0 mb-sm-5">
              <img src="assets/images/slider-logo/6.png" width="200" height="62" alt="Reload Page">
            </li>
          </ul>
        </div>
      </div>


    </div>
  </section>-->
  <!-- Comapny Logo Slider End  -->

  <section class="esgImpactSection">
    <div class="container">
      <div class="row mb-4 align-items-center justify-content-between mb-lg-5 pb-3 border-bottom">
        <div class="col-sm-6">
          <h4 class="section_heading mb-0 fs-70 fw-600">Our ESG Impact</h4>
        </div>
        <div class="col-auto">
          <img src="assets/images/esg-impact.png" alt="Reload Page">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-1.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">FINANCIALS</h6>
              <h4 class="section_heading mb-3">Financial Inclusion</h4>
              <p class="fs-18 fw-400">We help informal workers build a verifiable record of their earnings and access, earned wage and affordable credit lines.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-1.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">Equity</h6>
              <h4 class="section_heading mb-3">Social Equity</h4>
              <p class="fs-18 fw-400">We enable fair access to a steady ad abundant supply of income opportunities for the informal construction workforce.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-2.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">SOCIAL</h6>
              <h4 class="section_heading mb-3 text-md-nowrap">Social Inclusion</h4>
              <p class="fs-18 fw-400">We help informal workers create an authenticated professional and financial identity promoting social cohesion and active citizenship.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-3.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">Mobility</h6>
              <h4 class="section_heading mb-3">Upward Mobility</h4>
              <p class="fs-18 fw-400">We empower informal workers to enhance their skills, reach & employability to build a better future for themselves.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-3.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">WELFARE</h6>
              <h4 class="section_heading mb-3">Welfare Distribution</h4>
              <p class="fs-18 fw-400">We lay the data infrastructure for efficient delivery of welfare measures to intended beneficiaries.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="performenceCards d-flex flex-column flex-lg-row">
            <div class="img_wrap flex-shrink-0">
              <img src="assets/images/icons/performence-3.svg" alt="Reload Page">
            </div>
            <div class="text_wrap">
              <h6 class="purple_label mb-1">Mobility</h6>
              <h4 class="section_heading mb-3">Behaviourism</h4>
              <p class="fs-18 fw-400">We equip informal workers with the tools and resources to move from a job mindset to an entrepreneurial mindset.</p>
            </div>
          </div>
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