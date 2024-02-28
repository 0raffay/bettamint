<?php include("includes/site-info.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Payment | <?php echo $siteName; ?></title>
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
            <h1>Payment </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
 <section id="payment-page">
    <div class="container">
      <div class="row full-width-content">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <form method="post" class="paymentForm form-style-1" novalidate id="paymentForm">
            <input type="hidden" name="leadId" payment-lead-id>
            <input type="hidden" name="package_type" payment-package-type>
            <div class="row">
              <div class="col-md-6">
                <div class="input_wrap">
                  <label for="firstName">First Name <span class="fa-asterisk"></span></label>
                  <input type="text" placeholder="First Name" payment-validate payment-f-name id="firstName" name="billing_name">
                  <p class="error_message">Please enter your first name.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_wrap">
                  <label for="lastName">Last Name <span class="fa-asterisk"></span></label>
                  <input type="text" placeholder="Last Name" payment-validate payment-l-name id="lastName" name="merchant_param3">
                  <p class="error_message">Please enter your last name.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_wrap">
                  <label for="companyName">Company Name / Proprietor's Name <span class="fa-asterisk"></span></label>
                  <input type="text" placeholder="Company Name" payment-company-name payment-validate id="companyName" name="merchant_param1">
                  <p class="error_message">Please enter your company name.</p>

                </div>
              </div>
              <div class="col-md-6">
                <div class="input_wrap">
                  <label for="phone">Phone Number <span class="fa-asterisk"></span></label>
                  <input type="tel" placeholder="Phone Number" payment-validate payment-regex="^\d{8,}$" payment-phone-number id="phone" name="number">
                  <p class="error_message">Please enter your phone number.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_wrap">
                  <label for="email">Email Address <span class="fa-asterisk"></span></label>
                  <input type="email" placeholder="Email Address" payment-validate payment-regex="^[^\s@]+@[^\s@]+\.[^\s@]+$" payment-email-address id="email" name="billing_email">
                  <p class="error_message">Please enter your email address.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_wrap mb-0">
                  <label for="gstin">GSTIN</label>
                  <div class="position-relative">
                    <input type="text" placeholder="GSTIN" name="merchant_param2" value="" id="gstin">
                    <p class="error_message start-0 z-0" style="bottom: -48px;">
                      Please enter a valid gstin.
                    </p>
                  </div>
                </div>
                <div class="row justify-content-end py-3">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <span class="example-span">For example - <span>29AALCB0969P1ZT</span></span>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="input_wrap">
                  <label for="address">Address <span class="fa-asterisk"></span></label>
                  <textarea placeholder="Address" payment-validate class="pt-2" id="address" name="billing_address" rows="3"></textarea>
                  <p class="error_message">Please enter your address.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_wrap">
                  <label for="city">City <span class="fa-asterisk"></span></label>
                  <input placeholder="City" payment-validate type="text" id="city" name="billing_city">
                  <p class="error_message">Please enter your city name.</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="input_wrap">
                  <label for="state">State <span class="fa-asterisk"></span></label>
                  <select payment-validate value="" name="billing_state">
                    <option value="">State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                  </select>
                  <p class="error_message">Please select your state.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_wrap">
                  <label for="country">Country <span class="fa-asterisk"></span></label>
                  <input payment-validate placeholder="Country" required type="text" value="India" id="country" name="billing_country">
                  <p class="error_message">Please select your country.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_wrap">
                  <label for="pincode">Pin Code <span class="fa-asterisk"></span></label>
                  <input payment-validate placeholder="Pincode" type="text" id="pincode" name="billing_zip">
                  <p class="error_message">Please select your pincode.</p>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="pos-rel-check">
                  <div class="input_wrap position-relative d-flex align-items-center gap-2">
                    <input type="checkbox" id="paymentCondition" style="width: 20px;" required="">
                    <label for="paymentCondition">I agree to Bettamint's Website <a href="privacy-policy.php">Privacy Policy</a>, and <a href="terms-of-use.php">Terms of Use</a></label>
                    <small class="payment-error" style="color: red; position: absolute; display: none; bottom: -48px;">Please agree to the terms and conditions before proceeding to checkout.</small>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="payment-submit position-relative">
                  <button class="btn btn-secondary" type="submit">Continue to Checkout</button>
                  <div class="form_loader loader top-0"> </div>
                </div>
              </div>
            </div>
          </form>
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
  
  <script>
      document.addEventListener('DOMContentLoaded', function() {
  // Function to check if a cookie exists
  function checkCookie(name) {
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i].trim();
      // Check if this cookie starts with the specified name
      if (cookie.startsWith(name + '=')) {
        return true; // Cookie exists
      }
    }
    return false; // Cookie does not exist
  }

  // Check if the cookie exists
  if (!checkCookie('data')) {
    // Redirect to index.php
    window.location.href = 'index.php';
  }
});

  </script>

</body>

</html>