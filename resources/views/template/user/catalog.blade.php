<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DPP HPN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('assets_user/img/logo.png') }}" rel="icon">
  <link href="{{ url('assets_user/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets_user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets_user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('assets_user/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('assets_user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets_user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ url('assets_user/css/variables.css') }}" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ url('assets_user/css/main.css') }}" rel="stylesheet">
  <link href="{{ url('assets_user/css/main-v2.css') }}" rel="stylesheet">

</head>

<body id="catalog-page">

  <!-- ======= Header ======= -->
  @include('template.user.nav')
  <!-- End Header -->

  <main id="main-wrapper">
    <!-- ======= Catalog Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-title">
          <div class="title">KATALOG</div>
          <div class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-tab active">All</li>
            <li data-filter=".filter-food" class="filter-tab">Makanan</li>
            <li data-filter=".filter-electronic" class="filter-tab">Elektronik</li>
            <li data-filter=".filter-sport" class="filter-tab">Olahraga</li>
            <li data-filter=".filter-fashion" class="filter-tab">Fashion</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row g-0 portfolio-container">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-food catalog-wp">
              <div class="img-wp">
                <img src="{{ url('assets_user/img/portfolio/app-1.jpg') }}" class="img-fluid" alt="">
                <div class="description">
                  <div class="title">Lorem Ipsum</div>
                  lorem ipsum dolor sit amet dolor amet dolor amet
                </div>
              </div>
              <div></div>
              <div class="catalog-content">
                <div class="row" style="align-items:center">
                  <div class="col-8">
                    <div class="title-catalog">Lorem Ipsum Dolor</div>
                    <div class="price"> RP. 10.000.000</div>
                  </div>
                  <div class="col-4 link-wp">
                    <div class="gallery-catalog">
                      <a href="{{ url('assets_user/img/portfolio/app-1.jpg') }}" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                    <div class="detail-link">
                      <a href="{{ url('template/detail-catalog') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>               
                </div>
              </div>
            </div><!-- End Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-electronic catalog-wp">
              <div class="img-wp">
                <img src="{{ url('assets_user/img/portfolio/app-2.jpg') }}" class="img-fluid" alt="">
                <div class="description">
                  <div class="title">Lorem Ipsum</div>
                  lorem ipsum dolor sit amet dolor amet dolor amet
                </div>
              </div>
              <div></div>
              <div class="catalog-content">
                <div class="row" style="align-items:center">
                  <div class="col-8">
                    <div class="title-catalog">Lorem Ipsum Dolor</div>
                    <div class="price"> RP. 10.000.000</div>
                  </div>
                  <div class="col-4 link-wp">
                    <div class="gallery-catalog">
                      <a href="{{ url('assets_user/img/portfolio/app-2.jpg') }}" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                    <div class="detail-link">
                      <a href="{{ url('template/detail-catalog') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>               
                </div>
              </div>
            </div><!-- End Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-fashion catalog-wp">
              <div class="img-wp">
                <img src="{{ url('assets_user/img/portfolio/app-3.jpg') }}" class="img-fluid" alt="">
                <div class="description">
                  <div class="title">Lorem Ipsum</div>
                  lorem ipsum dolor sit amet dolor amet dolor amet
                </div>
              </div>
              <div></div>
              <div class="catalog-content">
                <div class="row" style="align-items:center">
                  <div class="col-8">
                    <div class="title-catalog">Lorem Ipsum Dolor</div>
                    <div class="price"> RP. 10.000.000</div>
                  </div>
                  <div class="col-4 link-wp">
                    <div class="gallery-catalog">
                      <a href="{{ url('assets_user/img/portfolio/app-3.jpg') }}" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                    <div class="detail-link">
                      <a href="{{ url('template/detail-catalog') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>               
                </div>
              </div>
            </div><!-- End Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-sport catalog-wp">
              <div class="img-wp">
                <img src="{{ url('assets_user/img/portfolio/books-1.jpg') }}" class="img-fluid" alt="">
                <div class="description">
                  <div class="title">Lorem Ipsum</div>
                  lorem ipsum dolor sit amet dolor amet dolor amet
                </div>
              </div>
              <div></div>
              <div class="catalog-content">
                <div class="row" style="align-items:center">
                  <div class="col-8">
                    <div class="title-catalog">Lorem Ipsum Dolor</div>
                    <div class="price"> RP. 10.000.000</div>
                  </div>
                  <div class="col-4 link-wp">
                    <div class="gallery-catalog">
                      <a href="{{ url('assets_user/img/portfolio/books-1.jpg') }}" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                    <div class="detail-link">
                      <a href="{{ url('template/detail-catalog') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>               
                </div>
              </div>
            </div><!-- End Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-electronic catalog-wp">
              <div class="img-wp">
                <img src="{{ url('assets_user/img/portfolio/books-2.jpg') }}" class="img-fluid" alt="">
                <div class="description">
                  <div class="title">Lorem Ipsum</div>
                  lorem ipsum dolor sit amet dolor amet dolor amet
                </div>
              </div>
              <div></div>
              <div class="catalog-content">
                <div class="row" style="align-items:center">
                  <div class="col-8">
                    <div class="title-catalog">Lorem Ipsum Dolor</div>
                    <div class="price"> RP. 10.000.000</div>
                  </div>
                  <div class="col-4 link-wp">
                    <div class="gallery-catalog">
                      <a href="{{ url('assets_user/img/portfolio/books-2.jpg') }}" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                    <div class="detail-link">
                      <a href="{{ url('template/detail-catalog') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>               
                </div>
              </div>
            </div><!-- End Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-food catalog-wp">
              <div class="img-wp">
                <img src="{{ url('assets_user/img/portfolio/books-3.jpg') }}" class="img-fluid" alt="">
                <div class="description">
                  <div class="title">Lorem Ipsum</div>
                  lorem ipsum dolor sit amet dolor amet dolor amet
                </div>
              </div>
              <div></div>
              <div class="catalog-content">
                <div class="row" style="align-items:center">
                  <div class="col-8">
                    <div class="title-catalog">Lorem Ipsum Dolor</div>
                    <div class="price"> RP. 10.000.000</div>
                  </div>
                  <div class="col-4 link-wp">
                    <div class="gallery-catalog">
                      <a href="{{ url('assets_user/img/portfolio/books-3.jpg') }}" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                    <div class="detail-link">
                      <a href="{{ url('template/detail-catalog') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>               
                </div>
              </div>
            </div><!-- End Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('template.user.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets_user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets_user/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('assets_user/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('assets_user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets_user/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('assets_user/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('assets_user/js/main.js') }}"></script>

</body>

</html>