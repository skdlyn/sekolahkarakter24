{{-- <section id="hero" class="hero d-flex align-items-center"> --}}

<header id="header" class="header fixed-top">
    <div class="container container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/header-logo.png') }}" alt="">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                {{-- <li><a class="nav-link scrollto" href="/profile">Profil</a></li> --}}
                <li class="dropdown"><a href="/profile"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/profile">Profil</a></li>
                        <li><a href="/mengapa">Mengapa 24</a></li>
                        <li><a href="/visi">Visi Misi</a></li>
                        <li><a href="ptk">PTK 24</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/Kurikulum">Kurikulum</a></li>
                <li class="dropdown"><a href="#"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/berita">BERITA</a></li>
                        <li><a href="/tv">24 TV</a></li>
                        <li><a href="/news">24 News</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/ppdb">PPDB 2023-2024</a></li>
                <li><a class="nav-link scrollto" href="/agenda">Agenda</a></li>
                <li><a class="nav-link scrollto" href="/contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
{{-- </section> --}}
