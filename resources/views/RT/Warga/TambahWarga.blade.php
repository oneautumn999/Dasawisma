@extends('include.layout')

@section('content')
<div class="card z-index-0">
    <div class="card-header text-center pt-4">
      <h5>Tambah Data Kepala Keluarga </h5>
    </div>
    <div class="card-body">
      <form role="form text-left" action="{{route('store.warga')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="mb-3">
                    <label>RW</label>
                  <select required name="rw" class="form-control">
                    <option value="">--Select--</option>
                     @foreach($getRw as $key )
                     <option value="{{$key->rw}}">{{$key->rw}}</option>
                     @endforeach
                  </select>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12 col-md-6">
            <div class="mb-3">
                <label>Status Dalam KK</label>
                <select required name="Status_kk" class="form-control">
                    <option value="">--Select--</option>
                    <option value="KepalaRumahTangga">KepalaRumahTangga</option>
                    <option value="Ibu">Ibu</option>
                    <option value="Anak">Anak</option>
                </select>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for=""> Nama Kepala Keluarga :</label>
                    <input type="text" class="form-control" name="nama_kepalakk" placeholder="NAMA Kepala Keluarga" aria-label="Password" aria-describedby="password-addon" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for=""></label>
                    <input type="number" class="form-control" name="noregis" placeholder="Nomor Registrasi" aria-label="Password" aria-describedby="password-addon" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="">No KTP</label>
                    <input type="number" class="form-control" name="noktp" placeholder="NoKTP" aria-label="Password" aria-describedby="password-addon" required>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12">
            <div class="mb-3">
            <label>Kader PKK/DASAWISMA</label>
            <select required name="kader" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
              </div>
        </div>
   
   
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select required name="jenis_kelamin" class="form-control">
                    <option value="">--Select--</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for=""> Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="TempatLahir" aria-label="Password" aria-describedby="password-addon" required>
                  </div>
            </div>
        </div>
        <div class="col-12 col-md-12">
            <div class="mb-3">
              <label>TanggalLahir</label>
              <input name="tanggal_lahir" type="date" class="form-control" placeholder="TanggalLahir" required>  </input>
            </div>
            <div class="mb-3">
            <label>Status Perkawinan</label>
                <select required name="status_perkawinan" class="form-control">
                    <option value="">--Select--</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Belum">Belum Menikah</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Agama</label>
                <select required name="agama" class="form-control">
                    <option value="">--Select--</option>
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghuchu">Konghuchu</option>
                </select>
            </div>
            <div class="mb-3">
              <input name="alamat" type="text" class="form-control" placeholder="ALAMAT" required>  </input>
            </div>
            <div class="mb-3">
            <label>Pendidikan</label>
                <select required name="pendidikan" class="form-control">
                    <option value="">--Select--</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="Sarjana">Sarjana</option>
                </select>
            </div>
            <div class="mb-3">
            <label>Pekerjaan</label>
                <select required name="pekerjaan" class="form-control">
                <option value="">--Select--</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="PNS">PNS</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Ikut Kegiatan Posyandu</label>
                <select required name="posyandu" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Ikut Program BKB</label>
                <select required name="program_bkb" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Memiliki Tabungan</label>
                <select required name="tabungan" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Mengikuti Kegiatan Paud</label>
                <select required name="paud" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Akseptor KB</label>
                <select required name="akseptor_kb" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Mengikuti Kelompok Belajar</label>
                <select required name="kelompok_bljr" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Koperasi</label>
                <select required name="koperasi" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Penyandang Disabilitas</label>
                <select required name="disabilitas" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Keluarga Harapan</label>
                <select required name="keluarga_harapn" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Asuransi</label>
                <select required name="asuransi" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
                <label>Jenis Asuransi</label>
                    <select required name="jenis_asuransi" class="form-control">
                    <option value="">--Select--</option>
                    <option value="BPJS">BPJS</option>
                    <option value="SWASTA">SWASTA</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Kegiatan Warga</label>
                    <select required name="kegiatan_warga" class="form-control">
                    <option value="">--Select--</option>
                    <option value="YA">YA</option>
                    <option value="TIDAK">TIDAK</option>
                </select>     
            </div>
        </div>
        <div class="form-check form-check-info text-left">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
          <label class="form-check-label" for="flexCheckDefault">
            I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
          </label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
@endsection
