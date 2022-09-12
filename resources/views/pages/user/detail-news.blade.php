@extends('template.base-user')
@section('section')
<main id="main">

    <!-- ======= News Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5"  style="justify-content: center">

          <div class="col-lg-10">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{ url('uploads/news_file/'.$detail->news_file) }}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{ $detail->title }}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">DPPHPN</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ date('d M Y', strtotime($detail->created_at)) }}">{{ date('d M Y', strtotime($detail->created_at)) }}</time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <?= $detail->description ?>
              </div><!-- End post content -->

            </article><!-- End blog post -->

          </div>
        </div>

      </div>
    </section><!-- End News Details Section -->

  </main><!-- End #main -->
@endsection
