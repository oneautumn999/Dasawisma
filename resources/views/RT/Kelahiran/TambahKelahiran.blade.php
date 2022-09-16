@extends('include.layout')


@section('content')
<div class="card z-index-0">
    <div class="card-header text-center pt-4">
      <h5>Tambah Data Kelahiran </h5>
    </div>
    <div class="card-body">
      <form role="form text-left" action="{{route('store.kelahiran')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="mb-3">
                    <label>RW</label>
                  <select required name="rw" class="form-control">
                    <option value="">--Select--</option>
                     @foreach($getRw as $key )
                     <option value="{{$key->rw}}">{{$key->rw}}</option>
                     @endforeach
                  </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="mb-3">
                    <label>Nama KK</label>
                  <select required name="user_id" class="form-control">
                    <option value="">--Select--</option>
                     @foreach($getNama as $key )
                     <option value="{{$key->id}}">{{$key->nama_kepalakk}}</option>
                     @endforeach
                  </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="nama_ibu"> Nama Ibu</label>
                    <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" aria-label="Password" aria-describedby="password-addon" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label>Status</label>
                  <select required name="status" class="form-control">
                    <option value="">--Select--</option>
                    <option value="Normal">Normal</option>
                    <option value="Cesar">Cesar</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3"> 
                    <label for="nama_bayi"> Nama Bayi</label>
                  <input type="text" class="form-control" name="nama_bayi" placeholder="Nama Bayi" aria-label="Password" aria-describedby="password-addon" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                <label>Jenis Kelamin</label>
                  <select required name="jenis_kelamin" class="form-control">
                    <option value="">--Select--</option>
                    <option value="Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select> 
                </div>
             
            </div>
            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" placeholder="TanggalLahir" aria-label="Password" aria-describedby="password-addon" required>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label>Akte</label>
                <input type="text" class="form-control" name="akte" placeholder="Akte Kelahiran" aria-label="Password" aria-describedby="password-addon" required>
              </div>
            </div>
        </div>
        <div class="form-check form-check-info text-left">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
          <label class="form-check-label" for="flexCheckDefault">
            I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
          </label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
@endsection
