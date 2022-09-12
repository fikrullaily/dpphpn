<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ url('assets_user/img/logo.png') }}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="{{ url('template/index') }}">Home</a></li>
          <li class="dropdown"><span>Berita</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            <ul>
              <li><a href="{{ url('template/news') }}" class="active">Daerah</a></li>
              <li><a href="{{ url('template/news') }}">Nasional</a></li>
              <li><a href="{{ url('template/news') }}">Trending</a></li>
            </ul>
          </li>
          <li class="dropdown" style="margin-left: 20px"><span>Profile</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            <ul>
              <li><a href="{{ url('template/profile-lembaga') }}" class="active">Profile Lembaga</a></li>
              <li><a href="{{ url('template/struktur-organisasi') }}">Struktur Organisasi</a></li>
              <li><a href="{{ url('template/profile') }}">Profile DPP HPN</a></li>
              <li><a href="{{ url('template/daftar-dpw-hpc') }}">Daftar DPW & DPC</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('template/program-kerja') }}">Program Kerja</a></li>
          <li><a class="nav-link scrollto" href="{{ url('template/catalog') }}">Katalog</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto modal-active" onClick="modalActive()" href="#about">Request</a>
    </div>
  </header>
  <div class="modal-request" id="requestNews">
    <form action="/" class="form-request">
      <div class="header">Request Berita</div>
      <div class="form-wp">
        <label for="fname" class="label ">Alamat Email</label>
        <input type="text" id="fname" name="fname" class="input">
        <label for="fname" class="label ">Pilih Kategori</label>
        <select class="select-wp" id="news" name="news">
          <option value="1">Pilih Kategori Berita</option>
          <option value="1">Daerah</option>
          <option value="2">Nasional</option>
        </select>
        <input class="btn-submit" type="submit">
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
  </script>
