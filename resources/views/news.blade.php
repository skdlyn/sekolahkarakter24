@extends('layout.admin')
@section('content')
@section('content-title', '24 NEWS')
<section class="news" id="news">
    <div class="container col-md-8">
        <header class="section-header">
            <h2>NEWS</h2>
            <p>BERITA <span class="blog">24</span></p>
        </header>
        <div class="row">
            <div class="col-md-12 mb-4 course d-lg-flex ftco-animate">
                <div class="img"><img src="{{ asset('assets/img/images/course-1.jpg') }}" alt="" srcset="">
                </div>
                <div class="text bg-light p-4">
                    <a href="/news_lengkap" class="link"><p>Silaturrahim Alumni SDM24 Tahun 2010</p></a>
                    <span class="tgl">By Official / 24 Agustus 2023</span>                  <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                    <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country. Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</h3>
                </div>
            </div>
            <hr>
            <div class="col-md-12 mb-4 course d-lg-flex ftco-animate">
                <div class="img"><img src="{{ asset('assets/img/images/course-2.jpg') }}" alt=""
                        srcset=""></div>
                <div class="text bg-light p-4">
                    <a href="/news_lengkap" class="link"><p>Mempelajari Flora Gantung</p></a>
                    <span class="tgl">By Official / 24 Agustus 2023</span>
                    <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                    <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country. Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</h3>
                </div>
            </div>
            <hr>
            <div class="col-md-12 mb-4 course d-lg-flex ftco-animate">
                <div class="img"><img src="{{ asset('assets/img/images/course-3.jpg') }}" alt=""
                        srcset=""></div>
                <div class="text bg-light p-4">
                    <a href="/news_lengkap" class="link"><p>Profil Sekolah Karakter SD Muhammadiyah 24 Surabaya</p></a>
                    <span class="tgl">By Official / 24 Agustus 2023</span>
                    <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                    <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country. Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</h3>
                </div>
            </div>
            <hr>
            <div class="col-md-12 mb-4 course d-lg-flex ftco-animate">
                <div class="img"><img src="{{ asset('assets/img/images/course-4.jpg') }}" alt=""
                        srcset="/news_lengkap"></div>
                <div class="text bg-light p-4">
                    <a href="" class="link"><p>Sekolah Karakter Gelar Wisuda Khotmil Wa Tahfidzil Quran secara Hybird</p></a>
                    <span class="tgl">By Official / 24 Agustus 2023</span>
                    <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                    <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country. Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country.</h3>
                </div>
            </div>
            <hr>
            <div class="col-md-12 mb-4 course d-lg-flex ftco-animate">
                <div class="img"><img src="{{ asset('assets/img/images/course-5.jpg') }}" alt=""
                        srcset=""></div>
                <div class="text bg-light p-4">
                    <a href="/news_lengkap" class="link"><p>[SBDP] | Kelas 1 | Menyanyikan Lagu Garuda Pancasila</p></a>
                    <span class="tgl">By Official / 24 Agustus 2023</span>
                    <!-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> -->
                    <h3>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country. Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</h3>
                </div>
            </div>
            <hr>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
    </div>
</section>
@endsection