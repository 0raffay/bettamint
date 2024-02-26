<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blog | <?php echo $siteName; ?></title>

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
  <section class="banner blogBanner prop-bottom-left">
    <div class="bannerSlider dots-variant-1 overflow-hidden">
      <div class="item position-relative">
        <div class="bannerImage">
          <img src="assets/images/banners/blog-banner-1.png" alt="Hero Banner">
        </div>
        <div class="bannerTextContainer">
          <div class="container">
            <div class="bannerText mx-auto text-center">
              <h6 class="bannerLabel mb-1">Finance</h6>
              <h1 class="section_heading fc-white mb-2">The Rise of Digital Wage Payments Transforming
                India’s Construction Sector</h1>
              <p class="bannerSubtitle small">The Indian Government's recent directive, as reported on 31 January 2024, urging employers to ensure that all wage payments to workers are made digitally is a landmark move.</p>
              <a href="#" class="btn btn-secondary">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="item position-relative">
        <div class="bannerImage">
          <img src="assets/images/banners/blog-banner-1.png" alt="Hero Banner">
        </div>
        <div class="bannerTextContainer">
          <div class="container">
            <div class="bannerText mx-auto text-center">
              <h6 class="bannerLabel mb-1">Finance</h6>
              <h1 class="section_heading fc-white mb-2">The Rise of Digital Wage Payments Transforming
                India’s Construction Sector</h1>
              <p class="bannerSubtitle small">The Indian Government's recent directive, as reported on 31 January 2024, urging employers to ensure that all wage payments to workers are made digitally is a landmark move.</p>
              <a href="#" class="btn btn-secondary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Banner end ====-->

  <!--==== Blog Start ====-->
  <section class="blogSection">
    <div class="container container-large">
      <div class="blogTabbingButtons">

      </div>

      <div class="row">
        <div class="col-lg-4">
          <a class="blogCard d-block" href="#">
            <div class="img_wrap">
              <img src="assets/images/blog-1.jpg" alt="Reload Page">
            </div>
            <div class="blogCardText">
              <h6 class="blogTitle">The Rise of Digital Wage Payments
                Transforming India’s Construction
                Sector</h6>
              <div class="d-flex gap-2 mb-3">
                <span class="authorName">Kezya de Braganca</span>
                <time class="blogDate">12 May 2023</time>
              </div>
              <p class="blogCardExcerpt">Browsing history and general internet activity from your ISP (internet service provider) and your real IP from websites and services that you use online.</p>
              <div class="d-flex align-items-center justify-content-between">
                <span class="fs-20 fw-400 fc-black opacity-75 text-capitalize">Finance</span>
                <button class="blogCardButton">Read More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a class="blogCard d-block" href="#">
            <div class="img_wrap">
              <img src="assets/images/blog-1.jpg" alt="Reload Page">
            </div>
            <div class="blogCardText">
              <h6 class="blogTitle">The Rise of Digital Wage Payments
                Transforming India’s Construction
                Sector</h6>
              <div class="d-flex gap-2 mb-3">
                <span class="authorName">Kezya de Braganca</span>
                <time class="blogDate">12 May 2023</time>
              </div>
              <p class="blogCardExcerpt">Browsing history and general internet activity from your ISP (internet service provider) and your real IP from websites and services that you use online.</p>
              <div class="d-flex align-items-center justify-content-between">
                <span class="fs-20 fw-400 fc-black opacity-75 text-capitalize">Finance</span>
                <button class="blogCardButton">Read More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a class="blogCard d-block" href="#">
            <div class="img_wrap">
              <img src="assets/images/blog-1.jpg" alt="Reload Page">
            </div>
            <div class="blogCardText">
              <h6 class="blogTitle">The Rise of Digital Wage Payments
                Transforming India’s Construction
                Sector</h6>
              <div class="d-flex gap-2 mb-3">
                <span class="authorName">Kezya de Braganca</span>
                <time class="blogDate">12 May 2023</time>
              </div>
              <p class="blogCardExcerpt">Browsing history and general internet activity from your ISP (internet service provider) and your real IP from websites and services that you use online.</p>
              <div class="d-flex align-items-center justify-content-between">
                <span class="fs-20 fw-400 fc-black opacity-75 text-capitalize">Finance</span>
                <button class="blogCardButton">Read More</button>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--==== Blog End ====-->


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