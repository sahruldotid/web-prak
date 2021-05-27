@extends('dashboard.dashboard_admin.dashboard')
@section('title','Edit Account')
@section('main')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Account</h1>
            
          </div>

          <h2>Edit Account</h2>
          <form action="update" role="form" method="POST">
          
          <div class="form-group" style="display: none;">
              <input type="hidden" name="IDPerson" id="id" class="form-control" value="">
          </div>
          
          
          <div class="form-group">
              <label>Name</label>
              <input type="text" name="Nama" class="form-control" maxlength="20" required="" value="">
          </div>
          
          
          <div class="form-group">
              <label for="input-type">Gender</label>
              <div class="col text-center">
                  <div id="input-type" class="row">
                      <div class="col-sm-2">
                          <input class="form-check-input" type="radio" name="Gender" value="M" id="inlineRadio1" class="sr-only" required >
                          <label class="form-check-label" for="inlineRadio1">Laki - laki</label>
                      </div>
                      <div class="col-sm-2">
                          <input class="form-check-input" type="radio" name="Gender" value="F" class="sr-only" id="inlineRadio2" required>
                          <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                      </div>
                  </div>
              </div>
          </div>
          
          
          <div class="form-group">
              <label for="fullname">Kota Lahir</label>
              <input type="text" name="KotaLahir" id="birthcity" class="form-control" maxlength="30" required="" value="">
          </div>
          
          <div class="form-group">
              <label for="fullname">Tanggal Lahir</label>
              <input type="date" name="TanggalLahir" id="birthdate" class="form-control" required="" value="">
          </div>
          <div class="form-group">
              <label for="fullname">Alamat</label>
              <input type="text" name="Alamat" id="location" class="form-control" maxlength="40" required="" value="">
          </div>
          <div class="form-group">
              <label for="fullname">Kota</label>
              <input type="text" name="Kota" id="city" class="form-control" maxlength="30" required="" value="">
          </div>
          
          
          
          <div class="form-group text-right">
          <button type="submit" class="btn btn-info" style="margin-top: 30px">Update</button>
          </div>
          </form>

        </main>
     @endsection