@extends('include.layout')


@section('content')
    <div class="row my-4">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Data RT</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">Daftar Data Ketua Rukun Tetangga
                            </p>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a href="{{route('tambah.rt')}}" class="btn btn-primary"> Tambah Data </a>
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
                                        Nama Pengguna</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Kecamatan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        RT</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        RW</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kabupaten</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        @php
                                            $getUsers = App\Models\User::where('id',$item->user_id)->first();
                                        @endphp
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm">&nbsp;&nbsp;&nbsp;{{$getUsers->name}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->kelurahan}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->rt}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->rw}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2 text-center">
                                                <h6 class="mb-0 text-sm">{{$item->kecamatan}}</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                                <div class="text-center">
                                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                        <a href="{{route('detail.rt',$item->id)}}">
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
