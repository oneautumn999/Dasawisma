@extends('include.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6><i class="fa fa-check text-info" aria-hidden="true"></i> Data Warga TP PKK</h6>
                         
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a href="{{route('tambah.warga')}}" class="btn btn-primary"> Tambah Data Kepala Keluarga </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        NOMOR KTP / NIK</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama Kepala Keluarga</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kelurahan</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Tambah Anggota  </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Detail
                                    </th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">&nbsp;&nbsp;{{$item->noktp}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->nama_kepalakk}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 ">
                                                <h6 class="mb-0 text-sm">{{$item->kelurahan}}</h6>
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="mt-2 ">
                                                <a href="{{ route('anggotaWarga',$item->id)}}" class="btn btn-info"> Tambah Anggota Keluarga</a>
                                            </div>
                                        </td> 
                                        <td class="align-middle">
                                                <div class="">
                                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                        <a href="{{route('detailWarga',$item->id)}}">
                                                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true">  </i>
                                                        </a>  
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
