<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/libs.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>test-payment</title>
</head>

<body>
  <section id="payment-page">
    <div class="container">
      <div class="row full-width-content">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <form method="post" novalidate id="paymentForm">
            <input type="hidden" name="leadId" payment-lead-id>
            <input type="hidden" name="customData" payment-custom-data>
            <input type="hidden" name="packageType" payment-package-type>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstName">First Name <span class="fa-asterisk"></span></label>
                  <input type="text" payment-validate payment-f-name id="firstName" name="firstName">
                  <p class="error_message">Please enter your first name.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastName">Last Name <span class="fa-asterisk"></span></label>
                  <input type="text" payment-validate payment-l-name id="lastName" name="lastName">
                  <p class="error_message">Please enter your last name.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="companyName">Company Name / Proprietor's Name <span class="fa-asterisk"></span></label>
                  <input type="text" payment-company-name payment-validate id="companyName" name="companyName">
                  <p class="error_message">Please enter your company name.</p>

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phone">Phone Number <span class="fa-asterisk"></span></label>
                  <input type="tel" payment-validate payment-regex="^\d{8,}$" payment-phone-number id="phone" name="phone">
                  <p class="error_message">Please enter your phone number.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email Address <span class="fa-asterisk"></span></label>
                  <input type="email" payment-validate payment-regex="^[^\s@]+@[^\s@]+\.[^\s@]+$" payment-email-address id="email" name="email">
                  <p class="error_message">Please enter your email address.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="gstin">GSTIN</label>
                  <div class="position-relative">
                    <input type="text" value="" id="gstin">
                    <p class="error_message start-0 z-0">
                      Please enter a valid gstin.
                    </p>
                  </div>
                  <div class="row justify-content-end">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <span class="example-span pt-2">For example - <span>29AALCB0969P1ZT</span></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="address">Address <span class="fa-asterisk"></span></label>
                  <textarea payment-validate class="pt-2" id="address" name="address" rows="3"></textarea>
                  <p class="error_message">Please enter your address.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="city">City <span class="fa-asterisk"></span></label>
                  <input payment-validate type="text" id="city" name="city">
                  <p class="error_message">Please enter your city name.</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="state">State <span class="fa-asterisk"></span></label>
                  <select payment-validate value="">
                    <option value=""></option>
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
                <div class="form-group">
                  <label for="country">Country <span class="fa-asterisk"></span></label>
                  <input payment-validate required type="text" value="India" id="country" name="country">
                  <p class="error_message">Please select your country.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pincode">Pin Code <span class="fa-asterisk"></span></label>
                  <input payment-validate type="text" id="pincode" name="pincode">
                  <p class="error_message">Please select your pincode.</p>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="pos-rel-check">
                  <div class="form-group position-relative">
                    <input type="checkbox" id="paymentCondition" required="">
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

  <script src="assets/js/libs.js"></script>
  <script src="assets/js/functions.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

  <script src="assets/multi-select/multi-select.js"></script>
  <link rel="stylesheet" href="assets/multi-select/multi-select.css">
  <script>
    $('.scopeOfWorkSelect').multiselect({
      columns: 1,
      texts: {
        placeholder: '',
        search: 'Search'
      },
      search: true,
      selectAll: false
    });
  </script>

  <script>
    $(document).ready(function() {

      paymentPageCookie();
      handlePaymentForm();


    })

    function getCookie(name) {
      const cookieString = document.cookie;
      const cookies = cookieString.split('; ');
      for (const cookie of cookies) {
        const [cookieName, cookieValue] = cookie.split('=');
        if (cookieName === name) {
          return decodeURIComponent(cookieValue);
        }
      }
      return null;
    }

    function paymentPageCookie() {
      const dataCookie = getCookie('data');
      const parsedData = dataCookie ? JSON.parse(dataCookie) : {};

      $("[payment-f-name]").val(parsedData.firstName)
      $("[payment-l-name]").val(parsedData.lastName)
      $("[payment-company-name]").val(parsedData.companyName)
      $("[payment-phone-number]").val(parsedData.phoneNumber)
      $("[payment-email-address]").val(parsedData.email)
      $("[payment-lead-id]").val(parsedData.leadId)
      $("[payment-custom-data]").val(parsedData.customData)
      $("[payment-package-type]").val(parsedData.packageType)
    }

    function handlePaymentForm() {
      $("#paymentCondition").change(function() {
        if ($(this).is(":checked")) {
          $(this).next().next().hide();
        }
      })

      validateForm({
        form: "#paymentForm",
        inputs: "[payment-validate]",
        button: "[submit-payment]",
        specialFields: {
          selector: 'payment-regex',
        },
        errorClass: "error",
        disableClass: "disabled",
      }, function() {

        const gstinInput = $('#gstin');
        const gstin = gstinInput.val();
        const gstinError = gstinInput.next();
        if (gstin !== '') {
          var gstinPattern = /^([0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}[Z]{1}[0-9A-Z]{1})$/;
          if (!gstinPattern.test(gstin)) {
            gstinError.show();
            gstinError.html('Invalid GSTIN');
            gstinError.css({
              color: "red"
            });
            return false;
          }
          gstinError.hide();
        }

        if (!$('#paymentCondition').is(":checked")) {
          $(".payment-error").show();
          return;
        }
        $(".payment-error").hide();

        $(".form_loader").show();
        const send = {
          leadId: $("[payment-lead-id]").val(),
          customData: $("[payment-custom-data]").val(),
          packageType: $("[payment-package-type").val(),
        }

        const api = "https://api-prod.bettamint.com/api/dashboard/Lead";
        const requestOptions = {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
          },
          body: JSON.stringify(send),
        };

        const res = fetch(api, requestOptions)
        res.then(function(response) {
          if (!response.ok) {
            Swal.fire("Error!", "Something went wrong!", "error");
            throw new Error("Something went wrong please try again.")
          }
          return response.json();
        }).then(data => {
          $(".form_loader").hide();
          Swal.fire("Success!", "Form submitted successfully!", "success").then(function() {
            window.location.href = "index.php";
          });
        }).catch(error => {
          Swal.fire("Error!", "Something went wrong!", "error").then(function() {
            $(".form_loader").hide();
          });
          console.error('Error:', error);
        });
      })
    }
  </script>

  </script>
</body>

</html>