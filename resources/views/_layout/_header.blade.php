<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container px-5">
      <a class="navbar-brand" href="/home">Sekolahku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="uil uil-home"></i>Home</a></li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="uil uil-blogger"></i>Profil</a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                      <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'tentang']) }}">Tentang</a></li>
                      <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'sejarah']) }}">Sejarah</a></li>
                       <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'visi-misi']) }}">Visi dan Misi</a></li>
                  </ul>
                </li>
              <li class="nav-item"><a class="nav-link" href="{{ route('guru.index') }}"><i class="uil uil-bag"></i>Guru</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}"><i class="uil uil-phone"></i>Berita</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('galeri.index') }}"><i class="uil uil-info-circle"></i>Galeri</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('ekskul.index') }}"><i class="uil uil-info-circle"></i>Ekskul</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('kontak.index') }}"><i class="uil uil-info-circle"></i>Kontak</a></li>
          </ul>
      </div>
  </div>
</nav>
            