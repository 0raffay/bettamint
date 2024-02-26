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
          <form method="post" onsubmit="return validateGSTIN()">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstName">First Name <span class="fa-asterisk"></span></label>
                  <input type="text" class="form-control" id="firstName" name="firstName">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastName">Last Name <span class="fa-asterisk"></span></label>
                  <input type="text" class="form-control" id="lastName" name="lastName">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="companyName">Company Name / Proprietor's Name <span class="fa-asterisk"></span></label>
                  <input type="text" class="form-control" id="companyName" name="companyName">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phone">Phone Number <span class="fa-asterisk"></span></label>
                  <input type="tel" class="form-control" id="phone" name="phone">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email Address <span class="fa-asterisk"></span></label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="gstin">GSTIN</label>
                  <input type="text" class='form-inp' id="gstin" name="merchant_param2" placeholder="" value="asdfasdf" onkeyup="validateGSTIN()" onblur="handleBlurEvent(this)">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12"><span class="gstin-error pt-2" id="validation-result"></span></div>
                    <div class="col-lg-6 col-md-6 col-sm-12"><span class="example-span pt-2">For example - <span>29AALCB0969P1ZT</span></span> </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="address">Address <span class="fa-asterisk"></span></label>
                  <textarea required class="form-control" id="address" name="address" rows="3"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="city">City <span class="fa-asterisk"></span></label>
                  <input required type="text" class="form-control" id="city" name="city">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="state">State <span class="fa-asterisk"></span></label>
                  <select name="billing_state" id="state" class="subscription-option" onclick="this.setAttribute('value', this.value);" onblur="handleBlurEvent(this)" value="">
                    <option value=""></option>
                    <option value="Andhra Pradesh" onblur="handleBlurEvent(this)">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands" onblur="handleBlurEvent(this)">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh" onblur="handleBlurEvent(this)">Arunachal Pradesh</option>
                    <option value="Assam" onblur="handleBlurEvent(this)">Assam</option>
                    <option value="Bihar" onblur="handleBlurEvent(this)">Bihar</option>
                    <option value="Chandigarh" onblur="handleBlurEvent(this)">Chandigarh</option>
                    <option value="Chhattisgarh" onblur="handleBlurEvent(this)">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli" onblur="handleBlurEvent(this)">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu" onblur="handleBlurEvent(this)">Daman and Diu</option>
                    <option value="Delhi" onblur="handleBlurEvent(this)">Delhi</option>
                    <option value="Lakshadweep" onblur="handleBlurEvent(this)">Lakshadweep</option>
                    <option value="Puducherry" onblur="handleBlurEvent(this)">Puducherry</option>
                    <option value="Goa" onblur="handleBlurEvent(this)">Goa</option>
                    <option value="Gujarat" onblur="handleBlurEvent(this)">Gujarat</option>
                    <option value="Haryana" onblur="handleBlurEvent(this)">Haryana</option>
                    <option value="Himachal Pradesh" onblur="handleBlurEvent(this)">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir" onblur="handleBlurEvent(this)">Jammu and Kashmir</option>
                    <option value="Jharkhand" onblur="handleBlurEvent(this)">Jharkhand</option>
                    <option value="Karnataka" onblur="handleBlurEvent(this)">Karnataka</option>
                    <option value="Kerala" onblur="handleBlurEvent(this)">Kerala</option>
                    <option value="Madhya Pradesh" onblur="handleBlurEvent(this)">Madhya Pradesh</option>
                    <option value="Maharashtra" onblur="handleBlurEvent(this)">Maharashtra</option>
                    <option value="Manipur" onblur="handleBlurEvent(this)">Manipur</option>
                    <option value="Meghalaya" onblur="handleBlurEvent(this)">Meghalaya</option>
                    <option value="Mizoram" onblur="handleBlurEvent(this)">Mizoram</option>
                    <option value="Nagaland" onblur="handleBlurEvent(this)">Nagaland</option>
                    <option value="Odisha" onblur="handleBlurEvent(this)">Odisha</option>
                    <option value="Punjab" onblur="handleBlurEvent(this)">Punjab</option>
                    <option value="Rajasthan" onblur="handleBlurEvent(this)">Rajasthan</option>
                    <option value="Sikkim" onblur="handleBlurEvent(this)">Sikkim</option>
                    <option value="Tamil Nadu" onblur="handleBlurEvent(this)">Tamil Nadu</option>
                    <option value="Telangana" onblur="handleBlurEvent(this)">Telangana</option>
                    <option value="Tripura" onblur="handleBlurEvent(this)">Tripura</option>
                    <option value="Uttar Pradesh" onblur="handleBlurEvent(this)">Uttar Pradesh</option>
                    <option value="Uttarakhand" onblur="handleBlurEvent(this)">Uttarakhand</option>
                    <option value="West Bengal" onblur="handleBlurEvent(this)">West Bengal</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="country">Country <span class="fa-asterisk"></span></label>
                  <input required type="text" class="form-control" value="India" id="country" name="country">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pincode">Pin Code <span class="fa-asterisk"></span></label>
                  <input required type="text" class="form-control" id="pincode" name="pincode">
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="pos-rel-check">
                  <div class="form-group">
                    <input type="checkbox" id="html" required="">
                    <label for="html">I agree to Bettamint's Website <a href="privacy-policy.php">Privacy Policy</a>, and <a href="terms-of-use.php">Terms of Use</a></label>
                    <div class="hold-err">Please agree to the terms and conditions before proceeding to checkout.</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="loader float-end" style="display:none;"></div>
                <div class="payment-submit">
                  <button class="inq-submit-btn third btn btn-secondary" name="basicSubmit" id="checkout-button" type="submit" formaction="index.php">Continue to Checkout</button>
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
    $(document).ready(function() {
      $("#checkout-button").on("click", function(e) {
        // Prevent the default form submission
        //e.preventDefault();

        // Check if the checkbox is checked
        if (!$('#html').prop('checked')) {
          //alert("Please agree to the terms and conditions before proceeding to checkout.");
          $(".hold-err").show();
        } else {
          $(".hold-err").hide();

          $('.payment-submit').hide()
          $('.loader').show()
        }
      });
    });

    function validateGSTIN() {



      var package = 'Basic';

      $('#package_type').val(package);



      var gstinInput = document.getElementById('gstin');

      var gstin = gstinInput.value;

      console.log(gstin);



      if (gstin == '') {

        return true;

      }



      // Regular expression pattern for GSTIN validation

      var gstinPattern = /^([0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}[Z]{1}[0-9A-Z]{1})$/;





      // Check if the GSTIN matches the pattern

      if (gstinPattern.test(gstin)) {

        document.getElementById('validation-result').innerHTML = 'Valid GSTIN';

        document.getElementById('validation-result').style.color = 'green';

        return true;

      } else {

        document.getElementById('validation-result').innerHTML = 'Invalid GSTIN';

        document.getElementById('validation-result').style.color = 'red';

        return false;

      }

    }
  </script>
</body>

</html>