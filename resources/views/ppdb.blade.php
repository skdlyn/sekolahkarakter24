@extends('layout.admin')
@section('content')
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>PPDB</h2>
                <p>Penerimaan Peserta <span class="pr">Didik Baru</span></p>
            </header>
            <div class="row gy-4" data-aos="fade-left">
                <div class="idih col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #f68c09;">Reguler Class</h3>
                        <div class="price"><sup>Rp </sup>x.xxx.xxx,00<span></span></div>
                        <img src="{{ asset('assets/img/images/munaqosyah.jpg') }}" class="img-fluid" alt="">
                        <ul>
                            <li>22 Siswa/Kelas</li>
                            <li>Metode Belajar Modul</li>
                            <li>Program Hafidz Quran 2 Juz</li>
                        </ul>
                        <a href="#" class="btn-buy">Registrasi</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        {{-- <span class="featured">Favorite</span> --}}
                        <h3 style="color: #65c600;">Billingual Class</h3>
                        <div class="price"><sup>Rp </sup>x.xxx.xxx,00<span></span></div>
                        <img src="{{ asset('assets/img/images/munaqosyah.jpg') }}" class="img-fluid" alt="">
                        <ul>
                            <li>28 Siswa/Kelas</li>
                            <li>Tipe Kelas 3 Bahasa</li>
                            <li>Program Hafidz Quran 4 Juz</li>
                        </ul>
                        <a href="#" class="btn-buy">Registrasi</a>
                    </div>
                </div>
                {{-- <div class="row feture-tabs" data-aos="fade-up"> --}}
                <div class="pembayaran col-lg-6">
                    <h3 class="text-center" style="text-transform: uppercase">Silahkan Melakukan Pembayaran Formulir
                        Pendaftaran Sesuai Kelas yang Dipilih Ke Nomor Rekening :</h3>
                    <!-- Tabs -->
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <p class="text-center">7730001752 (Bank Muamalat) A.n SD Muhammadiyah 24 Surabaya.<br>
                                8992424240 (Bank BSI) A.n SD MUHAMMADIYAH 24 SURABAYA</p>
                        </div><!-- End Tab 1 Content -->
                        <div class="tab-pane fade show active" id="tab1">
                            <p class="text-center">Konfirmasi pendaftaran dengan mengirimkan foto bukti pembayaran via WA ke
                                no 081250748894 (klik tombol di bawah).
                                Setelah konfirmasi pembayaran silahkan daftar dengan klik tombol "Daftar Kelas"</p>
                        </div><!-- End Tab 1 Content -->
                        <a href="https://wa.me/6281250748894" class="btn-konfirmasi">Konfirmasi Pembayaran Formulir</a>
                        <a href="#" class="btn-daftar" data-bs-toggle="modal" data-bs-target="#modalLoginForm">Daftar Kelas
                        </a>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section><!-- End Pricing Section -->
@endsection
