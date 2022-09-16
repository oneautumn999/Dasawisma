@extends('include.layout')


@section('content')
    <div class="row my-4">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Rekapitulasi Data</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama RW</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Jumlah Dasawisma</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Jumlah Kepala Rumah Tangga</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        JenisKelamin Laki</th> 
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        JenisKelamin Perempuan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Balita Laki</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Balita Perempuan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Wus</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Pus</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ibu Hamil</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ibu Menyusui</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Lansia</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Buta</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Berkebutahan Khusus</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sehat</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tidak Sehat</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Memiliki Tmpt Sampah</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Memiliki SPAL</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Memiliki Jamban</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Menempel Stiker</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        PDAM</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sumur</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Dll</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Beras </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Non Beras</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        UP2K</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanah Perkarangan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Keterangan</th>
                                </tr>
                            </thead>
                           <tbody>
                            @foreach ($getRw as $key)
                            @php 
                            $dataKepala = App\Models\Warga::where('Status_kk','KepalaRumahTangga')->where('rw',$key->rw)->count();
                            $dataDasa = DB::table('tbl_rt')->where('rw',$key->rw)->count();
                            $dataKelamin = App\Models\Warga::where('jenis_kelamin','Laki-laki')->where('rw',$key->rw)->count();
                            $dataKelamin2 = App\Models\Warga::where('jenis_kelamin','Perempuan')->where('rw',$key->rw)->count();
                            $dataBalita = App\Models\Kelahiran::where('jenis_kelamin','Laki-laki')->where('rw',$key->rw)->count();
                            $dataBalita2 = App\Models\Kelahiran::where('jenis_kelamin','Perempuan')->where('rw',$key->rw)->count();
                            $dataPus = DB::table('keluarga')->where('rw',$key->rw)->count('jumlah_pus');
                            $dataWus = DB::table('keluarga')->where('rw',$key->rw)->count('jumlah_wus');
                            $dataIbuhamil = DB::table('kelahiran')->where('rw',$key->rw)->count();
                            $dataIbuSusu = DB::table('keluarga')->where('rw',$key->rw)->max('jumlah_menyusui');
                            $dataLansia = DB::table('keluarga')->where('rw',$key->rw)->count('jumlah_lansia');
                            $dataButa = DB::table('keluarga')->where('rw',$key->rw)->count('jumlah_buta');
                            $dataKebutuhan = DB::table('keluarga')->where('rw',$key->rw)->count('jumlah_kebutuhanusus');
                            $datarumah = DB::table('keluarga')->where('kriteria_rumah','TidakSehat')->where('rw',$key->rw)->count();
                            $datarumah2 = DB::table('keluarga')->where('kriteria_rumah','Sehat')->where('rw',$key->rw)->count();
                            $dataSampah = DB::table('keluarga')->where('tempat_sampah', 'YA')->where('rw',$key->rw)->count();
                            $dataLimbah = DB::table('keluarga')->where('air_limbah', 'YA')->where('rw',$key->rw)->count();
                            $dataJamban = DB::table('keluarga')->where('jamban_klrg', 'YA')->where('rw',$key->rw)->count();
                            $dataStiker = Db::table('keluarga')->where('stiker_pak', 'YA')->where('rw',$key->rw)->count();
                            $dataJenis1 = DB::table('keluarga')->where('sumber_air','PDAM')->where('rw',$key->rw)->count();
                            $dataJenis2 = DB::table('keluarga')->where('sumber_air','SUMUR')->where('rw',$key->rw)->count();
                            $dataJenis3 = DB::table('keluarga')->where('sumber_air','Dll')->where('rw',$key->rw)->count();
                            $dataMakan = DB::table('keluarga')->where('makanan_pokok','Beras')->where('rw',$key->rw)->count();
                            $dataMakan2 = DB::table('keluarga')->where('makanan_pokok','NonBeras')->where('rw',$key->rw)->count();
                            $dataUp2k = DB::table('keluarga')->where('upwk2','YA')->where('rw',$key->rw)->count();
                            $dataKarang = DB::table('keluarga')->where('lahan_kerja', 'YA')->where('rw',$key->rw)->count();
                            @endphp
                            <tr> 
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    RW {{$key->rw}} 
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataDasa}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataKepala}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataKelamin}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataKelamin2}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataBalita}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataBalita2}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataPus}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataWus}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataIbuhamil}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataIbuSusu}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataLansia}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataButa}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataKebutuhan}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$datarumah}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$datarumah2}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataSampah}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataLimbah}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataJamban}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataStiker}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataJenis1}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataJenis2}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataJenis3}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataMakan}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataMakan2}}
                                </td>
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataUp2k}}
                                </td> 
                                <td class="text-center font-wight-bolder opaciyt-7">
                                    {{$dataKarang}}
                                </td> 
                                <td class="text-center font-wight-bolder opaciyt-7">
                            
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