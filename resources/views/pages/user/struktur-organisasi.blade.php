@extends('template.base-user')
@section('section')
<main id="main">
    <!-- ======= Profile Lembaga Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5"  style="justify-content: center">

          <div class="col-lg-10">

            <article class="blog-details">


              <!--<h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h2>-->

              <div class="content">
                <!--<p>-->
                <!--  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.-->
                <!--  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.-->
                <!--</p>-->

                <!--<p>-->
                <!--  Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.-->
                <!--</p>-->

                <div class="wp-image">
                    <img src="{{ url('uploads/organization_file/'.$detail->organization_file) }}" />
                </div>

              </div>

            </article>

          </div>
        </div>

      </div>
    </section><!-- End Profile Lembaga Section -->

  </main><!-- End #main -->
@endsection
