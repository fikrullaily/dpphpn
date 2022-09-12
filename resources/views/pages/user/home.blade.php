@extends('template.base-user')
@section('section')
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <?php
        $arr = array (
            '1' => array(
                'active' => 'active',
                'image' => 'header-1.jpg',
                'title' 	=> '',
                'subtitle'	=> '',
            ),
            '2' => array(
              'active' => '',
              'image' => 'header-2.jpg',
              'title' 	=> '',
              'subtitle'	=> '',
            ),
            '3' => array(
              'active' => '',
              'image' => 'header-3.jpg',
              'title' 	=> '',
              'subtitle'	=> '',
            ),
        );
            foreach ($arr as $key => $value) {
    ?>
  <div class="carousel-item <?= $value['active'] ?> slider-wp">
    <div class="container">
          <div class="content-wp">
              <img src="{{ url('assets_user/img/'.$value['image']) }}" alt="" class="img-fluid img">
              <div class="col-lg-9 text-center">
                  <div class="title-carousel"><?= $value['title'] ?></div>
                  <div class="subtitle-carousel"><?= $value['subtitle'] ?></div>
              </div>
          </div>
    </div>
  </div>
  <?php } ?><!-- End Carousel Item -->

      <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>

</section>

<main id="main">

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <div class="title">Berita Terbaru</div>
            <div class="subtitle"></div>
        </div>

        <div class="row">
            @foreach ($news as $item)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="post-box">
                <div class="post-img"><img src="{{ url('uploads/news_file/'.$item->news_file) }}" class="img-fluid" alt=""></div>
                <div class="meta">
                    <span class="post-date">{{ date('l, d M Y', strtotime($item->created_at)) }}</span>
                    {{-- <span class="post-author"> / Julia Parker</span> --}}
                </div>
                <h3 class="post-title">{{ $item->title }}</p>
                <a href="{{ url('detail-news/'.$item->id) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
        <div class="title">Kontak Kami</div>
        <!--<div class="subtitle">Lorem ipsum dolor sit amet</div>-->
        </div>

    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.630235096948!2d106.87216201485428!3d-6.18022199552573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4fcfa00ea9d%3A0xc85479f3993e7232!2sJl.%20Cempaka%20Putih%20Timur%20XXIV%2C%20RT.15%2FRW.3%2C%20Cemp.%20Putih%20Tim.%2C%20Kec.%20Cemp.%20Putih%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1659704010866!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

    <div class="container">

        <div class="row gy-5 gx-lg-5">

        <div class="col-lg-4">

            <div class="info">
            <h3>Get in touch</h3>
            <!--<p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>-->

            <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                <h4>Location:</h4>
                <p>Jln. Cempaka Putih Timur XXIV Np.46, Jakarta Pusat, <br>DKI Jakarta 10510</p>
                </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
                </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
                </div>
            </div><!-- End Info Item -->

            </div>

        </div>

        <div class="col-lg-8">
            <form action="{{ url('send-message') }}" method="post" class="php-email-form">
                @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control {{ ($errors->has('name')) ? 'is-invalid' : '' }}" id="name" placeholder="Your Name" value="{{ old('name') }}">
                @if($errors->has('name')) <label class="invalid-feedback"> {{ $errors->first('name') }}</label> @endif
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" value="{{ old('email') }}" name="email" id="email" placeholder="Your Email">
                @if($errors->has('email')) <label class="invalid-feedback"> {{ $errors->first('email') }}</label> @endif
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control {{ ($errors->has('subject')) ? 'is-invalid' : '' }}" value="{{ old('subject') }}" name="subject" id="subject" placeholder="Subject">
                @if($errors->has('subject')) <label class="invalid-feedback"> {{ $errors->first('subject') }}</label> @endif
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control {{ ($errors->has('message')) ? 'is-invalid' : '' }}" name="message" placeholder="Message">{{ old('message') }}</textarea>
                @if($errors->has('message')) <label class="invalid-feedback"> {{ $errors->first('message') }}</label> @endif
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div><!-- End Contact Form -->

        </div>

    </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
