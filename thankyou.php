<?php include("includes/site-info.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Thank You | <?php echo $siteName; ?></title>
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
  <div class="full-width-banner custom-height d-flex" style="background-image:url(assets/images/full-width.png)">
    <div class="container align-self-center">
      <div class="row">
        <div class=" col-lg-12">
          <div class="home-banner-content">
            <h1>Thank You! </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="carrer-top-sec">
    <div class="container">
      <div class="row full-width-content">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <p>We appreciate your contact and will respond promptly upon receiving your message.</p>
        </div>
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

</body>

</html>