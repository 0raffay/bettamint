<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Newsroom | <?php echo $siteName; ?></title>

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
      <img src="assets/images/banners/news-banner.png" alt="Hero Banner">
    </div>
    <div class="bannerTextContainer">
      <div class="container">
        <div class="bannerText mx-auto text-center">
          <h1 class="bannerTitle mb-3">Latest from <br>
            the News Room</h1>
          <div class="d-flex align-items-center gap-3 justify-content-center">
            <a href="#" class="btn btn-secondary">Sign Up Now</a>
            <a href="#" class="btn btn-primary">Request a Demo</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Banner end ====-->

  <!--==== news Section start ====-->
  <?php include("sections/news-section.php"); ?>
  <!--==== news Section end ====-->

  <!--====Latst Blog start ====-->
  <section class="latestBlogSection">
    <div class="container container-large pb-lg-5">
      <div class="row justify-content-between mb-lg-5 mb-3">
        <div class="col-lg-auto">
          <h4 class="fs-25 fw-600 lh-1-5 fc-black">Latest From The Blog</h4>
        </div>
        <div class="col-lg-auto text-center text-lg-end">
          <a href="#" class="btn btn-secondary-300">Visit All</a>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-auto">
          <div class="newsCard">
            <div class="img_wrap">
              <img src="assets/images/news-1.jpg" alt="Reload Page">
            </div>
            <div class="newsCardText">
              <span class="purpleDate  mb-1 fc-secondary lts-1 d-block fs-16 text-uppercase fw-700">Saturday Event - 13 july 2023</span>
              <h6 class="fs-22 fw-700 fc-black mb-2">Lorem ipsum is Dummy text rela #RoadtoBetta.</h6>
              <p class="fw-600 mb-3">Contractors & Developers will gather </p>
              <div class="d-flex align-items-center">
                <img src="assets/images/person-icon-1.png" class="me-2 d-block" alt="Reload Page">
                <strong class="border-right fw-700 fc-black fs-13">By: Reality & More</strong>
                <span class="fs-14 fw-400 news-dot fc-silver">Friday, 1 April 2022</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-auto">
          <div class="newsCard">
            <div class="img_wrap">
              <img src="assets/images/news-2.jpg" alt="Reload Page">
            </div>
            <div class="newsCardText">
              <span class="purpleDate mb-1 fc-secondary  d-block fs-16 text-uppercase fw-700">#thereisabetterway</span>
              <h6 class="fs-22 fw-700 fc-black mb-2">Lorem ipsum is Dummy text rela #RoadtoBetta.</h6>
              <p class="fw-600 mb-3">Contractors & Developers will gather </p>
              <div class="d-flex align-items-center">
                <img src="assets/images/person-icon-1.png" class="me-2 d-block" alt="Reload Page">
                <strong class="border-right fw-700 fc-black fs-13">By: Reality & More</strong>
                <span class="fs-14 fw-400 news-dot fc-silver">Friday, 1 April 2022</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-auto">
          <div class="newsCard">
            <div class="img_wrap">
              <img src="assets/images/news-3.jpg" alt="Reload Page">
            </div>
            <div class="newsCardText">
              <span class="purpleDate  mb-1 fc-secondary lts-1 d-block fs-16 text-uppercase fw-700">Saturday Event - 13 july 2023</span>
              <h6 class="fs-22 fw-700 fc-black mb-2">Lorem ipsum is Dummy text rela #RoadtoBetta.</h6>
              <p class="fw-600 mb-3">Contractors & Developers will gather </p>
              <div class="d-flex align-items-center">
                <img src="assets/images/person-icon-1.png" class="me-2 d-block" alt="Reload Page">
                <strong class="border-right fw-700 fc-black fs-13">By: Reality & More</strong>
                <span class="fs-14 fw-400 news-dot fc-silver">Friday, 1 April 2022</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-auto">
          <div class="newsCard">
            <div class="img_wrap">
              <img src="assets/images/news-4.jpg" alt="Reload Page">
            </div>
            <div class="newsCardText">
              <span class="purpleDate mb-1 fc-secondary  d-block fs-16 text-uppercase fw-700">#thereisabetterway</span>
              <h6 class="fs-22 fw-700 fc-black mb-2">Lorem ipsum is Dummy text rela #RoadtoBetta.</h6>
              <p class="fw-600 mb-3">Contractors & Developers will gather </p>
              <div class="d-flex align-items-center">
                <img src="assets/images/person-icon-1.png" class="me-2 d-block" alt="Reload Page">
                <strong class="border-right fw-700 fc-black fs-13">By: Reality & More</strong>
                <span class="fs-14 fw-400 news-dot fc-silver">Friday, 1 April 2022</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="splide" id="newsLogoSlider">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="img_wrap">
                <img src="assets/images/news-logo/1.png" alt="Reload Page" />
              </div>
            </li>
            <li class="splide__slide">
              <div class="img_wrap">
                <img src="assets/images/news-logo/2.png" alt="Reload Page" />
              </div>
            </li>
            <li class="splide__slide">
              <div class="img_wrap">
                <img src="assets/images/news-logo/3.png" alt="Reload Page" />
              </div>
            </li>
            <li class="splide__slide">
              <div class="img_wrap">
                <img src="assets/images/news-logo/4.png" alt="Reload Page" />
              </div>
            </li>
            <li class="splide__slide">
              <div class="img_wrap">
                <img src="assets/images/news-logo/5.png" alt="Reload Page" />
              </div>
            </li>
            <li class="splide__slide">
              <div class="img_wrap">
                <img src="assets/images/news-logo/6.png" alt="Reload Page" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--====Latst Blog end ====-->



  <!--==== FOOTER START ====-->
  <?php include('includes/footer.php'); ?>
  <!--==== FOOTER END ====-->

  <!--==== SCRIPTS START ====-->
  <?php include('includes/footer-scripts.php'); ?>
  <!--==== SCRIPTS END ====-->
</body>

</html>