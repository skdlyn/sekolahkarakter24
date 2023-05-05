@extends('layout.admin')
@section('content')
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
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Tentang Kami</a>
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
                    <img src="{{ asset('assets/img/images/course-6.jpg') }}" class="img-fluid" alt="">
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
                        <i class="ri-discuss-line icon"></i>
                        <h3>Membangun manajemen sekolah berkelanjutan.</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-discuss-line icon"></i>
                        <h3>VISI : <br> Menjadi Sekolah Unggul, Berkarakter dan Berprestasi</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box pink">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Menyelenggarakan pembelajaran yang efektif, kreatif, dan menyenangkan berbasis potensi
                            siswa.</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Meningkatkan kualitas pendidik dan tenaga kependidikan.</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Menyiapkan lingkungan sekolah yang islami dan menyenangkan</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
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
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/images/image-5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Kegiatan Study Tour (SBY ZOO)</h4>
                            <p>Kelas 3</p>
                            {{-- <div class="portfolio-links">
                                <a href="{{ asset('assets/img/images/image-5.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" title="Baca Sekilas"></h1><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/images/image-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Kegiatan Study Tour (Kebun Mangrove)</h4>
                            <p>Kelas 4</p>
                            {{-- <div class="portfolio-links">
                                <a href="{{ asset('assets/img/images/image-1.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" title="Baca Sekilas"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/images/image-6.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pengenalan Tentang Tanaman Mangrove</h4>
                            <p>Kelas 3</p>
                            {{-- <div class="portfolio-links">
                                <a href="{{ asset('assets/img/images/image-6.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    title="Baca Sekilas"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/images/course-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Sesi Pembelajaran Outclass</h4>
                            <p>Kelas 4</p>
                            {{-- <div class="portfolio-links">
                                <a href="{{ asset('assets/img/images/course-1.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    title="Baca Sekilas"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/images/course-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Mempelajari Flora Tanam</h4>
                            <p>Kegiatan Kelas 3</p>
                            {{-- <div class="portfolio-links">
                                <a href="{{ asset('assets/img/images/course-2.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    title="Baca Sekilas"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/images/backg_3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pentas GMT</h4>
                            <p>Kelas 6</p>
                            {{-- <div class="portfolio-links">
                                <a href="{{ asset('assets/img/images/backg_3.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    title="Baca Sekilas"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End 24 News Section -->
@endsection
