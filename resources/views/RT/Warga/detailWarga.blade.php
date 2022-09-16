@extends('include.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6><i class="fa fa-check text-info" aria-hidden="true"></i>Detail Warga TP PKK</h6>
                         
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
                              <tr class="text-left">
                                <th scope="col">Provinsi</th>
                                <th scope="col">{{$data->provinsi}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kabupaten</th>
                                <th scope="col">{{$data->kabupaten}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kecamatan</th>
                                <th scope="col">{{$data->kecamatan}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kelurahan</th>
                                <th scope="col">{{$data->kelurahan}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Status KK</th>
                                <th scope="col">{{$data->Status_kk}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Nama Anggota</th>
                                <th scope="col">{{$data->nama_anggota}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">No Regis</th>
                                <th scope="col">{{$data->noregis}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">No Ktp</th>
                                <th scope="col">{{$data->noktp}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kader</th>
                                <th scope="col">{{$data->kader}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">{{$data->jenis_kelamin}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">{{$data->tempat_lahir}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Status Perkawinan</th>
                                <th scope="col">{{$data->status_perkawinan}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Agama</th>
                                <th scope="col">{{$data->agama}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Alamat</th>
                                <th scope="col">{{$data->alamat}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Pendidikan</th>
                                <th scope="col">{{$data->pendidikan}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">{{$data->pekerjaan}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Posyandu</th>
                                <th scope="col">{{$data->posyandu}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Program BKB</th>
                                <th scope="col">{{$data->program_bkb}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Tabungan</th>
                                <th scope="col">{{$data->tabungan}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Paud</th>
                                <th scope="col">{{$data->paud}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Akseptor KB</th>
                                <th scope="col">{{$data->akseptor_kb}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kelompok Belajar</th>
                                <th scope="col">{{$data->kelompok_bljr}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kopeerasi</th>
                                <th scope="col">{{$data->koperasi}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Disabilitas</th>
                                <th scope="col">{{$data->disabilitas}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Asuransi</th>
                                <th scope="col">{{$data->asuransi}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Jenis Asuransi</th>
                                <th scope="col">{{$data->jenis_asuransi}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Kegiatan Warga</th>
                                <th scope="col">{{$data->kegiatan_warga}}</th>
                              </tr>
                              <tr class="text-left">
                                <th scope="col">Keluarga Harapan</th>
                                <th scope="col">{{$data->keluarga_harapn}}</th>
                              </tr>
                            </thead>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
