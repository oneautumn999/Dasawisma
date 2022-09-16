@extends('include.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6><i class="fa fa-check text-info" aria-hidden="true"></i> Data Kematian </h6>
                         
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a href="{{route('tambah.kematian')}}" class="btn btn-primary"> Tambah Data Kematian</a>
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
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama KK </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama  </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Orang Tua </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Kelamin</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sebab</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $item)
                                    <tr class="text-center">
                                        <td>
                                            <div class="avatar-group mt-2">
                                                @php
                                                    $getName = App\Models\WARGA::where('id',$item->user_id)->first();
                                                @endphp
                                                <h6 class="mb-0 text-sm">{{$getName->nama_kepalakk}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                @php
                                                    $getName = App\Models\WARGA::where('id',$item->user_id)->first();
                                                @endphp
                                                <h6 class="mb-0 text-sm">{{$item->nama}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->nama_ibu}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->jenis_kelamin}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->sebab}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->ket}}</h6>
                                            </div>
                                        </td>
                                        <form action="{{ route('delete.kematian',$item->id)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                        <td class="align-middle d-flex">
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
                                        <td colspan="6" class="text-center"> <h6> Tidak ada Data</h6>  </td>
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
