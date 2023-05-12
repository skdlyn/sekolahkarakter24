@extends('layout.admin')
@section('content')
@section('content-title', 'Formulir Pendaftaran')
<section class="daftar" id="daftar">
    <div class="row justify-content-center">
        <div class="col-lg-10 " style="padding: 30px; margin-top:58px;">
            <div class="card" style="border-radius: 15px; border-color:darkorange; background-color: rgba(245, 245, 245, 0.9);">
                <div class="card-body">
                    <form>
                        <header class="section-header">
                            <p>Data <span class="blog" style="color: darkorange">Diri</span></p>
                        </header>
                        <div class="row" style="padding: 0px 30px 0px 30px">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label for="formlabel" class="form-label">Nama Lengkap</label>
                                    <input type="text" id="name" class="form-control"
                                        placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="lastName">NIK</label>
                                    <input type="number" id="lastName" class="form-control"
                                        placeholder="Masukkan Nomor Induk Kependudukan">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 0px 30px 0px 30px">
                            <div class="col-md-4 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="birthdayDate" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="birthdayDate">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="tempatLahir " class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="birthdayDate"
                                        placeholder="Masukkan Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="mb-2 pb-1">Jenis Kelamin : </h6>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="femaleGender" value="option1">
                                    <label class="form-check-label" for="femaleGender">Perempuan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="maleGender" value="option2">
                                    <label class="form-check-label" for="maleGender">Laki - Laki</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="wni" class="form-label">Kewarganegaraan</label>
                                    <select class="form-select form-control">
                                        <option>Kewarganegaraan</option>
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="tempatLahir " class="form-label">Nama Ibu Kandung</label>
                                    <input type="text" class="form-control" id="birthdayDate"
                                        placeholder="Masukkan Nama Ibu Kandung">
                                </div>
                            </div>
                            <hr>
                            <header class="section-header">
                                <p>Data <span class="blog" style="color: darkorange">Alamat Asal</span></p>
                            </header>
                            <div class="row" style="padding: 0px 30px 0px 30px">
                                <div class="col-md-8 mb-4">
                                    <div class="form-outline">
                                        <label for="formlabel" class="form-label">Alamat : </label>
                                        <textarea type="text-area" id="name" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="lastName">Kode Pos :</label>
                                        <input type="number" id="lastName" class="form-control"
                                            placeholder="Masukkan Kode Pos">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding: 0px 30px 0px 30px">
                                <div class="col-md-4 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="wni" class="form-label">Provinsi : </label>
                                        <select class="form-select form-control">
                                            <option>Provinsi</option>
                                            <option value="Jawa Timur">Jawa Timur</option>
                                            <option value="Jawa Tengah">Jawa Tengah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="wni" class="form-label">Kabupaten / Kota : </label>
                                        <select class="form-select form-control">
                                            <option>Kabupaten / Kota</option>
                                            <option value="Surabaya">Surabaya</option>
                                            <option value="Sidoarjo">Sidoarjo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="lastName">Kecamatan :</label>
                                        <input type="text" id="lastName" class="form-control"
                                            placeholder="Masukkan Kecamatan">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <header class="section-header">
                              <p>Pilihan <span class="blog" style="color: darkorange">Program Pendidikan</span></p>
                          </header>
                            <div class="row" style="padding: 0px 30px 0px 30px">
                              <div class="col-md-12 mb-4 d-flex align-items-center">
                                  <div class="form-outline datepicker w-100">
                                      <label for="wni" class="form-label">Pilihan Kelas :</label>
                                      <select class="form-select form-control">
                                          <option>Silahkan Pilih Kelas</option>
                                          <option value="Reg">Kelas Reguler</option>
                                          <option value="Bil">Kelas Billingual</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                            <button type="submit" class="btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
