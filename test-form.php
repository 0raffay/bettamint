<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/libs.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>test-lead</title>
</head>

<body>
  <div class="container">
    <form class='inquiry-form-pricing' id="leadForm" novalidate action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>First Name<strong>*</strong></label>
            <div class="input_wrap">
              <input type="text" lead-validate name='first_name' value="<?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : "" ?>" required />
              <p class="error_message">Please fill this field</p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Last Name<strong>*</strong></label>
            <div class="input_wrap">
              <input type="text" lead-validate name='last_name' value="<?php echo isset($_SESSION['merchant_param3']) ? $_SESSION['merchant_param3'] : "" ?>" required />
              <p class="error_message">Please fill this field</p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Account Type<strong>*</strong></label>
            <div class="input_wrap">
              <select lead-validate name="account_type">
                <option value="" selected></option>
                <option value="Developer" <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'Developer') echo "selected"; ?>>Developer</option>
                <option value="Contractor" <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'General Contractor') echo "selected"; ?>>General Contractor</option>
                <option value="Sub Contractor" <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'Sub Contractor') echo "selected"; ?>>Sub Contractor</option>
                <option value="Labour Contractor" <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'Labour Contractor') echo "selected"; ?>>Labour Contractor</option>
                <option value="Individual" <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'Individual') echo "selected"; ?>>Individual</option>
                <option value="Consultant" <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'Consultant') echo "selected"; ?>>Consultant</option>
              </select>
              <p class="error_message">Please fill this field</p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <!-- Large Box -->
            <div class="scopeOfWorkContainer low-options" style="display: none;">
              <label>Scope of Work<strong>*</strong></label>
              <select name="scopeOfWork[]" data-scope-of-work multiple class='scopeOfWorkSelect'>
                <?php
                $scopeOfWorkOptions = array(
                  "" => array(
                    "Earthwork",
                    "Civil Works",
                    "Finishes",
                    "Electrical Works - LT",
                    "Electrical Works - HT",
                    "Plumbing Works",
                    "HVAC Works",
                    "Glazing",
                    "Millworks",
                    "Swimming Pools & Water Bodies",
                    "Mechanical Works",
                    "General & NMR"
                  )
                );
                ?>
                <?php
                foreach ($scopeOfWorkOptions as $optgroupLabel => $options) {
                  echo "<optgroup label=\"$optgroupLabel\">";
                  foreach ($options as $option) {
                    echo "<option value=\"$option\">$option</option>";
                  }
                  echo "</optgroup>";
                }
                ?>
              </select>
              <p class="error_message start-0">Please select valid options</p>
              <span class="example-span">Select as many as applicable</span>
            </div>
            <!-- Large Box -->
            <!-- Small Box -->
            <div class="scopeOfWorkContainer high-options" style="display: none;">
              <label>Scope of Work<strong>*</strong></label>
              <select name="scopeOfWork[]" data-scope-of-work multiple class='scopeOfWorkSelect'>
                <?php
                $scopeOfWorkOptions = array(
                  "Earthwork" => array(
                    "Excavation",
                    "Diaphragm Wall",
                    "Slope Protection",
                    "Special Dewatering",
                    "Housekeeping",
                    "Tree-Cutting",
                    "Soil Testing",
                    "House Keeping",
                    "Grading",
                    "Landscaping",
                    "Demolition"
                  ),
                  "Civil Works" => array(
                    "Excavation",
                    "Backfilling",
                    "Piling",
                    "Waterproofing",
                    "Structural Formwork",
                    "Masonry",
                    "Plastering",
                    "Barbending",
                    "Roads & Highways",
                    "Staging & Rigging",
                    "Core Cutting"
                  ),
                  "Finishes" => array(
                    "Flooring",
                    "Cladding",
                    "Skirting",
                    "Dadoing",
                    "Doors",
                    "Windows",
                    "Painting",
                    "Polishing",
                    "Structural Glazing",
                    "Grills, Louvers and Railings",
                    "Rolling Shutters",
                    "False Ceiling",
                    "Cornice",
                    "Pylons",
                    "Special Elevation Features",
                    "Roofing",
                    "Countertops",
                    "Fire Doors, Service shaft doors (Material + Labor)",
                    "Shower Glass Partition, Mirrors",
                    "Counter Slab",
                    "Miscellaneous Finishes",
                    "Metal Fabrication",
                    "UPVC Works",
                    "Furnishings",
                    "Marblework"
                  ),
                  "Electrical Works LT" => array("Electrical Works LT"),
                  "Electrical Works - HT" => array("Substation Power Supply"),
                  "Plumbing" => array(
                    "Fire Detection & Suppression",
                    "Water Supply & Drainage",
                    "Hydropneumatic System"
                  ),
                  "HVAC" => array(
                    "HVAC High Side Works",
                    "HVAC Low Side Works"
                  ),
                  "Glazing" => array("Glazing Works"),
                  "Millworks" => array("Fixed furniture", "Movable furniture"),
                  "Swimming Pools & Water Bodies" => array("Swimming Pools & Water Bodies"),
                  "Mechanical Works" => array(
                    "Lifts, Elevators & Escalators",
                    "Solar Equipment",
                    "Home Automation",
                    "Telecommunication Systems",
                    "CCTV",
                    "Access Control",
                    "AHU",
                    "BMS",
                    "HSD Works",
                    "Mechanical Parking",
                    "Public Address System",
                    "STP",
                    "WTP",
                    "Rain Water Harvesting",
                    "Music System",
                    "Data and Voice System",
                    "Kitchen Equipment"
                  ),
                  "General & NMR" => array(
                    "Security Services",
                    "Signage",
                    "Gates & Barricades",
                    "Temporary Power Supply",
                    "Soil Testing",
                    "Topographical Survey",
                    "Debris Removal",
                    "Housekeeping",
                    "Retrofitting and Dismantling",
                    "Miscellaneous",
                    "Machine Operators"
                  )
                );
                $earthworkOptions = $scopeOfWorkOptions["Earthwork"];
                ?>
                <?php
                foreach ($scopeOfWorkOptions as $optgroupLabel => $options) {
                  echo "<optgroup label=\"$optgroupLabel\">";
                  foreach ($options as $option) {
                    echo "<option value=\"$option\">$option</option>";
                  }
                  echo "</optgroup>";
                }
                ?>
              </select>
              <p class="error_message start-0">Please select valid options</p>
              <span class="example-span">Select as many as applicable</span>
            </div>
            <!-- Small Box -->
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Company Name/Proprietor's Name <strong>*</strong></label>
            <div class="input_wrap">
              <input lead-validate type="text" name="company" value="<?php echo isset($_SESSION['merchant_param1']) ? $_SESSION['merchant_param1'] : "" ?>" required />
              <p class="error_message">Please fill this field</p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Email Address<strong>*</strong></label>
            <div class="input_wrap">
              <input lead-validate data-lead-email lead-regex="^[^\s@]+@[^\s@]+\.[^\s@]+$" type="email" name='email' value="<?php echo isset($_SESSION['billing_email']) ? $_SESSION['billing_email'] : "" ?>" required />
              <p class="error_message">Please Enter Your Email Address </p>
              <p class="email-error">Email Already Exists. Please try with another email.</p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Phone Number<strong>*</strong></label>
            <div class="input_wrap">
              <input lead-validate lead-regex="^\d{8,}$" type="tel" name='number' value="<?php echo isset($_SESSION['number']) ? $_SESSION['number'] : "" ?>" required />
              <p class="error_message">Please Enter Your Phone Number </p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <button lead-submit class="btn btn-secondary" name="basicSubmit" type="submit">Submit</button>
          <div class="form_loader loader"> </div>
        </div>
      </div>
    </form>
  </div>

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
      handleAccountTypeChange();
      scopeOfWorkHandler();
      handleLeadForm();
    })

    function handleAccountTypeChange() {
      const scopeOfContainers = $(".scopeOfWorkContainer");
      const large_scopeOfWork = $(".scopeOfWorkContainer.high-options");
      const small_scopeOfWork = $(".scopeOfWorkContainer.low-options");
      const accountType = $("[name='account_type']");
      $(`.ms-option-wrap button[type='button'] span`).html("");
      accountType.change(function() {
        const thisValue = $(this).val().toLowerCase().trim();
        if (thisValue == "developer") {
          scopeOfContainers.hide();
          scopeOfContainers.find("select").removeClass("active");
          return;
        }
        if (thisValue === "contractor" || thisValue === "consultant") {
          scopeOfContainers.hide();
          scopeOfContainers.find("select").removeClass("active");
          small_scopeOfWork.show();
          small_scopeOfWork.find("select").addClass("active");
        } else {
          scopeOfContainers.hide();
          scopeOfContainers.find("select").removeClass("active");
          large_scopeOfWork.show();
          large_scopeOfWork.find("select").addClass("active");
        }
      })
      return accountType.val();
    }

    function scopeOfWorkHandler() {
      let buttonOfSelect = $(`#ms-list-1`);
      let optionOfSelect = $('li[data-search-term] input')
      let spanInButton = $(`.ms-option-wrap button[type='button'] span`)
      let dataToShow = {
        categoryName: [],
        allData: [],
      };

      function handleMultiSelectChange() {
        let selectedLi = $('.optgroup li.selected');
        dataToShow.categoryName = [];
        dataToShow.allData = [];
        selectedLi.each(function() {
          let itsText = $(this).text();
          let categoryName = $(this).closest('.optgroup').find('.label').text();
          if (!dataToShow.categoryName.includes(categoryName)) {
            dataToShow.categoryName.push(categoryName);
          }
          if (!dataToShow.allData.includes(itsText)) {
            dataToShow.allData.push(itsText);
          }
        });
        let button = $('.ms-options-wrap button').find('span');
        button.html(`${dataToShow.categoryName.join(', ')} ${dataToShow.allData.join(', ')}`);
      }
      optionOfSelect.change(handleMultiSelectChange);
      buttonOfSelect.click(handleMultiSelectChange);
    }

    function handleLeadForm(data) {
      validateForm({
        form: "#leadForm",
        inputs: "[lead-validate]",
        button: "[submit-lead]",
        specialFields: {
          selector: 'lead-regex',
        },
        errorClass: "error",
        disableClass: "disabled",
      }, function() {
        const scopeOfWork = $("[data-scope-of-work].active");
        const val = scopeOfWork.next().find("button").find("span").html();
        if (val == "") {
          scopeOfWork.parent().addClass("error");
          return;
        }
        scopeOfWork.parent().removeClass("error");
        $(".form_loader").show();

        const data = {
          firstName: $("#leadForm").find("[name='first_name']").val(),
          lastName: $("#leadForm").find("[name='last_name']").val(),
          Profession: $("#leadForm").find("[name='account_type']").val(),
          scopeOfWork: val,
          companyName: $("#leadForm").find("[name='company']").val(),
          email: $("#leadForm").find("[name='email']").val(),
          phoneNumber: $("#leadForm").find("[name='number']").val(),
          packageType: "basic",
        }

        callLeadApi(data);
      })

      const callLeadApi = (data) => {
        const requestOptions = {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
          },
          body: JSON.stringify(data),
        };
        const api = "https://api-prod.bettamint.com/api/dashboard/Lead";

        const res = fetch(api, requestOptions)
        res.then(function(response) {
          if (response.status == 400) {
            $(".form_loader").hide();
            $(".email-error").show();
            throw new Error('Duplicate Email error');
          }
          return response.json();
        }).then(data => {
          $(".form_loader").hide();
          $(".email-error").hide();

          var expirationDate = new Date();
          expirationDate.setTime(expirationDate.getTime() + (30 * 60 * 1000));
          const encodedData = encodeURIComponent(JSON.stringify(data));
          document.cookie = "data=" + encodedData + "; expires=" + expirationDate.toUTCString() + "; path=/";


          window.location.href = "test-payment.php";
        }).catch(error => {
          console.error('Error:', error);
        });
      }

      $("[data-lead-email]").on("input", function() {
        $(".email-error").hide();
      })
    }
  </script>

  </script>
</body>

</html>