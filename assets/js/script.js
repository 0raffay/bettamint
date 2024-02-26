$(document).ready(function () {
  validateNumberinputs();
  header();
  sliders();
  scopeOfWorkHandler();
  handleAccountTypeChange();

  handleLeadForm();

  paymentPageCookie();
  handlePaymentForm();
});



function header() {

  let burgerButton = $('.burgerButton')
  let mobileMenu = $('.rfMobileMenu')
  let closeButton = $('.rfMobileMenuClose')
  burgerButton.click(function () {
    mobileMenu.toggleClass('active')
  })
  closeButton.click(function () {
    mobileMenu.removeClass('active')
  })
  tabbingByTarget({
    buttonAttr: "mobile-button-accordion",
    targetAttr: "mobile-button-accordion-target",
    nothingOnActive: false,
    initialHideAll: true,
  })
}

function validateNumberinputs() {
  $("input[type='tel'], input[type='number']").on("keyup", function () {
    var regex = /^[1-9][0-9]*$/;
    if (!regex.test($(this).val())) {
      $(this).val($(this).val().replace(/[^1-9]/g, ''));
    }
  });
}

function sliders() {
  $(".storySlider").slick({
    dots: true,
    arrows: false,
    speed: 500,
    autoplay: true,
    fade: true
  })
  $(".bannerSlider").slick({
    dots: true,
  })
  $(".aboutSlider").slick({
    dots: true,
    variableWidth: true,
    centerMode: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          centerMode: false,
          variableWidth: false,
        }
      },
    ]
  })
  $(".companySlider").slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 500,
  })
  const latestNewsSliderSection = document.getElementById("latestNewsSlider");
  if (latestNewsSliderSection) {
    const latestNewsSider = new Splide(latestNewsSliderSection, {
      autoWidth: true,
      type: 'loop',
      drag: 'free',
      focus: 'center',
      perPage: 3,
      gap: '2rem',
      pagination: false,
      arrows: false,
      autoScroll: {
        speed: 1,
      },
    });
    latestNewsSider.mount(window.splide.Extensions);
    const newsLogoSliderSection = document.getElementById("newsLogoSlider");
    if (newsLogoSliderSection) {
      const newsLogoSlider = new Splide(newsLogoSliderSection, {
        autoWidth: true,
        type: 'loop',
        drag: 'free',
        focus: 'center',
        perPage: 3,
        gap: '2rem',
        pagination: false,
        arrows: false,
        autoScroll: {
          speed: 1,
        },
      });
      newsLogoSlider.mount(window.splide.Extensions);
    }
  }
}

function handleAccountTypeChange() {
  const scopeOfContainers = $(".scopeOfWorkContainer");
  const large_scopeOfWork = $(".scopeOfWorkContainer.high-options");
  const small_scopeOfWork = $(".scopeOfWorkContainer.low-options");
  const accountType = $("[name='account_type']");
  $(`.ms-option-wrap button[type='button'] span`).html("");
  accountType.change(function () {
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
    selectedLi.each(function () {
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
  }, function () {
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
    res.then(function (response) {
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


      window.location.href = "payment.php";
    }).catch(error => {
      console.error
        ('Error:', error);
    });
  }

  $("[data-lead-email]").on("input", function () {
    $(".email-error").hide();
  })
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
  $("#paymentCondition").change(function () {
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
  }, function () {

    const gstinInput = $('#gstin');
    const gstin = gstinInput.val();
    const gstinError = gstinInput.next();
    if (gstin !== '') {
      var gstinPattern = /^([0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}[Z]{1}[0-9A-Z]{1})$/;
      if (!gstinPattern.test(gstin)) {
        gstinError.show();
        gstinError.html('Invalid GSTIN');
        gstinError.css({ color: "red" });
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
    res.then(function (response) {
      if (!response.ok) {
        Swal.fire("Error!", "Something went wrong!", "error");
        throw new Error("Something went wrong please try again.")
      }
      return response.json();
    }).then(data => {
      $(".form_loader").hide();
      Swal.fire("Success!", "Form submitted successfully!", "success").then(function () {
        window.location.href = "index.php";
      });
    }).catch(error => {
      Swal.fire("Error!", "Something went wrong!", "error").then(function() {
        $(".form_loader").hide();
      });
      console.error
        ('Error:', error);
    });
  })
} 