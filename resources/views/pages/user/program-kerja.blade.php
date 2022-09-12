@extends('template.base-user')
@section('section')
<main id="main">

    <!-- ======= Recent Visi Misi Section ======= -->
    <section id="visi-misi" class="visi-misi">
      <div class="container" data-aos="fade-up">
        <div class="row visi">
            <div class="col-6">
                <div class="image-left">
                    <img src="{{ url('assets_user/img/visi-misi/img-1.jpg') }}" class="image img-1"/>
                    <img src="{{ url('assets_user/img/visi-misi/img-2.jpg') }}" class="image img-2"/>
                    <img src="{{ url('assets_user/img/visi-misi/img-3.jpg') }}" class="image img-3"/>
                </div>
            </div>
            <div class="col-6">
              <div class="title-section">
                Visi HPN
              </div>
              <div class="content">
                  <?= $data['vision']->description ?>
              </div>
            </div>
        </div>
        <div class="row misi">
            <div class="col-6">
              <div class="title-section">
                Misi HPN
              </div>
              <div class="content">
                <?= $data['mission']->description ?>
              </div>
            </div>
            <div class="col-6">
                <div class="image-right">
                    <img src="{{ url('assets_user/img/visi-misi/img-4.jpg') }}" class="image img-1"/>
                    <img src="{{ url('assets_user/img/visi-misi/img-5.jpg') }}" class="image img-2"/>
                    <img src="{{ url('assets_user/img/visi-misi/img-6.jpg') }}" class="image img-3"/>
                </div>
            </div>
        </div>
        <div class="ad-art">
          <div class="col-8">
            <div>
              {{ $data['work_program']->name }}
            </div>
          </div>
          <div class="col-4">
            <a href="{{ url('uploads/work_program_file/'.$data['work_program']->work_program_file) }}" target="blank" class="btn-download">
              Download AD/ART
            </a>
          </div>
        </div>
        <div class="agenda-organisasi">
        <div class="section-title">
          <div class="title">Agenda Organisasi</div>
          <!--<div class="subtitle">Lorem ipsum dolor sit amet</div>-->
        </div>
          <div class="row section-agenda">
              @foreach ($data['agenda'] as $item)
              <div class="col-4">
                <div class="card-agenda">
                    <div class="image">
                        <img src="{{ url('uploads/agenda_file/'.$item->agenda_file) }}" class="image img-1"/>
                    </div>
                    <div class="content-profile">
                        <div class="title">{{ $item->description }}</div>
                        <!-- <div class="subtitle">19 Jan 2022</div> -->
                    </div>
                </div>
              </div>
              @endforeach
          </div>
        </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection
