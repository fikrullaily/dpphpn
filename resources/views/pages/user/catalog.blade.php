@extends('template.base-user')
@section('section')
<main id="main-wrapper">
    <!-- ======= Catalog Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-title">
          <div class="title">KATALOG</div>
          <!--<div class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>-->
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <div class="row g-0 portfolio-container">

            @foreach ($catalogs as $item)
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-food catalog-wp">
                <div class="img-wp">
                  <img src="{{ url('uploads/catalog_file/'.$item->catalog_file) }}" class="img-fluid" alt="">
                  <div class="description">
                    <div class="title">{{ $item->title }}</div>
                    <?= $item->description ?>
                  </div>
                </div>
                <div></div>
                <div class="catalog-content">
                  <div class="row" style="align-items:center">
                    <div class="col-8">
                      <div class="title-catalog">{{ $item->title }}</div>
                      {{-- <div class="price"> RP. 10.000.000</div> --}}
                    </div>
                    <div class="col-4 link-wp">
                      <div class="gallery-catalog">
                        <a href="{{ url('uploads/catalog_file/'.$item->catalog_file) }}" title="{{ $item->title }}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      </div>
                      <div class="detail-link">
                        <a href="{{ url('detail-catalog/'.$item->id) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
            </div><!-- End Item -->
            @endforeach

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection
