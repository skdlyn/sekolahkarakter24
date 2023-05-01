@extends('layout.admin')
@section('content')
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>ABOUT <span class="us">US</span></p>
            </header>
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>Selamat Datang di Sekolah Karakter <br> SD Muhammadiyah 24 Surabaya</h3>
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Tentang Kami</a>
                        </li>
                    </ul><!-- End Tabs -->
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <p>SEKOLAH KARAKTER SD MUHAMMADIYAH 24 SURABAYA merupakan Sekolah Islam Unggulan yang didirikan oleh Muhammadiyah pada 9 Maret tahun 1978.
                                Pendirian SEKOLAH KARAKTER merupakan respon terhadap tantangan generasi masa depan Indonesia yang semakin kompleks, sehingga penting untuk mempersiapkan Generasi Unggul dan Terbaik agar dapat menjawab tantangan masa depan.
                                Visi Menjadi Sekolah Unggul yang Berkarakter dan Berprestasi menjadi pijakan SEKOLAH KARAKTER dalam menyelenggarakan, mengembangkan, serta optimalisasi semua potensi yang dimiliki warga sekolah.
                                Melalui Pendidikan Karakter yang Kontekstual (Contextual), Menyenangkan (Joyfull) dan Bermakna (Meaningful), SEKOLAH KARAKTER terus berupaya menanamkan nilai-nilai kehidupan dan optimalisasi potensi anak melalui 5 Pilar DEBEST (Qurani, Saintek, Literasi, Sport & Art dan Social Responcibility) dan Penyemaian 6 Bintang Karakter yang dikemas secara sistematis, metodis dan terukur dalam Kurikulum 24.</p>
                        </div><!-- End Tab 1 Content -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/img/images/course-6.jpg') }}" class="img-fluid" alt="">
                </div>
            </div><!-- End Feature Tabs -->
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
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="service-box pink">
                                <i class="ri-discuss-line icon"></i>
                                <h3>Dolori Architecto</h3>
                                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                    Corrupti recusandae ducimus enim.</p>
                                <a href="#" class="read-more"><span>Read More</span> <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Services Section -->
@endsection
