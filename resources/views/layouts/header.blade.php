<header>
    <!-- start of navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top min-vh-10">
        <div class="container">
          {{-- <a class="navbar-brand logo_wibaku" href="{{ asset("assets/img/Logo Candi Badut Putih Samping.png") }}">WIBAKU</a> --}}
          <a href="{{ url('/') }}">
            <img src="{{ asset('assets/img/Logo Candi Badut Putih Samping.png') }}" style="height: 3rem;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul id="menu" class="navbar-nav flex-grow-1 d-flex justify-content-center">
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link" href="{{ url('/') }}">Halaman Utama</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link" href="{{ url('tentang-kami') }}">Tentang Kami</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link" href="{{ url('objek_wisata') }}">Objek Wisata</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link" href="{{url('login')}}">Login</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a id="btn_daftar" class="nav-link border border-2 rounded-pill" href="#" style="border-color: #D1B280!important">Daftar</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                  <a class="nav-link fw-bold" href="#" style="color: #D1B280">ID</a>
                  <p class="navbar-text mb-0 px-2 px-lg-0">|</p>
                  <a class="nav-link" href="#">EN</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- end of navbar -->
</header>