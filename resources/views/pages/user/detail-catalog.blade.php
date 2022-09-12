@extends('template.base-user')
@section('section')
<main id="main">

    <!-- ======= Catalog Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ url('uploads/catalog_file/'.$detail->catalog_file) }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2>Deskripsi</h2>
              <?= $detail->description ?>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Catalog Details Section -->

</main><!-- End #main -->
@endsection
