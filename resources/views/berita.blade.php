@extends('layout.admin')
@section('content')
    <section class="berita-page" id="berita-page">
        <div class="container">
            <header class="section-header">
                <h2>BERITA</h2>
                <p>BERANDA <span class="blog">24</span></p>
            </header>
            <div class="row">
                <div class="col-md-6 mb-4 course d-lg-flex ftco-animate">
                    <div class="img"><img src="{{ asset('assets/img/images/course-1.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="text bg-light p-4">
                        <p>Mempelajari Flora Tanam</p>
                        <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                        <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                            necessary regelialia. It is a paradisematic country</h3>
                    </div>
                </div>
                <div class="col-md-6 mb-4 course d-lg-flex ftco-animate">
                    <div class="img"><img src="{{ asset('assets/img/images/course-2.jpg') }}" alt=""
                            srcset=""></div>
                    <div class="text bg-light p-4">
                        <p>Mempelajari Flora Gantung</p>
                        <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                        <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                            necessary regelialia. It is a paradisematic country</h3>
                    </div>
                </div>
                <div class="col-md-6 mb-4 course d-lg-flex ftco-animate">
                    <div class="img"><img src="{{ asset('assets/img/images/course-3.jpg') }}" alt=""
                            srcset=""></div>
                    <div class="text bg-light p-4">
                        <p>Konsep Belajar Outdoor</p>
                        <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                        <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                            necessary regelialia. It is a paradisematic country</h3>
                    </div>
                </div>
                <div class="col-md-6 mb-4 course d-lg-flex ftco-animate">
                    <div class="img"><img src="{{ asset('assets/img/images/course-4.jpg') }}" alt=""
                            srcset=""></div>
                    <div class="text bg-light p-4">
                        <p>Belajar Bersama di MAS</p>
                        <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                        <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                            necessary regelialia. It is a paradisematic country</h3>
                    </div>
                </div>
                <div class="col-md-6 mb-4 course d-lg-flex ftco-animate">
                    <div class="img"><img src="{{ asset('assets/img/images/course-5.jpg') }}" alt=""
                            srcset=""></div>
                    <div class="text bg-light p-4">
                        <p>Belajar Membatik</p>
                        <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                        <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                            necessary regelialia. It is a paradisematic country</h3>
                    </div>
                </div>
                <div class="col-md-6 mb-4 course d-lg-flex ftco-animate">
                    <div class="img"><img src="{{ asset('assets/img/images/course-6.jpg') }}" alt=""
                            srcset=""></div>
                    <div class="text bg-light p-4">
                        <p>Materi Membatik</p>
                        <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                        <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                            necessary regelialia. It is a paradisematic country</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="berita-tv" class="berita-tv">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>BERITA</h2>
                <p>24 <span class="blog">TV</span></p>
            </header>
            <div class="row">
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img">
                            {{-- <iframe width="100%" src="https://www.youtube.com/embed/B1Rxlu0rzPI"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe> --}}
                            <img src="{{ asset('assets/img/images/course-1.jpg') }}" alt="" srcset="">
                        </div>
                        <span class="post-date">4 Oktober 2022</span>
                        <h3 class="post-title">Siswa Kelas 4 Belajar Ragam Flora Tanaman</h3>
                        <a href="https://www.youtube.com/embed/B1Rxlu0rzPI"
                            class="readmore stretched-link mt-auto"><span>Tonton Video</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img">
                            {{-- <iframe width="100%" src="https://www.youtube.com/embed/B1Rxlu0rzPI"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe> --}}
                            <img src="{{ asset('assets/img/images/course-1.jpg') }}" alt="" srcset="">
                        </div>
                        <span class="post-date">4 Oktober 2022</span>
                        <h3 class="post-title">KTS Dengan Tema Ragam Flora Gantung</h3>
                        <a href="https://www.youtube.com/embed/B1Rxlu0rzPI"
                            class="readmore stretched-link mt-auto"><span>Tonton Video</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img">
                            {{-- <iframe width="100%" src="https://www.youtube.com/embed/B1Rxlu0rzPI"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe> --}}
                            <img src="{{ asset('assets/img/images/course-1.jpg') }}" alt="" srcset="">
                        </div>
                        <span class="post-date">4 Oktober 2022</span>
                        <h3 class="post-title">Siswa Kelas 5 Menikmati Belajar di Luar Kelas</h3>
                        <a href="https://www.youtube.com/embed/B1Rxlu0rzPI"
                            class="readmore stretched-link mt-auto"><span>Tonton Video</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Recent Blog Posts Section -->
@endsection
