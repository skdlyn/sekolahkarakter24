@extends('layout.admin')
@section('content')
@section('content-title', 'Formulir Pendaftaran')
<section class="formulir vh-100">
    <div class="container h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-12 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Registration Form</h3>
              <h4 class="mb-4 font-weight-bold">Biodata Calon Peserta Didik</h4>
              <form>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="firstName" class="form-control form-control-lg" />
                      <label class="form-label" for="firstName">Nama Depan</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="lastName" class="form-control form-control-lg" />
                      <label class="form-label" for="lastName">Nama Belakang</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                      <input type="date" class="form-control form-control-lg" id="birthdayDate" />
                      <label for="birthdayDate" class="form-label">Tanggal Lahir</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <h6 class="mb-2 pb-1">Gender: </h6>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                        value="option1" checked />
                      <label class="form-check-label" for="femaleGender">Perempuan</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                        value="option2" />
                      <label class="form-check-label" for="maleGender">Laki - Laki</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="tempatLahir" class="form-control form-control-lg" />
                      <label class="form-label" for="tempatLahir">Tempat Lahir</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="tempatTinggal" class="form-control form-control-lg" />
                      <label class="form-label" for="tempatTinggal">Alamat Lengkap</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="email" id="emailAddress" class="form-control form-control-lg" />
                        <label class="form-label" for="emailAddress">Email</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                      </div>
                    </div>
                  </div>
                {{-- <div class="row">
                  <div class="col-12">
                    <select class="select form-control-lg">
                      <option value="1" disabled>Choose option</option>
                      <option value="2">Subject 1</option>
                      <option value="3">Subject 2</option>
                      <option value="4">Subject 3</option>
                    </select>
                    <label class="form-label select-label">Choose option</label>
                  </div>
                </div> --}}
                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection