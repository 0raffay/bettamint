<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bettapay | <?php echo $siteName; ?></title>

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

  <!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- Header -->

  <!--==== Banner start ====-->
  <section class="banner prop-bottom-left">
    <div class="bannerImage">
      <img src="assets/images/banners/bettapay-banner.png" alt="Hero Banner">
    </div>
    <div class="bannerTextContainer">
      <div class="container">
        <div class="bannerText not-small mx-auto text-center">
          <img src="assets/images/bettapay.png" alt="Reload Page">
          <h1 class="bannerTitle">Pioneering Digital <br>
            Payments For Your <br>
            Construction Workforce</h1>
          <p class="bannerSubtitle small">Bettapay ensures reliability, convenience and speed in the distribution of payments to a dynamic group of beneficiaries at your construction site.</p>
          <div class="d-flex align-items-center gap-3 justify-content-center">
            <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a>
            <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Banner end ====-->
  <!--==== Solutions start ====-->
  <section class="solutionsSection bg-black prop-bottom-right prop-sm pt-0" id="solutions">
    <div class="container pb-md-5">
      <div class="section_text mb-4 mb-lg-5 text-center pb-lg-3">
        <img src="assets/images/bettapay.png" class="mb-2" alt="Reload Pag">
        <h4 class="section_heading fc-white mb-3">Because, there’s a better way!</h4>
        <p class="fs-18 fw-400 fc-white">BettaPay’s open architecture design simplifies payments between construction firms and their independent contractors: handling a variety of payment types, from attendance-linked wage payments and time-bound rewards to meticulous bill settlements aligned with task completion. Experience the ease of streamlined payments with BettaPay – where precision and security meet the ultimate convenience.</p>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-7 text-center">
          <img src="assets/images/bettapay-1.png" alt="">
        </div>
        <div class="col-lg-auto">
          <ul class="bettapayBannerList">
            <li class="d-flex align-items-center">
              <span class="number fs-45 fw-800 fc-secondary">65%</span>
              <p class="fs-18 fw-400 fc-white">of contractors pay their wage workers in cash for lack of access to beneficiary information.</p>
            </li>
            <li class="d-flex align-items-center">
              <span class="number fs-45 fw-800 fc-secondary">72%</span>
              <p class="fs-18 fw-400 fc-white">of all attrition at construction sites was caused due to delayed payments to workers.</p>
            </li>
            <li class="d-flex align-items-center">
              <span class="number fs-45 fw-800 fc-secondary">84%</span>
              <p class="fs-18 fw-400 fc-white">of contractors paid for more workers than were physically present and productive.</p>
            </li>
            <li class="d-flex align-items-center">
              <span class="number fs-45 fw-800 fc-secondary">92%</span>
              <p class="fs-18 fw-400 fc-white">of contractors lose 1-2 hours a day on administrative tasks.</p>
            </li>
            <li class="d-flex align-items-center mb-0">
              <span class="number fs-45 fw-800 fc-secondary">100%</span>
              <p class="fs-18 fw-400 fc-white">of all contractors want to pay for productivity over presence.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--==== Solutions end ====-->

  <!--==== Benifit Start ====-->
  <section class="benefitSection prop-bottom-left prop-xs">
    <div class="container">
      <div class="section_text text-center mb-4 mb-lg-5">
        <img src="assets/images/bettapay-black.png" class="mb-3" alt="Reload Page">
        <h4 class="section_heading"> Benefits of BettaPay</h4>
      </div>
      <div class="row align-items-center">
        <div class="col-md-4">
          <ul class="benefitList text-lg-end">
            <li>
              <p>Transact with only verified contractors and wage workers.</p>
              <div class="number">
                1
              </div>
            </li>
            <li>
              <p>Authorise instant payouts to a dynamic group of wage workers.</p>
              <div class="number">
                2
              </div>
            </li>
            <li>
              <p>Access multiple payment options including netbanking, IMPS, NEFT, RTGS and UPI enabled transactions.</p>
              <div class="number">
                3
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <img src="assets/images/benefit.png" alt="Reload Page">
        </div>
        <div class="col-md-4">
          <ul class="benefitList text-start">
            <li>
              <div class="number">
                1
              </div>
              <p>Transact with only verified contractors and wage workers.</p>
            </li>
            <li>
              <div class="number">
                2
              </div>
              <p>Authorise instant payouts to a dynamic group of wage workers.</p>
            </li>
            <li>
              <div class="number">
                3
              </div>
              <p>Access multiple payment options including netbanking, IMPS, NEFT, RTGS and UPI enabled transactions.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--==== Benifit End ====-->


  <section>
    <div class="container">
      <div class="section_text text-center mb-4 mb-lg-5">
        <img src="assets/images/bettapay-black.png" class="mb-2" alt="Reload Page">
        <h4 class="fs-50 fw-300 lh-normal mb-4 pb-2"> We work where you work, <br>
          so that you can work better!</h4>
        <div class="d-flex align-items-center gap-3 justify-content-center">
          <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a>
          <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a>
        </div>
      </div>
    </div>
  </section>


  <section class="bettaWorkSection py-0 py-md-5">
    <div class="bettaWorkMain section-padding">
      <div class="container container-large">
        <div class="section_text mb-4 mb-lg-5 text-center">
          <h6 class="purple_label text-uppercase">Process</h6>
          <h4 class="section_heading fc-white">Bettapay How It Works</h4>
          <p class="fc-white mb-3">Every Bettamint user enjoys free access to BettaPay, our powerful payment engine inbuilt with bookkeeping capabilities. BettaPay is perfectly suited for businesses managing payments to large numbers of daily wage workers and independent contractors across multiple site locations, scopes and skillsets.</p>
          <p class="fc-white">With BettaPay, just one payment instruction sets in motion a disbursement to all of your construction teams. Our state of the art infrastructure automates the consideration of key factors such as advances, measurements, quality, attendance, overtime including debit instructions, ensuring every payment is precise and fair.</p>

        </div>
        <div class="row mb-4 mb-lg-5 pb-lg-5">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="bettaWorkCard">
              <h6 class="purple_label title fw-700">authorize</h6>
              <div class="text_wrap text-center">
                <div class="number">01</div>
                <h6 class="section_heading mb-3">Authorization</h6>
                <p class="fc-black">Authenticate pre-calculated wages or measurements through Bettamint’s dashboard.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="bettaWorkCard">
              <h6 class="purple_label title fw-700">Payment Processing</h6>
              <div class="text_wrap text-center">
                <div class="number">03</div>
                <h6 class="section_heading mb-3">Processing</h6>
                <p class="fc-black">Authenticate pre-calculated wages or measurements through Bettamint’s dashboard.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bettaWorkCard">
              <h6 class="purple_label title fw-700">Payment Distribution</h6>
              <div class="text_wrap text-center">
                <div class="number">03</div>
                <h6 class="section_heading mb-3">Distribution</h6>
                <p class="fc-black">Authenticate pre-calculated wages or measurements through Bettamint’s dashboard.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex align-items-center gap-3 justify-content-center">
          <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a>
          <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a>
        </div>
      </div>
    </div>
  </section>


  <section class="panelSection">
    <div class="container container-large py-lg-5">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <h6 class="purple_label mb-2">BETTAPAY REWARDS</h6>
          <h4 class="section_heading mb-3">Reward Construction Teams
            and Supercharge Productivity</h4>
          <p class="fs-18 mb-3">Experience the power of an incentivised workforce with BettaPay - the tool that puts more money in your workers’ pockets while driving your business forward. Set short-term, time-bound goals connected to instantly paid out bonuses and watch as your project timelines accelerate. Fast track construction, supercharge productivity, and improve retention at your construction sites. With BettaPay, you create a win-win scenario that empowers your workforce and propels your projects to timely completion.</p>
        </div>
        <div class="col-lg-5">
          <img src="assets/images/pm-6.png" alt="Reload Page">
        </div>
      </div>
    </div>
  </section>



  <?php include("sections/story-section.php") ?>
  <?php include("sections/news-section.php") ?>

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