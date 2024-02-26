<?php
include( "includes/site-info.php" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Newsroom | <?php echo $siteName; ?></title>
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

<!--==== Banner start ====-->
<section class="banner prop-bottom-left">
  <div class="bannerImage"> <img src="assets/images/banners/news-banner.png" alt="Hero Banner"> </div>
  <div class="bannerTextContainer">
    <div class="container">
      <div class="bannerText mx-auto text-center">
        <h1 class="bannerTitle mb-3">Latest from <br>
          the News Room</h1>
        <div class="d-flex align-items-center gap-3 justify-content-center"> <a target="_blank" href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leadForm">Sign Up Now</a> <a target="_blank" href="https://calendly.com/kezyadebraganca/introduction-to-bettamint" class="btn btn-primary">Request a Demo</a> </div>
      </div>
    </div>
  </div>
</section>
<!--==== Banner end ====--> 

<!--==== news Section start ====-->
<?php include("sections/news-section.php"); ?>
<!--==== news Section end ====--> 

<!--====Latst Blog start ====-->
<section class="latestBlogSection">
  <div class="container container-large">
    <div class="row justify-content-between mb-lg-5 mb-3">
      <div class="col-lg-auto">
        <h4 class="fs-25 fw-600 lh-1-5 fc-black">Latest From The Blog</h4>
      </div>
      <div class="col-lg-auto text-center text-lg-end"> <a href="https://bettamint.com/blog" class="btn btn-secondary-300">Visit All</a> </div>
    </div>
    <div class="row" id="latestPostId">
		
	<script>
    document.addEventListener('DOMContentLoaded', function() {
        const apiUrl = 'https://www.bettamint.com/blog/wp-json/wp/v2/posts?per_page=3';
        fetch(apiUrl)
            .then((res1) => {
                if (!res1.ok) {
                    throw new Error('Network response was not ok');
                }
                return res1.json();
            })
            .then((res) => {
                const posts = res;
                posts.forEach((latestPost) => {
                    const postTitle = latestPost.title.rendered;
                    const postLink = latestPost.link;
                    const postExcerpt = latestPost.excerpt.rendered;
                    const postAuthor = latestPost.author.name;
                    const postDate = new Date(latestPost.date).toLocaleDateString('en-US', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    });
                    const featuredMediaId = latestPost.featured_media;
                    const mediaUrl = `https://www.bettamint.com/blog/wp-json/wp/v2/media/${featuredMediaId}`;
                    fetch(mediaUrl)
                        .then((res2) => {
                            if (!res2.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return res2.json();
                        })
                        .then((media) => {
                            const featuredMediaUrl = media.source_url;
                            const postHtml = `<div class='col-md-6 col-lg-4 col-xl-auto'>
    <div class='newsCard'>
        <div class='img_wrap'><a target='_blank' href='${postLink}'><img alt="${postTitle}" class='img-fluid' src='${featuredMediaUrl}' /></a></div>
        <div class='newsCardText'>
            <a target='_blank' href='${postLink}'>
                <span class="purpleDate  mb-1 fc-secondary lts-1 d-block fs-16 text-uppercase fw-700">${postDate}</span>
                <h6 class='fs-22 fw-700 fc-black mb-2'>${postTitle.slice(0, 200)}</h6>
                <p class='fw-600 mb-3'>${postExcerpt.slice(0, 90)}</p>
                <div class='d-flex align-items-center'>
                    <img src='assets/images/person-icon-1.png' class='me-2 d-block' alt='Reload Page'>
                    <strong class='border-right fw-700 fc-black fs-13'>By: ${postAuthor}</strong>
                    <span class='fs-14 fw-400 news-dot fc-silver'>${postDate}</span>
                </div>
            </a>
        </div>
    </div>
</div>`;

                            
                            document.getElementById('latestPostId').innerHTML += postHtml;
                        })
                        .catch((err) => {
                            console.error('Error fetching media:', err);
                        });
                });
            })
            .catch((err) => {
                console.error('Error fetching posts:', err);
            });
    });
</script>

	
      <!--<div class="col-md-6 col-lg-4 col-xl-auto">-->
      <!--  <div class="newsCard">-->
      <!--    <div class="img_wrap"> <img src="assets/images/news-1.jpg" alt="Reload Page"> </div>-->
      <!--    <div class="newsCardText"> <span class="purpleDate  mb-1 fc-secondary lts-1 d-block fs-16 text-uppercase fw-700">Saturday Event - 13 july 2023</span>-->
      <!--      <h6 class="fs-22 fw-700 fc-black mb-2">Lorem ipsum is Dummy text rela #RoadtoBetta.</h6>-->
      <!--      <p class="fw-600 mb-3">Contractors & Developers will gather </p>-->
      <!--      <div class="d-flex align-items-center"> <img src="assets/images/person-icon-1.png" class="me-2 d-block" alt="Reload Page"> <strong class="border-right fw-700 fc-black fs-13">By: Reality & More</strong> <span class="fs-14 fw-400 news-dot fc-silver">Friday, 1 April 2022</span> </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-md-6 col-lg-4 col-xl-auto">-->
      <!--  <div class="newsCard">-->
      <!--    <div class="img_wrap"> <img src="assets/images/news-2.jpg" alt="Reload Page"> </div>-->
      <!--    <div class="newsCardText"> <span class="purpleDate mb-1 fc-secondary  d-block fs-16 text-uppercase fw-700">#thereisabetterway</span>-->
      <!--      <h6 class="fs-22 fw-700 fc-black mb-2">Lorem ipsum is Dummy text rela #RoadtoBetta.</h6>-->
      <!--      <p class="fw-600 mb-3">Contractors & Developers will gather </p>-->
      <!--      <div class="d-flex align-items-center"> <img src="assets/images/person-icon-1.png" class="me-2 d-block" alt="Reload Page"> <strong class="border-right fw-700 fc-black fs-13">By: Reality & More</strong> <span class="fs-14 fw-400 news-dot fc-silver">Friday, 1 April 2022</span> </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-md-6 col-lg-4 col-xl-auto">-->
      <!--  <div class="newsCard">-->
      <!--    <div class="img_wrap"> <img src="assets/images/news-3.jpg" alt="Reload Page"> </div>-->
      <!--    <div class="newsCardText"> <span class="purpleDate  mb-1 fc-secondary lts-1 d-block fs-16 text-uppercase fw-700">Saturday Event - 13 july 2023</span>-->
      <!--      <h6 class="fs-22 fw-700 fc-black mb-2">Lorem ipsum is Dummy text rela #RoadtoBetta.</h6>-->
      <!--      <p class="fw-600 mb-3">Contractors & Developers will gather </p>-->
      <!--      <div class="d-flex align-items-center"> <img src="assets/images/person-icon-1.png" class="me-2 d-block" alt="Reload Page"> <strong class="border-right fw-700 fc-black fs-13">By: Reality & More</strong> <span class="fs-14 fw-400 news-dot fc-silver">Friday, 1 April 2022</span> </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-md-6 col-lg-4 col-xl-auto">-->
      <!--  <div class="newsCard">-->
      <!--    <div class="img_wrap"> <img src="assets/images/news-4.jpg" alt="Reload Page"> </div>-->
      <!--    <div class="newsCardText"> <span class="purpleDate mb-1 fc-secondary  d-block fs-16 text-uppercase fw-700">#thereisabetterway</span>-->
      <!--      <h6 class="fs-22 fw-700 fc-black mb-2">Lorem ipsum is Dummy text rela #RoadtoBetta.</h6>-->
      <!--      <p class="fw-600 mb-3">Contractors & Developers will gather </p>-->
      <!--      <div class="d-flex align-items-center"> <img src="assets/images/person-icon-1.png" class="me-2 d-block" alt="Reload Page"> <strong class="border-right fw-700 fc-black fs-13">By: Reality & More</strong> <span class="fs-14 fw-400 news-dot fc-silver">Friday, 1 April 2022</span> </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
    </div>
    <div class="newsLogoSlider splide section-padding" id="newsLogoSlider">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="img_wrap"> <img src="assets/images/news-logo/1.png" alt="Reload Page" /> </div>
          </li>
          <li class="splide__slide">
            <div class="img_wrap"> <img src="assets/images/news-logo/2.png" alt="Reload Page" /> </div>
          </li>
          <li class="splide__slide">
            <div class="img_wrap"> <img src="assets/images/news-logo/3.png" alt="Reload Page" /> </div>
          </li>
          <li class="splide__slide">
            <div class="img_wrap"> <img src="assets/images/news-logo/4.png" alt="Reload Page" /> </div>
          </li>
          <li class="splide__slide">
            <div class="img_wrap"> <img src="assets/images/news-logo/5.png" alt="Reload Page" /> </div>
          </li>
          <li class="splide__slide">
            <div class="img_wrap"> <img src="assets/images/news-logo/6.png" alt="Reload Page" /> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--====Latst Blog end ====--> 

<!--==== Recent Posts start ====-->
<section class="recentPostsSection">
  <div class="container">
    <div class="section_text mb-4 mb-lg-5 text-center">
      <h6 class="purple_label mb-1">News & Updates</h6>
      <h4 class="section_heading">Our Community</h4>
    </div>
    <div class="row justify-content-center flex-lg-nowrap">
      <div class="col-md-4">
        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C0nz2glLv9Q/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
          <div style="padding:16px;"> <a href="https://www.instagram.com/p/C0nz2glLv9Q/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
            <div style=" display: flex; flex-direction: row; align-items: center;">
              <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
              <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
              </div>
            </div>
            <div style="padding: 19% 0;"></div>
            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
              <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                    <g>
                      <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <div style="padding-top: 8px;">
              <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div>
            </div>
            <div style="padding: 12.5% 0;"></div>
            <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
              <div>
                <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
              </div>
              <div style="margin-left: 8px;">
                <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
              </div>
              <div style="margin-left: auto;">
                <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
              </div>
            </div>
            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
            </div>
            </a>
            <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C0nz2glLv9Q/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Bettamint (@bettamint.tech)</a></p>
          </div>
        </blockquote>
        <script async src="//www.instagram.com/embed.js"></script> 
      </div>
      <div class="col-md-4">
        <blockquote class="twitter-tweet">
          <p lang="en" dir="ltr">Did you know? India’s construction industry is poised to reach $1.4 Tn by 2025 creating employment for close to 100 million people. To put this in perspective, that&#39;s larger than the entire GDP of nations like Australia or Spain!<br>
            <br>
            .<br>
            <br>
            .<br>
            <br>
            .<a href="https://twitter.com/hashtag/bettamint?src=hash&amp;ref_src=twsrc%5Etfw">#bettamint</a> <a href="https://twitter.com/hashtag/buildingindia?src=hash&amp;ref_src=twsrc%5Etfw">#buildingindia</a> <a href="https://twitter.com/hashtag/construction?src=hash&amp;ref_src=twsrc%5Etfw">#construction</a> <a href="https://t.co/tiUWu5V8IU">pic.twitter.com/tiUWu5V8IU</a></p>
          &mdash; Bettamint (@bettamint) <a href="https://twitter.com/bettamint/status/1727122543298129952?ref_src=twsrc%5Etfw">November 22, 2023</a></blockquote>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
      </div>
      <div class="col-md-4">
        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CzWZy9uPHYf/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
          <div style="padding:16px;"> <a href="https://www.instagram.com/p/CzWZy9uPHYf/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
            <div style=" display: flex; flex-direction: row; align-items: center;">
              <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
              <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
              </div>
            </div>
            <div style="padding: 19% 0;"></div>
            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
              <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                    <g>
                      <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <div style="padding-top: 8px;">
              <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div>
            </div>
            <div style="padding: 12.5% 0;"></div>
            <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
              <div>
                <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
              </div>
              <div style="margin-left: 8px;">
                <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
              </div>
              <div style="margin-left: auto;">
                <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
              </div>
            </div>
            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
            </div>
            </a>
            <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CzWZy9uPHYf/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Bettamint (@bettamint.tech)</a></p>
          </div>
        </blockquote>
        <script async src="//www.instagram.com/embed.js"></script> 
      </div>
    </div>
  </div>
</section>
<!--==== Recent Posts end ====--> 
<script async src="https://www.instagram.com/embed.js"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!--==== FOOTER START ====-->
<?php include('includes/footer.php'); ?>
<!--==== FOOTER END ====--> 

<!--==== SCRIPTS START ====-->
<?php include('includes/footer-scripts.php'); ?>
<!--==== SCRIPTS END ====-->
</body>
</html>