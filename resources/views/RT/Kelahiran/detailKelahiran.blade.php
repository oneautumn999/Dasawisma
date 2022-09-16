@extends('include.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6><i class="fa fa-check text-info" aria-hidden="true"></i> Detail kelahiran</h6>
                         
                        </div>
                    </div>
                </div>
                <div class="card-body p-5 px-0 pb-2">
                    <div class="table-responsive col-md-6">
                        <table class="table ">
                            <thead>
                              <tr class="text-left">
                                <th scope="col">Provinsi</th>
                                <th scope="col">{{$getAlamat->provinsi}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kabupaten</th>
                                <th scope="col">{{$getAlamat->kabupaten}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kecamatan</th>
                                <th scope="col">{{$getAlamat->kecamatan}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kelurahan</th>
                                <th scope="col">{{$getAlamat->alamat}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">RT</th>
                                <th scope="col">{{$getAlamat->rt}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">{{$getKelahiran->nama_ibu}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Status</th>
                                <th scope="col">{{$getKelahiran->status}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Nama Bayi</th>
                                <th scope="col">{{$getKelahiran->nama_bayi}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">{{$getKelahiran->jenis_kelamin}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Nama Bayi</th>
                                <th scope="col">{{$getKelahiran->nama_bayi}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Tanggal Lahir </th>
                                <th scope="col">{{$getKelahiran->tanggal_lahir}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Akte </th>
                                <th scope="col">{{$getKelahiran->akte}}</th>
                              </tr>
                            </thead>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
