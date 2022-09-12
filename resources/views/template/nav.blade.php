<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ url('assets_user/img/logo.png') }}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
          <li class="dropdown"><span>Berita</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            <ul>
              <li><a href="{{ url('news/daerah') }}" class="active">Daerah</a></li>
              <li><a href="{{ url('news/nasional') }}">Nasional</a></li>
              <li><a href="{{ url('news/trending') }}">Trending</a></li>
            </ul>
          </li>
          <li class="dropdown" style="margin-left: 20px"><span>Profile</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            <ul>
              <li><a href="{{ url('profile-lembaga') }}" class="active">Profile Lembaga</a></li>
              <li><a href="{{ url('struktur-organisasi') }}">Struktur Organisasi</a></li>
              <li><a href="{{ url('profile-dpphpn') }}">Profile DPP HPN</a></li>
              <li><a href="{{ url('daftar-dpwdpc') }}">Daftar DPW & DPC</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('program-kerja') }}">Program Kerja</a></li>
          <li><a class="nav-link scrollto" href="{{ url('catalog') }}">Katalog</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto modal-active" onClick="modalActive()" href="#about">Request</a>
    </div>
</header>

<div class="modal-request" id="requestNews">
    <form action="{{ url('send-request') }}" class="form-request" id="form-request">
        <div class="header">Request Berita</div>
        <div class="form-wp">
            <label for="fname" class="label ">Alamat Email</label>
            <input type="text" id="fname" name="email" class="input is-invalid">
            <label for="fname" class="label ">Pilih Kategori</label>
            <select class="select-wp" id="news" name="category">
                <option value="" selected>Pilih Kategori Berita</option>
                <option value="Daerah">Daerah</option>
                <option value="Nasional">Nasional</option>
            </select>
            <button class="btn-submit">Submit</button>
        </div>
    </form>
    <div class="close-button" onClick="modalDeActive()">
      <span class="close"></span>
      <span class="close"></span>
    </div>
</div>

<script>
    function modalActive() {
      var element = document.getElementById("requestNews");
      element.classList.add("active");
    }

    function modalDeActive() {
      var element = document.getElementById("requestNews");
      element.classList.remove("active");
    }

    $('#form-request').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        data = form.serializeArray();
        data.push({
            name: '_token',
            value: "{{ csrf_token() }}"
        });

        $.ajax({
            url: $(this).attr('action'),
            method: "POST",
            data: data,
            dataType: "json",
            success: function(xhr) {
                alert('Sukses mengirim data!');
                location.reload();
            },
            error: function(err) {
                if (err.status == 422) {
                    $.each(err.responseJSON.errors, function(field, messages) {
                       alert(messages[0]);
                    });
                }
            }
        });
    });
</script>
