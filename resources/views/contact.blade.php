@extends('layout.admin')
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Contact</h2>
                <p>CONTACT <span class="cus">US</span></p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>Jl. Ketintang No.45,<br>Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Contact Number</h3>
                                <p>+6231 827 4477<br><br></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>sdmuhammadiyah24sby@gmail.com<br><br></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Senin - Sabtu<br>07:00 - 16:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="card" style="width: 40rem; height:535px; border-radius:25px">
                      <div class="card-header bg-warning text-white" style="border-radius:25px 25px 0px 0px">
                          Lokasi Kami
                      </div>
                      <div class="card-body">
                          <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                              <iframe
                                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.405043384314!2d112.72622349999999!3d-7.3083106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb7808dc2965%3A0xfaa47b5206776fec!2sJl.%20Ketintang%20No.45%2C%20Wonokromo%2C%20Kec.%20Gayungan%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060243!5e0!3m2!1sid!2sid!4v1683245933871!5m2!1sid!2sid"
                                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                  referrerpolicy="no-referrer-when-downgrade"></iframe>
                          </div>
                      </div>
                  </div>
            </div>

            </div>
            <div class="form col-lg-12">
              <header class="section-header">
                <p>INGIN MENGAJUKAN <span class="cus">KONSULTASI DENGAN KAMI</span></p>
                <h2 style="margin-top: 15px">Kami siap memberikan yang terbaik bagi anak dari Ayah Bunda. Apabila ada yang ingin ditanyakan dan disampaikan, kami siap membantu.</h2>
            </header>
                <form action="forms/contact.php" method="post" class="php-email-form" style="background-color: rgb(203, 253, 253); border-radius:25px">
                    <div class="row gy-4">
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
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section><!-- End Contact Section -->
@endsection
