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


<body>

 <!-- ======= Header ======= -->
 @include('template.user.nav')
  <!-- End Header -->

  <main id="main">

    <!-- ======= Catalog Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ url('assets_user/img/blog/blog-1.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ url('assets_user/img/blog/blog-2.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ url('assets_user/img/blog/blog-3.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ url('assets_user/img/blog/blog-1.jpg') }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informasi Produk</h3>
              <ul>
                <li><strong>Pemilik</strong>: Raihan Evanza Simanik</li>
                <li><strong>Jenis Usaha</strong>: Ayam Geprek</li>
                <li><strong>Tanggal Pembuatan</strong>: 01 April 2022</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi Produk</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Catalog Details Section -->

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