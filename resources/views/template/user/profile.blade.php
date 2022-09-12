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

<body id="profile">

  <!-- ======= Header ======= -->
  @include('template.user.nav')
  <!-- End Header -->

  <main id="main">

    <!-- ======= Recent Profile Section ======= -->
    <section id="profile" class="profile">
      <div class="container" data-aos="fade-up">
        <div class="section-ketua">
            <div class="card-wp">
                <div class="image">
                    <img src="{{ url('assets_user/img/blog/blog-1.jpg') }}" class="image img-1"/>
                </div>
                <div class="content-profile">
                    <div class="title">Muhammad Abdullah</div>
                    <div class="subtitle">Ketua</div>
                </div>
            </div>
        </div>
        <div class="row section-anggota">
            <div class="col-4">
            <div class="card-wp">
                <div class="image">
                    <img src="{{ url('assets_user/img/blog/blog-1.jpg') }}" class="image img-1"/>
                </div>
                <div class="content-profile">
                    <div class="title">Muhammad Asep Munawar</div>
                    <div class="subtitle">Anggota</div>
                </div>
            </div>
            </div>
            <div class="col-4">
            <div class="card-wp">
                <div class="image">
                    <img src="{{ url('assets_user/img/blog/blog-1.jpg') }}" class="image img-1"/>
                </div>
                <div class="content-profile">
                    <div class="title">Abdullah Asnawi</div>
                    <div class="subtitle">Anggota</div>
                </div>
            </div>
            </div>
            <div class="col-4">
            <div class="card-wp">
                <div class="image">
                    <img src="{{ url('assets_user/img/blog/blog-1.jpg') }}" class="image img-1"/>
                </div>
                <div class="content-profile">
                    <div class="title">Siti Julaeha</div>
                    <div class="subtitle">Anggota</div>
                </div>
            </div>
            </div>
            <div class="col-4">
            <div class="card-wp">
                <div class="image">
                    <img src="{{ url('assets_user/img/blog/blog-1.jpg') }}" class="image img-1"/>
                </div>
                <div class="content-profile">
                    <div class="title">Bella Anggita</div>
                    <div class="subtitle">Anggota</div>
                </div>
            </div>
            </div>
        </div>
      </div>
    </section>

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