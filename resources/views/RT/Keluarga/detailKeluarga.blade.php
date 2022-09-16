@extends('include.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6><i class="fa fa-check text-info" aria-hidden="true"></i> Detail Keluarga </h6>
                         
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a href="{{route('tambah.warga')}}" class="btn btn-primary"> Tambah Data Kepala Keluarga </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-5 px-0 pb-2">
                    <div class="table-responsive col-md-6">
                        <table class="table ">
                            <thead>
                              {{-- <tr class="text-left">
                                <th scope="col">Kecamatan </th>
                                <th scope="col">{{$getAlamat->Kecamatan}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Provinsi </th>
                                <th scope="col">{{$getAlamat->provinsi}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kabupaten </th>
                                <th scope="col">{{$getAlamat->kabupaten}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kelurahan </th>
                                <th scope="col">{{$getAlamat->kelurahan}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Alamat </th>
                                <th scope="col">{{$getAlamat->alamat}}</th>
                              </tr> --}}
                              <tr class="text-left">
                                <th scope="col">Jumlah KK </th>
                                <th scope="col">{{$data->jumlah_kk}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jumlah Pus </th>
                                <th scope="col">{{$data->jumlah_pus}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jumlah WUS</th>
                                <th scope="col">{{$data->jumlah_wus}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jumlah Buta</th>
                                <th scope="col">{{$data->jumlah_buta}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jumlah Ibu Hamil</th>
                                <th scope="col">{{$data->jumlah_ibuhamil}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jumlah Menyusui</th>
                                <th scope="col">{{$data->jumlah_menyusui}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jumlah Kebutuhan</th>
                                <th scope="col">{{$data->jumlah_kebutuhanusus}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jumlah Stunting</th>
                                <th scope="col">{{$data->jumlah_stunting}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Makanan Pokok</th>
                                <th scope="col">{{$data->makanan_pokok}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jamban</th>
                                <th scope="col">{{$data->jamban_klrg}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Sumber Air</th>
                                <th scope="col">{{$data->sumber_air}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Tempat Sampah </th>
                                <th scope="col">{{$data->tempat_sampah}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Air Limbah</th>
                                <th scope="col">{{$data->air_limbah}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Stiker Pak</th>
                                <th scope="col">{{$data->stiker_pak}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">UPWK2 </th>
                                <th scope="col">{{$data->upwk2}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kriteria Rumah </th>
                                <th scope="col">{{$data->kriteria_rumah}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Act Kuk 1</th>
                                <th scope="col">{{$data->act_kukl}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Lahan Kerja</th>
                                <th scope="col">{{$data->lahan_kerja}}</th>
                              </tr>
                            </thead>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
