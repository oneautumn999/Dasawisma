@extends('include.layout')


@section('content')
    <div class="row my-4">
        <div class="col-lg-6 col-md-12">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Detail Data {{$data->users->name}}</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-down text-success" aria-hidden="true"></i>
                        Berikut ini Detail Data Yang Lebih Lengkap 
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-email-83 text-success text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Email</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$data->users->email}}</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-key-25 text-danger text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Password</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$data->users->password}}</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-square-pin text-info text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0"> Provinsi </h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$data->provinsi}}</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-pin-3 text-warning text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0"> Kabupaten </h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$data->kabupaten}}</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-spaceship text-primary text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0"> Kecamatan </h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$data->kecamatan}}</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-world text-primary text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0"> Kelurahan </h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$data->kelurahan}}</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-building text-primary text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0"> Alamat </h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$data->alamat}}</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-bell-55 text-primary text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0"> RT </h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$data->rt}}</p>
                            </div>
                        </div>
                        <div class="timeline-block">
                            <span class="timeline-step">
                                <i class="ni ni-planet text-primary text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0"> RW </h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$data->rt}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
