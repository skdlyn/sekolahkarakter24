@extends('layout.admin')
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact-page" class="contact-page">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Contact</h2>
                <p>KONTAK <span class="cus">KAMI</span></p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-7">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-map-marker-alt"></i>  Alamat</span>
                                </div>
                                <p>Jl. Ketintang No.45 Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-phone"></i>  Nomor Telepon</span>
                                </div>
                                <p>+6231 827 4477</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-map-marker-alt"></i>  Jam Operasional</span>
                                </div>
                                <p class="lh-lg">Senin - Sabtu, Pukul 07:00 - 16:00 WIB</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-envelope"></i>  E-Mail</span>
                                </div>
                                <p>sdmuhammadiyah24sby@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="lokasi card"  style="border-radius:25px">
                        <div class="card-header text-dark" style="border-radius:25px 25px 0px 0px; background-color:#9CF0B9">
                            Lokasi Kami
                        </div>
                        <div class="card-body">
                            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 150px">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.405043384314!2d112.72622349999999!3d-7.3083106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb7808dc2965%3A0xfaa47b5206776fec!2sJl.%20Ketintang%20No.45%2C%20Wonokromo%2C%20Kec.%20Gayungan%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060243!5e0!3m2!1sid!2sid!4v1683245933871!5m2!1sid!2sid"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-contact col-lg-12">
                <header class="section-header">
                    <p>INGIN MENGAJUKAN <span class="cus">KONSULTASI DENGAN KAMI ?</span></p>
                    <h2 style="margin-top: 15px;">Kami siap memberikan yang terbaik bagi anak dari Ayah Bunda. Apabila
                        ada
                        yang ingin ditanyakan dan disampaikan, kami siap membantu.</h2>
                </header>

                <form action="forms/contact.php" method="post" class="php-email-form"
                    style="background-color: #9CF0B9; border-radius:25px">
                    <div class="pesan row gy-4 mt-2">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                        </div>
                        <div class="col-md-6 ">
                            <input type="number" class="form-control" name="email" placeholder="Nomor WhatsApp" required>
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="subject" placeholder="E-Mail" required>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                            <button type="submit" style="border-radius: 15px">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section><!-- End Contact Section -->
@endsection
