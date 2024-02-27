<?php

include( "includes/site-info.php" );

?>

<!DOCTYPE html>

<html lang="en">
<head>
<title>Contact Us | <?php echo $siteName; ?></title>
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

<section class="banner contactBanner prop-bottom-left">
  <div class="bannerImage"> <img src="assets/images/banners/contact-banner.png" alt="Hero Banner"> </div>
  <div class="bannerTextContainer close-to-bottom">
    <div class="container">
      <div class="bannerText mx-auto text-center">
        <h6 class="bannerLabel mb-1">Contact US</h6>
        <h1 class="bannerTitle">Speak to a construction <br>
          technology expert.</h1>
        <p class="bannerSubtitle small">Have inquiries? Feedback? We're all ears. Reach out now, and a member of our team will promptly get in touch with you.</p>
      </div>
    </div>
  </div>
</section>

<!--==== Banner end ====-->

<section class="contactSection py-xxl-0">
  <div class="container container-large">
    <div class="row mb-4 mb-lg-5 pb-lg-5">
      <div class="col-auto">
        <div class="contactFormContainer form-style-1">
          <h2 class="fs-24 fw-700 fc-black lts-25 mb-1">Contact Us</h2>
          <p class="fs-16 fc-black fw-600 lts-25 mb-4">Fill out the contact form below and we’ll get back to you as soon as possible.</p>
          <form action="controllers/contact_form.php" method="post">
            <div class="row">
              <div class="col-12">
                <label for="enquiryType" class="input_wrap select">
                <label for="enquiryType">Enquiry Type</label>
                <select required id="enquiryType" name="enquiryType">
                  <option value="">Select Enquiry Type</option>
                  <option value="Sales">Sales</option>
                  <option value="Support">Support</option>
                  <option value="Press & Media">Press & Media</option>
                  <option value=" Partnerships"> Partnerships</option>
                </select>
                </label>
              </div>
              <div class="col-md-6 pe-md-2">
                <label for="fName" class="input_wrap">
                <label for="fName">First Name</label>
                <input required id="fName" name="fName" type="text" placeholder="Enter First Name">
                </label>
              </div>
              <div class="col-md-6 ps-md-2">
                <label for="lName" class="input_wrap">
                <label for="lName">Last Name</label>
                <input required type="text" id="lName" name="lName" placeholder="Enter Last Name">
                </label>
              </div>
              <div class="col-12">
                <label for="emailAddress" class="input_wrap">
                <label for="emailAddress">Email Address</label>
                <input required type="text" id="emailAddress" name="emailAddress" placeholder="emailaddress@yourmail.com">
                </label>
              </div>
              <div class="col-12">
                <label for="phoneNumber" class="input_wrap">
                <label for="phoneNumber">Phone Number</label>
                <div class="d-flex align-items-center gap-2"> <span class="fs-20 fw-600 lts-25 fc-silver-2">+91</span>
                  <input required id="phoneNumber" type="tel" name="phoneNumber" placeholder="000 000 0000">
                </div>
                </label>
              </div>
              <div class="col-md-6 pe-md-2">
                <label for="companyType" class="input_wrap select">
                <label for="companyType">Company Type</label>
                <select required id="companyType" name="companyType">
                  <option value="">Select Company Type</option>
                  <option value="Developer">Developer</option>
                  <option value="General Contractor">General Contractor</option>
                  <option value="Sub Contractor">Sub Contractor</option>
                  <option value="Consultant">Consultant</option>
                  <option value="Government">Government</option>
                  <option value="Media">Media</option>
                </select>
                </label>
              </div>
              <div class="col-md-6 ps-md-2">
                <label for="companyName" class="input_wrap">
                <label for="">Company Name</label>
                <input required id="companyName" name="companyName" type="text" placeholder="Enter Company Name">
                </label>
              </div>
              <div class="col-12">
                <label for="comments" class="input_wrap">
                <label for="comments">Comments/Questions</label>
                <textarea required class="pt-2" name="comments" id="comments" placeholder="Type Your Query"></textarea>
                </label>
              </div>
              <div class="col-12 mt-md-5 mt-4">
                <button type="submit" class="btn btn-primary">Submit Details</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-auto">
        <div class="contactAddressContainer">
          <div class="contactCard">
            <h6><img src="assets/images/icons/white-location.svg" alt="Reload Pgae">India</h6>
            <p>HD-070, WeWork Galaxy, 43 Residency Rd Shanthala Nagar, Ashok Nagar Bangalore Karnataka - 560025 India.</p>
          </div>
          <div class="contactCard">
            <h6><img src="assets/images/icons/white-location.svg" alt="Reload Pgae">Singapore</h6>
            <p>160 Robinson Rd, #14-04 Singapore Business Federation Center, Singapore 068914</p>
          </div>
        </div>
      </div>
    </div>
    <p class="text-center fs-25 fw-500 contactParagraph" style="color: #888;">For existing customers experiencing technical issues or with general inquiries,<br>
      please reach out to the <a href="mailto: customersupport@bettamint.com">Bettamint Support Center</a>.</p>
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