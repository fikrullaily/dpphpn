@extends('template.base-user')
@section('section')
<main id="main">

    <!-- ======= Recent Profile Section ======= -->
    <section id="profile" class="profile">
      <div class="container" data-aos="fade-up">
        <div class="section-ketua">
            <div class="card-wp">
                <div class="image">
                    <img src="{{ url('uploads/user_file/'.$data['Ketua'][0]->user_file) }}" class="image img-1"/>
                </div>
                <div class="content-profile">
                    <div class="title">{{ $data['Ketua'][0]->name }}</div>
                    <div class="subtitle">{{ $data['Ketua'][0]->position }}</div>
                </div>
            </div>
        </div>
        <div class="row section-anggota">
            @foreach ($data as $position => $users)
                @if ($position != 'Ketua')
                @foreach ($users as $user)
                <div class="col-4">
                    <div class="card-wp">
                        <div class="image">
                            <img src="{{ url('uploads/user_file/'.$user->user_file) }}" class="image img-1"/>
                        </div>
                        <div class="content-profile">
                            <div class="title">{{ $user->name }}</div>
                            <div class="subtitle">{{ $position }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            @endforeach
        </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection
