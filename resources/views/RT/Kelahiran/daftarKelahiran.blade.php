@extends('include.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <p class="text-sm mb-0">
                            <h6>  <i class="fa fa-check text-info" aria-hidden="true"></i>    Daftar Data Kelahiran</h6>
                                <span class="font-weight-bold ms-1">
                            </p>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a href="{{route('tambah.kelahiran')}}" class="btn btn-primary"> Tambah Data Kelahiran </a>
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
                                        Nama KK</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Ibu</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Bayi</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Kelamin</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Lahir</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Akte</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $item)
                                    <tr>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                @php
                                                    $getName = App\Models\WARGA::where('id',$item->user_id)->first();
                                                @endphp
                                                <h6 class="mb-0 text-sm">&nbsp;&nbsp;&nbsp;{{$getName->nama_kepalakk}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    {{-- <img src="../assets/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm me-3" alt="xd"> --}}
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm ">{{$item->nama_ibu}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->status}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2 text-center">
                                                <h6 class="mb-0 text-sm">{{$item->nama_bayi}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2 text-center">
                                                <h6 class="mb-0 text-sm">{{$item->jenis_kelamin}}</h6>
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="avatar-group mt-2 text-center">
                                                <h6 class="mb-0 text-sm">{{$item->tanggal_lahir}}</h6>
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="avatar-group mt-2 text-center">
                                                <h6 class="mb-0 text-sm">{{$item->akte}}</h6>
                                            </div>
                                        </td> 
                                        <form action="{{ route('delete.kelahiran',$item->id)}}">
                                            <td class="align-middle d-flex">
                                                    <div class="text-center">
                                                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                            <a href="{{route('detail.kelahiran',$item->id)}}">
                                                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true">  </i>
                                                            </a>  
                                                        </div>
                                                    </div>
                                                    &nbsp;
                                                    <div class="text-center">
                                                        <div class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                                                            <button type="submit" style="background-color: Transparent;border:none">
                                                                <i class="ni ni-fat-remove text-lg opacity-10" aria-hidden="true">  </i>
                                                            </button>              
                                                        </div>
                                                    </div>
                                            </td>
                                        </form>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center"> <h6> Tidak ada data   </h6></td>
                                    </tr>
                                
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
