@extends('master.layout')
@section('content')
<body>

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/work-3.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="hero-title mb-4">SPM Learning Platform</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Additional Mathematics, Bahasa Melayu, English, Physics, Chemistry Science, Mathematics, Biology Science"></span></p>
          <p class="pt-3">
            <a class="btn btn-primary btn-custom js-scroll px-4" href="about" role="button">ABOUT ME</a>
          </p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->
  <style>
    .btn-custom {
      background-color: #cbc0a9; /* Green background */
      border: none; /* Remove borders */
      color: rgb(0, 0, 0); /* White text */
      padding: 14px 28px; /* Some padding */
      font-size: 20px; /* Increase font size */
      cursor: pointer; /* Pointer/hand icon */
      border-radius: 30px; /* Rounded corners */
      transition: all 0.6s ease-in-out; /* Smooth transition */
    }

    .btn-custom:hover {
      background-color: #483521; /* Darker green */
      transform: scale(1.1); /* Slightly larger on hover */
    }
  </style>

  <main id="main">
        {{-- <!-- ======= Portfolio Section ======= -->
        <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box text-center">
                    <h3 class="title-a">
                      SUBJECT SPM
                    </h3>
                    <p class="subtitle-a">
                      List of Subject SPM
                    </p>
                    <div class="line-mf"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">Bahasa Melayu</h2>
                          <div class="w-more">
                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">
                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="assets/img/work-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="assets/img/work-2.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">English</h2>
                          <div class="w-more">
                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">
                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="assets/img/work-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="assets/img/work-3.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">Mathematics</h2>
                          <div class="w-more">
                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">
                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="assets/img/work-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="assets/img/work-4.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">Physics</h2>
                          <div class="w-more">
                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">
                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="assets/img/work-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="assets/img/work-5.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">Chemistry</h2>
                          <div class="w-more">
                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">
                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="assets/img/work-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="assets/img/work-6.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">Addmath</h2>
                          <div class="w-more">
                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">
                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section><!-- End Portfolio Section --> --}}

    <!-- ======= Counter Section ======= -->
    {{-- <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)"> --}}
      {{-- <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="1349" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">STUDENT JOINED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD</span>
              </div>
            </div>
          </div>

      </div>
    </div><!-- End Counter Section --> --}}

    <!-- ======= New Section ======= -->
    <section id="new" class="new-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                SPM NEWS
              </h3>
              <p class="subtitle-a">
                Stay updated with the latest SPM news from News Today.              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="new1"><img src="assets/img/news-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">THE STAR</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="https://www.thestar.com.my/news/nation/2024/06/10/perak-to-help-655-spm-absentees-enrol-in-tvet">See more for details</a></h3>
                <p class="card-description">
                    Perak to help 655 SPM absentees enrol in TVET
                </p>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 1 hour past
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="new2"><img src="assets/img/news-2.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">MALAY MAIL</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="https://www.malaymail.com/news/malaysia/2024/06/11/works-ministry-plans-to-construct-upgrade-25-schools-in-sarawak-says-deputy-minister/139236">See more for details</a></h3>
                <p class="card-description"> Works Ministry plans to construct, upgrade 25 schools in Sarawak, says deputy minister </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span>2 days ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/news-3.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">NEW STRAITS TIMES</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="https://www.nst.com.my/lifestyle/groove/2024/06/1062522/showbiz-educate-restaurant-canteen-staff-about-food-hygiene-anis">See more for details</a></h3>
                <p class="card-description">
                    #SHOWBIZ: Educate restaurant, canteen staff about food hygiene - Anis Nabilah
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Section -->


@endsection
