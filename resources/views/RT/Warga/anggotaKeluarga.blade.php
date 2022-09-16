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
                            <a href="{{ route('tambahAnggotaWarga')}}" class="btn btn-info"> Tambah Anggota Warga</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr class="text-center"">
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Kepala Keluarga</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Anggota</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kecamatan</th>
                                    <th
                                        class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Status KK </th>
                                    <th
                                        class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Detail
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                    <tr class="text-center">
                                            <td>
                                                <div class="mt-2">
                                                    <h6 class="mb-0 text-sm">{{$getKepalaKeluarga->nama_kepalakk}}</h6>
                                                </div>
                                            </td>
                                        <td>
                                            <div class="mt-2">
                                                <h6 class="mb-0 text-sm">{{$item->nama_anggota}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 ">
                                                <h6 class="mb-0 text-sm">{{$item->kecamatan}}</h6>
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="mt-2 ">
                                                <h6 class="mb-0 text-sm">{{$item->Status_kk}}</h6>
                                            </div>
                                        </td> 
                                        <td class="align-middle">
                                                <div class="">
                                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                        <a href="{{route('detailAnggotaWarga',$item->id)}}">
                                                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true">  </i>
                                                        </a>  
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="align-middle">
                                                <div class="">
                                                      <form action="{{ route('deleteAnggotaWarga',$item->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('delete')
                                                            <button type="submit" class="btn btn-danger"> Delete </button>
                                                      </form>
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
