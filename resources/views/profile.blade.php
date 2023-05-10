@extends('layout.admin')
@section('content')
@section('content-title', 'Profile')
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>TENTANG <span class="us">24</span></p>
            </header>
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>Selamat Datang di Sekolah Karakter <br><span class="txt">SD Muhammadiyah 24 Surabaya</span></h3>
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <h5 class="mt-10">Tentang Kami</h5>
                        </li>
                    </ul><!-- End Tabs -->
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <p>SEKOLAH KARAKTER SD MUHAMMADIYAH 24 SURABAYA merupakan Sekolah Islam Unggulan yang didirikan
                                oleh Muhammadiyah pada 9 Maret tahun 1978.
                                Pendirian SEKOLAH KARAKTER merupakan respon terhadap tantangan generasi masa depan Indonesia
                                yang semakin kompleks, sehingga penting untuk mempersiapkan Generasi Unggul dan Terbaik agar
                                dapat menjawab tantangan masa depan.
                                Visi Menjadi Sekolah Unggul yang Berkarakter dan Berprestasi menjadi pijakan SEKOLAH
                                KARAKTER dalam menyelenggarakan, mengembangkan, serta optimalisasi semua potensi yang
                                dimiliki warga sekolah.
                                Melalui Pendidikan Karakter yang Kontekstual (Contextual), Menyenangkan (Joyfull) dan
                                Bermakna (Meaningful), SEKOLAH KARAKTER terus berupaya menanamkan nilai-nilai kehidupan dan
                                optimalisasi potensi anak melalui 5 Pilar DEBEST (Qurani, Saintek, Literasi, Sport & Art dan
                                Social Responcibility) dan Penyemaian 6 Bintang Karakter yang dikemas secara sistematis,
                                metodis dan terukur dalam Kurikulum 24.</p>
                        </div><!-- End Tab 1 Content -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/img/images/course-4.jpg') }}" class="img-fluid" alt="" width="100%">
                </div>
            </div><!-- End Feature Tabs -->
        </div>
    </section>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>Visi & Misi Kami :</p>
                <p>Menjadi Sekolah Unggul, Berkarakter dan Berprestasi</p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <img src="{{ asset('assets/img/images/planningc.png') }}" class="img-fluid" alt=""
                            width="100px" height="100px">
                        <h3>Membangun manajemen sekolah berkelanjutan.</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <img src="{{ asset('assets/img/images/win.png') }}" class="img-fluid" alt="" width="100px"
                            height="100px">
                        <h3>VISI : <br> Menjadi Sekolah Unggul, Berkarakter dan Berprestasi</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box pink">
                        <img src="{{ asset('assets/img/images/learningc.png') }}" class="img-fluid" alt=""
                            width="100px" height="100px">
                        <h3>Menyelenggarakan pembelajaran yang efektif, kreatif, dan menyenangkan berbasis potensi
                            siswa.</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <img src="{{ asset('assets/img/images/communityc.png') }}" class="img-fluid" alt=""
                            width="100px" height="100px">
                        <h3>Meningkatkan kualitas pendidik dan tenaga kependidikan.</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <img src="{{ asset('assets/img/images/shalat.png') }}" class="img-fluid" alt=""
                            width="100px" height="100px">
                        <h3>Menyiapkan lingkungan sekolah yang islami dan menyenangkan</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <img src="{{ asset('assets/img/images/celebrating.png') }}" class="img-fluid" alt=""
                            width="100px" height="100px">
                        <h3>Meningkatkan semangat berprestasi seluruh warga sekolah sesuai bakat dan minat.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->
    <!-- ======= 24 News Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>PENCAPAIAN</h2>
                <p>PRESTASI SISWA <span class="news">SD KARAKTER 24</span></p>
            </header>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('assets/img/images/course-2.jpg') }}" class="d-block w-100"
                            alt="Sunset Over the City" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Juara 1 EcoGreen Tingkat Kota</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('assets/img/images/course-2.jpg') }}" class="d-block w-100"
                            alt="Sunset Over the City" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Juara 1 EcoGreen Tingkat Kota</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('assets/img/images/course-2.jpg') }}" class="d-block w-100"
                            alt="Sunset Over the City" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Juara 1 EcoGreen Tingkat Kota</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </section><!-- End 24 News Section -->
@endsection
