$(document).ready(function () {
  validateNumberinputs();
  header();
  sliders();
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
    fade: true,
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

    const newsLogoSlider = document.getElementById("newsLogoSlider");
    if (newsLogoSlider) {
      const newsLogoSlider = new Splide(latestNewsSliderSection, {
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