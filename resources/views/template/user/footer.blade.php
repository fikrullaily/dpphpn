<footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
                <img src="{{ url('assets_user/img/logo-white.png') }}" alt="" class="logo-footer">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Menu</h4>
            <div class="row">
              <div class="col-5">
                <div class="footer-menu"><a href="{{ url('template/index') }}">Home</a></div>
                <div class="footer-menu accordion">Berita <i class="bi bi-chevron-right"></i></div>
                <div class="panel">
                  <div class="footer-menu sub-menu"><a href="{{ url('template/news') }}">Daerah</a></div>
                  <div class="footer-menu sub-menu"><a href="{{ url('template/news') }}">Nasional</a></div>
                  <div class="footer-menu sub-menu"><a href="{{ url('template/news') }}">Trending</a></div>
                </div>
                <div class="footer-menu accordion">Profile <i class="bi bi-chevron-right"></i></div>
                <div class="panel">
                  <div class="footer-menu sub-menu"><a href="{{ url('template/profile-lembaga') }}">Profile Lembaga</a></div>
                  <div class="footer-menu sub-menu"><a href="{{ url('template/struktur-organisasi') }}">Struktur Organisasi</a></div>
                  <div class="footer-menu sub-menu"><a href="{{ url('template/profile') }}">Profile DPP HPN</a></div>
                  <div class="footer-menu sub-menu"><a href="{{ url('template/daftar-dpw-hpc') }}">Daftar DPW & DPC</a></div>
                </div>
              </div>
              <div class="col-5">
                <div class="footer-menu"><a href="{{ url('template/program-kerja') }}">Program Kerja</a></div>
                <div class="footer-menu"><a href="{{ url('template/catalog') }}">Katalog</a></div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Alamat</h4>
            <p>Jln. Cempaka Putih Timur XXIV Np.46, Jakarta Pusat, <br>DKI Jakarta 10510</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Himpunan Pengusaha Nahdliyin</span></strong>. All Rights Reserved
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>