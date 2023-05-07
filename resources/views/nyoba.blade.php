@extends('layout.admin')
@section('content')
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div> --}}
            <div class="row mt-40">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src="{{ asset('assets/img/images/course-1.jpg')}}" alt="" width="100%" height="100%">
                            <div class="trend-top-cap">
                                <span>Kelas 5</span>
                                <h2><a href="details.html">Selamat Datang Di<br> Sekolah Karakter 24 Surabaya</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            <div class="col-lg-4">
                            <div class="single-bottom mb-35">
                                <div class="trend-bottom-img mb-30">
                                    <img src="assets/img/images/course-2.jpg" alt="" width="100%" height="100%">
                                </div>
                                <div class="trend-bottom-cap">
                                    <span class="color1">Kelas 1</span>
                                    <h4><a href="details.html">Peringatan Hari Pahlawan Momentum Semai Karakter Generasi Bangsa</a></h4>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="assets/img/images/course-2.jpg" alt="" width="100%" height="100%">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color2">Kelas 3</span>
                                        <h4><h4><a href="details.html">Peringatan Hari Pahlawan Momentum Semai Karakter Generasi Bangsa</a></h4></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="assets/img/images/course-2.jpg" alt="" width="100%" height="100%">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color3">Kelas 1</span>
                                        <h4><a href="details.html"> Serunya Lomba HUT RI di Sekolah Karakter SDM 24 Surabaya</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/images/course-1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">Kelas 2</span>
                            <h4><a href="details.html">Serunya Lomba HUT RI di Sekolah Karakter SDM 24 Surabaya</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/images/course-2.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color3">Kelas 5</span>
                            <h4><a href="details.html">Serunya Lomba HUT RI di Sekolah Karakter SDM 24 Surabaya</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/images/course-3.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color2">Kelas 4</span>
                            <h4><a href="details.html">Serunya Lomba HUT RI di Sekolah Karakter SDM 24 Surabaya</a></h4>
                        </div>
                    </div> 
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/images/course-6.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color4">Kelas 6</span>
                            <h4><a href="details.html">Serunya Lomba HUT RI di Sekolah Karakter SDM 24 Surabaya</a></h4>
                        </div>
                    </div>
                    {{-- <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/images/course-11.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">Skeping</span>
                            <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
@endsection