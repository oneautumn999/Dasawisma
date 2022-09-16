@extends('include.layout')


@section('content')
<div class="card z-index-0">
    <div class="card-header text-center pt-4">
      <h5>Tambah Data Dasawisma RT </h5>
    </div>
    <div class="card-body">
      <form role="form text-left" action="{{route('store.rt')}}" method="post">
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="email-addon" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" aria-label="Password" aria-describedby="password-addon" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" aria-label="Password" aria-describedby="password-addon" required>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <input type="text" class="form-control" name="rt" placeholder="RT / Dusun" aria-label="Password" aria-describedby="password-addon" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <input type="text" class="form-control" name="kabupaten" placeholder="kabupaten" aria-label="Password" aria-describedby="password-addon" required>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
              <div class="mb-3">
                  <input name="rw" type="text" class="form-control" placeholder="RW" required>  </input>
              </div>
              
          </div>
          <div class="col-12 col-md-6">
            <div class="mb-3">
                <input name="kelurahan" type="text" class="form-control" placeholder="Kelurahan" required>  </input>
            </div>
            
        </div>
        </div>
       
        <div class="col-12 col-md-12">
            <div class="mb-3">
                <textarea name="alamat" class="form-control" id="" cols="30" rows="5" required> Alamat </textarea>
              </div>
        </div>
        <div class="form-check form-check-info text-left">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
          <label class="form-check-label" for="flexCheckDefault">
            I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
          </label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar Sekarang</button>
        </div>
      </form>
    </div>
  </div>
@endsection
