$(document).ready(function () {

  validateNumberinputs();

  header();

  sliders();

  handleAccountTypeChange();





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



    const formData = {

      firstName: $("#leadForm").find("[name='first_name']").val(),

      lastName: $("#leadForm").find("[name='last_name']").val(),

      accountType: $("#leadForm").find("[name='account_type']").val(),

      scopeOfWorkValue: val,

      company: $("#leadForm").find("[name='company']").val(),

      email: $("#leadForm").find("[name='email']").val(),

      number: $("#leadForm").find("[name='number']").val(),

    }



    $.ajax({

      url: "controllers/process_lead.php",

      method: "POST",

      data: formData,

      success: function (success) {

        if (success == "1") {

          window.location.href = "thankyou.php";

        }

      },

      error: function (xhr, status, error) {

        console.error("Error:", error);

        $(".form_loader").hide();

        alert("Something went wrong.")

      }

    });



  })





  // let buttonOfSelect2 = $(`#ms-list-2`);

  let buttonOfSelect = $(`#ms-list-1`);

  let optionOfSelect = $('li[data-search-term] input')

  let spanInButton = $(`.ms-option-wrap button[type='button'] span`)

  let dataToShow = {

    categoryName: [],

    allData: [],

  };

  function handleMultiSelectChange() {





    let selectedLi = $('.optgroup li.selected');



    // Initialize dataToShow arrays

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



  // Call handleMultiSelectChange when options are changed or button is clicked

  optionOfSelect.change(handleMultiSelectChange);

  buttonOfSelect.click(handleMultiSelectChange);



});



function header() {

  let stickyElement = "header";

  let stickyClass = "header-fixed-";



  let stickyOffset = $(stickyElement).offset().top;

  $(document).scroll(function () {

    var sticky = $(stickyElement),

      scroll = $(window).scrollTop();

    if (scroll >= stickyOffset) sticky.addClass(stickyClass);

    else sticky.removeClass(stickyClass);

  });



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







