@extends('template.base-user')
@section('section')
<main id="main">

    <!-- ======= Recent daftar-dpw Section ======= -->
    <section id="daftar-dpw" class="daftar-dpw">
      <div class="container" data-aos="fade-up">
        <div class="row section-dpw">
            @foreach ($data as $item)
            <div class="col-4">
                <div class="card-dpw">
                    <div class="image">
                        <img src="{{ url('uploads/region_file/'.$item->region_file) }}" class="image img-1"/>
                    </div>
                    <div class="content-profile">
                        <div class="title">{{ $item->name }}</div>
                        <div class="subtitle"><?= $item->description ?></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection
