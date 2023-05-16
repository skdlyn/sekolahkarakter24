@extends('layout.admin')
@section('content')
@section('content-title', 'Detail TV')
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>PENCAPAIAN</h2>
            <p>PRESTASI SISWA <span class="pr">SD KARAKTER 24</span></p>
        </header>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section id="services" class="services">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p>Visi & Misi Kami : <br>
            <span class="pr">Menjadi Sekolah Unggul, Berkarakter dan Berprestasi</span></p>
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
</section>
@endsection
