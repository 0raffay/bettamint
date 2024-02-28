<?php
include( "includes/site-info.php" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Latest Updates | <?php echo $siteName; ?></title>
<?php include("includes/compatibility.php"); ?>
<?php include("includes/og.php"); ?>

<!-- META TITLE AND DESCRIPTION -->
<meta name="description" content="">
<meta name="keywords" content="">
<!-- META TITLE AND DESCRIPTION --> 
<style>
    .animate-logo {
      width: max-content;
      overflow-x: hidden;
      white-space: nowrap;
      display: flex;
      gap: 30px;
    }

    .animate-logo {
      animation: 60s slide infinite linear
    }

    @keyframes slide {
      from {
        transform: translateX(0);
      }

      to {
        transform: translateX(-100%);
      }
    }

    ul.tabs {
      padding: 15px;
      border: 0 !important;
      display: flex;
      width: 100%;
      justify-content: space-around;
      padding-bottom: 15px;
      background: #f9f6fd;
    }

    ul.tabs li {
      cursor: pointer;
      /* border-bottom: 3px solid #f7f7f7; */
      background: #e7defd;
      color: #a179f4;
      font-weight: 400;
      text-decoration: none;
      position: relative;
      width: 50%;
      text-align: center;
      border-right: 1px solid #fff;
      line-height: 50px;
      transition: all 100ms ease;
      letter-spacing: -.2px;
      font-size: 18px;
    }

    ul.tabs li.active-tab {
      position: relative;
      color: #fff;
      background: #9f78f2;
      /* border-bottom: 3px solid #9f78f2; */
      font-weight: 600;
      text-decoration: none;
    }

    .custom-adjustments:nth-child(2) {
      margin-top: 50px;
    }

    .content-container h3 {
      font-weight: 500;
    font-size: 23px;
    line-height: 130%;
    color: #151411;
    margin: 0 0 20px;
    border: 0px none;
    letter-spacing: -1px;
    min-height: 65px;
    }

    .flex-bot {
      color: #000;
    }

    .flex-bot time {
    color: #9b9b9b;
}

    .img-container:hover img {
      transition: transform .2s;
    }

    .img-container {
      margin-bottom: 10px;
      height: 264px;
      overflow: hidden;
      border-radius: 4px !important;
      width: 100%;
      margin-top: 25px;
    }

    .img-container img {
      width: 100%;

    }
    .press-rel-box {
    background: #f9f7f7;
    position:relative;
}
.press-rel-box:after {
    content:"";
    position: absolute;
    background-image: url(assets/images/green-corner.png);
    width:35px;
    height:76px;
    bottom:0px;
    
}
.content-container {
    padding: 0px 15px 15px;
}
.flex-bot {
    color: #000;
    text-align: center;
    padding: 0 30px 15px;
    display: flex;
    justify-content: space-between;
}

.press-rel-box {
    background: #f9f7f7;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Add transition for smooth effect */
}

/* Define hover effect */
.press-rel-box:hover {
    transform: scale(1.05); /* Slight zoom on hover */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add drop shadow on hover */
}

@media only screen and (max-width: 992px) {
  .img-container {
    height: auto; 
}
}
  </style>
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
  <div class="bannerImage"> <img src="assets/images/banners/latestupdate-banner.png" alt="Hero Banner"> </div>
  <div class="bannerTextContainer">
    <div class="container">
      <div class="bannerText mx-auto text-center">
      <h6 class="bannerLabel">News & Updates<h6>
        <h1 class="bannerTitle mb-3">Latest Updates</h1>
          <p class="bannerSubtitle medium">Keep up with Bettamint's latest updates to now more about the product</p>  
        <div class="d-flex align-items-center gap-3 justify-content-center"> <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a> <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a> </div>
      </div>
    </div>
  </div>
</section>
<!--==== Banner end ====-->

<section id="carrer-top-sec">
  <div class="container">
    <ul class="tabs">
      <li class="active-tab">Articles</li>
      <li>Press Releases</li>
    </ul>
    <div class="tabs-content custom-adjustments">
      <li class="row" style="">
		<div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a href="articles/bettamint-unveils-bettapay-a-leap-forward-in-construction-sector-payments.php">
            <div class="img-container"> <img alt="reload" src="https://bettamint.com/assets/images/latest-article-images/business-standard.jpg"> </div>
            <div class="content-container">
              <h3>Bettamint Unveils Bettapay: A Leap Forward in Construction Sector Payments</h3>
            </div>
            <div class="flex-bot">BNN Breaking
              <time datetime="February 21st 2024">February 21st 2024</time>
            </div>
            </a> </div>
        </div>  
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a href="articles/bettamint-launches-payments-solution-for-construction-industry.php">
            <div class="img-container"> <img alt="reload" src="https://bettamint.com/assets/images/latest-article-images/bettamint-launches-thumb.png"> </div>
            <div class="content-container">
              <h3>Bettamint launches payments solution for construction industry</h3>
            </div>
            <div class="flex-bot">Economic Times
              <time datetime="February 21st 2024">February 21st 2024</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/outlook-2024.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/5-innovative-solutions-thumb.png?v=<?php echo time(); ?>"> </div>
            <div class="content-container">
              <h3>Outlook 2024 for Tier 2 Indian Real Estate market and way...</h3>
            </div>
            <div class="flex-bot">Mid Day
              <time datetime="January 2, 2024">January 25, 2024</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/indian-real-estate-sector.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/reality-small.png?v=<?php echo time(); ?>"> </div>
            <div class="content-container">
              <h3>Indian Real Estate Sector: Skyscraper In 2023, Realty Indices Too...</h3>
            </div>
            <div class="flex-bot">Realty n More
              <time datetime="January 2, 2024">January 2, 2024</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/5-innovative-solutions-combating-workforce-shortages-through-cutting-edge-technology-in-2024.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/kez-small.png?v=<?php echo time(); ?>"> </div>
            <div class="content-container">
              <h3>5 innovative solutions combating workforce shortages through...</h3>
            </div>
            <div class="flex-bot">Mid Day
              <time datetime="1st September 2023">January 2, 2024</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/residential-real-estate-set-to-scale-new-peak-in-2024.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/residentail-real-state.png?v=<?php echo time(); ?>"> </div>
            <div class="content-container">
              <h3>Residential Real Estate Set To Scale New Peak In 2024 Experts</h3>
            </div>
            <div class="flex-bot">The Economic Times
              <time datetime="1st September 2023">December 28, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/investing-in-a-better-world.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/better-world.png"> </div>
            <div class="content-container">
              <h3>Investing in a Better World <br />
              </h3>
            </div>
            <div class="flex-bot">Construction World 
              <time datetime="December 1, 2023">December 1, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/we-are-revolutionizing-of-construction-workforce-management-by-building-unique-digital-employment-ecosystem-for-informal-wage-workers-in-india-bettamint-ceo.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/business-standard.jpg"> </div>
            <div class="content-container">
              <h3>We Are Revolutionizing Construction Workforce Management By...</h3>
            </div>
            <div class="flex-bot">Realty & More
              <time datetime="1st September 2023">October 31, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/revolutionizing-construction-bettamints-vision-for-industry-and-workers.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/opportunity-india.jpg"> </div>
            <div class="content-container">
              <h3>Revolutionizing Construction Bettamint’s Vision for Industry...</h3>
            </div>
            <div class="flex-bot">NewsX
              <time datetime="1st September 2023">September 21, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/construction-tech-startup-bettamint-ties-up-with-prestige-groups-arm-to-manage-informal-workers.php">
            <div class="img-container"> <img alt="reload" src="assets/images/news-updates/kez-3.jpg?v=<?php echo time(); ?>"> </div>
            <div class="content-container">
              <h3>Construction tech startup Bettamint ties up with Prestige Group’s...</h3>
            </div>
            <div class="flex-bot">Economic Times 
              <time datetime="1st September 2023">August 24, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/from-invisible-to-invincible-digital-payments-and-the-rise-of-indias-informal-economy.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/bw.jpg"> </div>
            <div class="content-container">
              <h3>From Invisible To Invincible Digital Payments And The Rise... </h3>
            </div>
            <div class="flex-bot">Times Of India 
              <time datetime="1st September 2023">August 3, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/workforce-dynamics-bettamint-kezya-de-braganca-on-needs-construction-companies.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/tech-graph.jpg"> </div>
            <div class="content-container">
              <h3>Navigating Workforce Dynamics Bettamint CEO Kezya De Braganca...</h3>
            </div>
            <div class="flex-bot">Tech Graph 
              <time datetime="1st September 2023">July 31, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/building-a-digital-future-For-construction-workers-bettamint.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/bw.jpg"> </div>
            <div class="content-container">
              <h3>Building A Digital Future For Construction Workers Bettamint</h3>
            </div>
            <div class="flex-bot">Business World 
              <time datetime="1st September 2023">July 21, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/speaker-spotlight-meet-kezya-de-braganca.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/diversity.jpg"> </div>
            <div class="content-container">
              <h3>Speaker Spotlight Meet Kezya De Bragança </h3>
            </div>
            <div class="flex-bot">diversityQ 
              <time datetime="1st September 2023">June 8, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/industry-decoding-workforce-crisis-in-construction-innovative-approaches-and-breakthroughs.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/financial-express.jpg"> </div>
            <div class="content-container">
              <h3>Decoding workforce crisis in construction Innovative...</h3>
            </div>
            <div class="flex-bot">Financial Express 
              <time datetime="1st September 2023">June 6, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/revolutionizing-the-construction-industrys-employment-ecosystem.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/opportunity-india.jpg"> </div>
            <div class="content-container">
              <h3>Revolutionizing the Construction Industry's...</h3>
            </div>
            <div class="flex-bot">Opportunity India 
              <time datetime="1st September 2023">May 30, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/overcoming-last-mile-data-challenges-in-construction.php">
            <div class="img-container"> <img alt="reload" src="https://bettamint.com/assets/images/media-kit/thumb-3.png?v=<?php echo time(); ?>"> </div>
            <div class="content-container">
              <h3>Overcoming Last Mile Data Challenges in Construction</h3>
            </div>
            <div class="flex-bot">Mid Day 
              <time datetime="1st September 2023">May 22, 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a target="_blank" href="articles/kezya-de-braganca-on-constructing-you-having.php">
            <div class="img-container"> <img alt="reload" src="assets/images/latest-article-images/diversity-2.jpg"> </div>
            <div class="content-container">
              <h3>Kezya de Braganca on Constructing You - Having a High...</h3>
            </div>
            <div class="flex-bot">Apple Podcasts 
              <time datetime="1st September 2023">May 6, 2023</time>
            </div>
            </a> </div>
        </div>
      </li>
      <li class="row" style="">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a href="articles/bettamint-introduces-its-payment-product-bettapay-the-future-of-construction-payments.php">
            <div class="img-container"> <img alt="reload" src="https://bettamint.com/assets/images/press-release/bettapay.png?v=<?php echo time(); ?>"> </div>
            <div class="content-container">
              <h3>Bettamint Introduces its payment product ‘Bettapay’: The future of Construction Payments</h3>
            </div>
            <div class="flex-bot">Bangalore, India 
              <time datetime="February 08th 2024">February 21st 2024</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a href="articles/secrets-of-the-construction-industry.php">
            <div class="img-container"> <img alt="reload" src="https://bettamint.com/assets/images/press-release/thumb-4.jpg?v=<?php echo time(); ?>"> </div>
            <div class="content-container">
              <h3>Bettamint's Founder Co-Authors "Secrets of the Construction Industry" – A Landmark Anthology by Global Construction Leaders</h3>
            </div>
            <div class="flex-bot">Bangalore, India 
              <time datetime="December  09th 2023">December 09th 2023</time>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="press-rel-box"> <a href="articles/bettamint-unveils-revolutionary-app-to-transform-unstructured-construction-landscape.php">
            <div class="img-container"> <img alt="reload" src="https://bettamint.com/assets/images/media-kit/thumb-3.png?v=<?php echo time(); ?>"> </div>
            <div class="content-container">
              <h3>Bettamint Unveils Revolutionary App to Transform Unstructured...</h3>
            </div>
            <div class="flex-bot">Bangalore, India 
              <time datetime="1st September 2023">September 12th 2023</time>
            </div>
            </a> </div>
        </div>
      </li>
    </div>
  </div>
</section>
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


<script>
    jQuery("document").ready(function() {

      var activeIndex = $('.active-tab').index(),

        $contentlis = $('.tabs-content li'),

        $tabslis = $('.tabs li');



      // Show content of active tab on loads

      $contentlis.eq(activeIndex).show();



      jQuery('.tabs').on('click', 'li', function(e) {

        var $current = $(e.currentTarget),

          index = $current.index();



        $tabslis.removeClass('active-tab');

        $current.addClass('active-tab');

        $contentlis.hide().eq(index).show();

      });



      setTimeout(function() {

        jQuery("ul.tabs li:first-child").trigger('click');

      }, 10);

    });
  </script>
</body>
</html>