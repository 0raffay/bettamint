<?php

include("includes/site-info.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <title>Internship | <?php echo $siteName; ?></title>
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
    <div class="bannerImage"> <img src="assets/images/banners/internship-banner.png" alt="Hero Banner"> </div>
    <div class="bannerTextContainer">
      <div class="container">
        <div class="bannerText not-small mx-auto text-center">
          <h6 class="bannerLabel mb-1">Endless Opportunities</h6>
          <h1 class="bannerTitle">Internship Program</h1>
          <p class="bannerSubtitle small">We provide great exposure to students practically by involving them in live projects better preparing them for accelerated growth in a technology company, being equipped with all the skills required to excel in their career</p>
          <div class="d-flex align-items-center gap-3 justify-content-center">
            <a target="_blank" href="#" class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#careerForm">Apply Now</a>
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
        <h5 class="purple_label">ABOUT THE PROGRAM</h5>
        <h4 class="section_heading fc-white mb-3">Dive into Real-world Experience</h4>
        <p class="fs-18 fw-400 fc-grey-700">At Bettamint, we believe that the best way to learn is by doing. <br>
          Our Internship Program is tailored to provide budding talents with hands-on experience, <br>
          immersing them in live projects that shape the future of the construction fintech industry.</p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12 mx-lg-o mx-auto text-lg-start text-center">
          <div class="mb-4 mb-lg-5"> <a href="#" class="white-link-button hover-white fs-25 gap-4 mb-3 pb-1">Live Project Involvement <i class="arrow-right-icon-green"></i></a>
            <p class="fs-18">Move beyond theory. Work alongside our dedicated teams on active projects, making a measurable impact.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 mx-lg-o mx-auto text-lg-start text-center">
          <div class="mb-4 mb-lg-5"> <a href="#" class="white-link-button hover-white fs-25 gap-4 mb-3 pb-1">Accelerated Growth Path <i class="arrow-right-icon-green"></i></a>
            <p class="fs-18">Our focus is on nurturing talent. Gain insights and skills that are coveted in the tech world, setting you up for rapid career advancement.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 mx-lg-o mx-auto text-lg-start text-center">
          <div class="mb-4 mb-lg-5"> <a href="#" class="white-link-button hover-white fs-25 gap-4 mb-3 pb-1">Mentorship & Guidance <i class="arrow-right-icon-green"></i></a>
            <p class="fs-18">Engage with industry experts and mentors who are passionate about sharing <br> their knowledge, ensuring you're never in the dark.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 mx-lg-o mx-auto text-lg-start text-center">
          <div class="mb-4 mb-lg-5"> <a href="#" class="white-link-button hover-white fs-25 gap-4 mb-3 pb-1">A Peek into Tech Innovations <i class="arrow-right-icon-green"></i></a>
            <p class="fs-18">Witness first-hand the technological advancements driving the construction fintech sector, and contribute your fresh perspectives.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Solutions end ====-->

  <!--==== dive tabs start ====-->
  <section class="diveTabSection">
    <div class="container">
      <div class="dive_text mx-auto text-center mb-5">
        <h5 class="purple_label fw-700 m-0">DIVE IN, DISCOVER, DEVELOP</h5>
        <h4 class="fs-45 fw-600 mb-3">Master the future of data centric technology</h4>
        <p class="fs-18 fw-400">Equip yourself with core skills and be industry-ready, setting a foundation <br>
          for a prosperous career in the tech world.</p>
      </div>


      <div class="row">
        <div class="col-lg-4">
          <ul class="tabbingButtonList mx-lg-0 mx-auto mb-4 text-center d-flex flex-column align-items-center justify-content-center d-lg-block">
            <li><button class="active"  data-target="panel_1"><img src="./assets/images/dive-tab-icon-1.png" alt="Reload Page">Improve analytical skills</button></li>
            <li><button data-target="panel_2"><img src="./assets/images/dive-tab-icon-2.png" alt="Reload Page">Product market fit</button></li>
            <li><button data-target="panel_3"><img src="./assets/images/dive-tab-icon-3.png" alt="Reload Page">Product development</button></li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tabbingPanel" data-panel="panel_1">
            <h6>In the evolving fintech landscape, data-driven decisions are paramount. Here at Bettamint:</h6>
            <ul class="tabbingPanelList">
              <li><img src="./assets/images/check-circle-1.png" alt="Reload Page">Dive deep into datasets to uncover patterns and insights.
</li>
              <li><img src="./assets/images/check-circle-1.png" alt="Reload Page">Learn to interpret complex data and translate it into actionable strategies.
</li>
              <li><img src="./assets/images/check-circle-1.png" alt="Reload Page">Engage in hands-on training sessions with our analytics experts to sharpen your ability to make data-driven judgments.</li>
            </ul>
          </div>
          <div class="tabbingPanel" data-panel="panel_2">
            <h6>Understanding the market is crucial to any product's success. With our seasoned professionals guiding you:
</h6>
            <ul class="tabbingPanelList">
              <li><img src="./assets/images/check-circle-1.png" alt="Reload Page">Gain insights into how to identify gaps in the market.
</li>
              <li><img src="./assets/images/check-circle-1.png" alt="Reload Page">Learn the intricacies of tailoring products to meet specific market demands.
</li>
              <li><img src="./assets/images/check-circle-1.png" alt="Reload Page">Engage in real-time projects that teach you to adjust product offerings based on feedback and market dynamics.

</li>
         
            </ul>
          </div>
          <div class="tabbingPanel" data-panel="panel_3">
            <h6>Turning an idea into a tangible, functional product is an art and a science. At Bettamint:
</h6>
            <ul class="tabbingPanelList">
              <li><img src="./assets/images/check-circle-1.png" alt="Reload Page">Immerse yourself in the complete product lifecycle, from ideation to launch.
</li>
              <li><img src="./assets/images/check-circle-1.png" alt="Reload Page">Collaborate with cross-functional teams to understand the multi-faceted nature of product development.
</li>
              <li><img src="./assets/images/check-circle-1.png" alt="Reload Page">EngagLearn to leverage agile methodologies, ensuring products are developed efficiently and effectively.
</li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--==== dive tabs end ====-->


  <!--==== benefit start ====-->

  <section class="benefitSection pb-0">
    <div class="benefitWrapper bg-grey-400">
      <div class="container">
        <div class="benefitCardContainer">
          <div class="benefit_text text-center mb-5">
            <h4 class="purple_label fw-700 m-0">BENEFIT</h4>
            <h3 class="fs-45 fw-600">Program Highlights</h3>
          </div>
          <div class="row">
            <div class="col-xxl-4 col-lg-6 col-12">
              <div class="benefitCard">
                <div class="benefitCardCount">
                  1
                </div>
                <div class="benefiteMainContent text-center">
                  <h4 class="fs-25 fw-500">Duration</h4>
                  <p class="fs-18 fw-400">The internship spans 8-12 weeks on a <br> rolling intake basis.</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-12">
              <div class="benefitCard">
                <div class="benefitCardCount">
                  2
                </div>
                <div class="benefiteMainContent text-center">
                  <h4 class="fs-25 fw-500">Exposure</h4>
                  <p class="fs-18 fw-400">Great exposure to the tech world through <br> the lens of an early stage startup.</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-12">
              <div class="benefitCard">
                <div class="benefitCardCount">
                  3
                </div>
                <div class="benefiteMainContent text-center">
                  <h4 class="fs-25 fw-500">Stipend</h4>
                  <p class="fs-18 fw-400">All interns receive a competitive <br>
                    stipend.</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-12">
              <div class="benefitCard">
                <div class="benefitCardCount">
                  4
                </div>
                <div class="benefiteMainContent text-center">
                  <h4 class="fs-25 fw-500">Certification</h4>
                  <p class="fs-18 fw-400">Upon successful completion, interns <br> receive a certificate & a letter of <br> recommendation.</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-12">
              <div class="benefitCard">
                <div class="benefitCardCount">
                  5
                </div>
                <div class="benefiteMainContent text-center">
                  <h4 class="fs-25 fw-500">Potential Employment</h4>
                  <p class="fs-18 fw-400">Exceptional performers might just find their permanent home at Bettamint.</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-12">
              <div class="benefitCard">
                <div class="benefitCardCount">
                  6
                </div>
                <div class="benefiteMainContent text-center">
                  <h4 class="fs-25 fw-500">Eligible</h4>
                  <p class="fs-18 fw-400">Eligible to work in India.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--==== benefit end ====-->


  <!--==== join start ====-->

  <section class="joinSection p-0">
    <div class="joinWrapper bg-primary">
      <div class="joinMainContent mx-auto text-center">
        <h4 class="fs-45 fw-600 clr-white mb-2">Join Our Internship Program</h4>
        <p class="fs-18a fw-400 mb-4">For any inquiries or further details about the program, please reach out to our internship coordinator. <br> Ignite your future with Bettamint!</p>
        <div class="d-flex align-items-center gap-3 justify-content-center">
          <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#careerForm">Apply Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--==== join end ====-->

  <!--==== Future Section start ====-->
  <?php include('sections/future-section.php'); ?>
  <!--==== Future Section end ====-->

  <!--==== CTA Section Start ====-->
  <?php include('sections/cta-section.php'); ?>
  <!--==== CTA Section End ====-->

  <!--==== FOOTER START ====-->
  <?php include('includes/footer.php'); ?>
    <?php include("includes/career-form.php"); ?>

  <!--==== FOOTER END ====-->

  <!--==== SCRIPTS START ====-->
  <?php include('includes/footer-scripts.php'); ?>
  <!--==== SCRIPTS END ====-->


  <button data-target="card-1">Card 1</button>
  <div data-panel="card-1">card 1</div>
  <script>
    /******************
   tabbingByTarget 
 ******************/
    tabbingByTarget({
      buttonAttr: "data-target",
      targetAttr: "data-panel",
      initialHide: true,
      nothingOnActive: true,

    }, function(button, target, clickCount, targetName) {

      //do something 
      if (clickCount > 1) {
        //do something else if button was clicked before.
      }
    })

    function tabbingByTarget(options, callback) {
      const selector = {
        button: options.buttonAttr ? options.buttonAttr : "rf-tabbing-button",
        target: options.targetAttr ? options.targetAttr : "rf-tabbing-target",
      }
      const buttons = $(`[${selector.button}]`);
      const targets = $(`[${selector.target}]`);
      if (options.initialHideAll) {
        buttons.removeClass("active");
        targets.removeClass("active").hide();
      } else if (options.initialHide) {
        buttons.eq(0).addClass("active");
        targets.not(":first-of-type").hide();
        targets.eq(0).addClass("active").show();
      }
      let clickCount = 1;
      buttons.click(function() {
        let wasActive = $(this).hasClass("active");
        if (options.nothingOnActive && wasActive) {
          return;
        }
        if (wasActive & clickCount < 1) {
          clickCount++;
        } else {
          clickCount = 1;
        }

        let thisButton = $(this);
        let target = thisButton.attr(`${selector.button}`);
        let allElementsToShow = targets.filter(`[${selector.target}="${target}"]`);
        if (allElementsToShow.length != 0) {
          buttons.removeClass("active");
          thisButton.addClass("active");
          targets.removeClass("active").hide();
          allElementsToShow.each(function() {
            $(this).show();
          });
          if (callback) {
            callback(thisButton, allElementsToShow, clickCount, target);
          }
        } else {
          thisButton.addClass("disabled")
        }
        thisButton.removeClass("disabled");
      });
    }
  </script>
  
  
   <script>
    $(".job-name").each(function() {
      $(this).parent().next("a").attr("data-job-name", "Internship")
    })

    const careerModal = document.getElementById('careerForm')
    careerModal.addEventListener('show.bs.modal', function(event) {

      const button = event.relatedTarget
      const jobName = button.getAttribute('data-job-name')

      const jobInput = careerModal.querySelector('#jobName')
      jobInput.value = jobName

    })
  </script>
    
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('careerForm'), {})
        var closeButton = document.querySelector('#careerForm .modal-header .close');
  
  // Add a click event listener to the close button
  closeButton.addEventListener('click', function() {
    // Your custom code here
  myModal.hide()

    // Additional actions can be performed here
  });
    </script>

</body>

</html>