@extends('include.layout')


@section('content')
<div class="card z-index-0">
    <div class="card-header text-center pt-4">
      <h5>Tambah Data Keluarga </h5>
    </div>
    <div class="card-body">
      <form role="form text-left" action="{{route('store.keluarga')}}" method="post">
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
          <div class="mb-3">
            <label>Nama Kepala KK</label>
                <select required class="form-control" name="user_id">
                <option>--Select--</option>
                @foreach($dataKepalaKeluarga as $key)
                 <option value="{{$key->id}}">{{$key->nama_kepalakk}}</option>
                @endforeach
             
            </select>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <input type="number" class="form-control" name="jumlah_kk" placeholder="Jumlah KK" aria-label="Password" aria-describedby="password-addon" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <input type="number" class="form-control" name="jumlah_pus" placeholder="Jumlah PUS" aria-label="Password" aria-describedby="password-addon" required>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <input type="number" class="form-control" name="jumlah_wus" placeholder="Jumlah WUS" aria-label="Password" aria-describedby="password-addon" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <input type="number" class="form-control" name="jumlah_buta" placeholder="Jumlah Buta" aria-label="Password" aria-describedby="password-addon" required>
                  </div>
            </div>
        </div>
        <div class="col-12 col-md-12">
            <div class="mb-3">
              <input name="jumlah_ibuhamil" type="number" class="form-control" placeholder="Jumlah Ibu Hamil" required>  </input>
            </div>
            <div class="mb-3">
              <input name="jumlah_menyusui" type="number" class="form-control" placeholder="Jumlah Menyusui" required>  </input>
            </div>
            <div class="mb-3">
              <input name="jumlah_lansia" type="number" class="form-control" placeholder="Jumlah Lansia" required>  </input>
            </div>
            <div class="mb-3">
              <input name="jumlah_kebutuhanusus" type="number" class="form-control" placeholder="Jumlah Kebutuhan Khusus" required>  </input>
            </div>
            <div class="mb-3">
              <input name="jumlah_stunting" type="number" class="form-control" placeholder="Jumlah Stunting" required>  </input>
            </div>
            <div class="mb-3">
            <label>MakananPokok</label>
                <select required name="makanan_pokok" class="form-control">
                <option value="">--Select--</option>
                <option value="Beras">Beras</option>
                <option value="NonBeras">NonBeras</option>
                <option value="YangLain">YangLain</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Mempunyai Jamban_Keluarga</label>
                <select required name="jamban_klrg" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Sumber_Air Keluarga</label>
                <select required name="sumber_air" class="form-control">
                <option value="">--Select--</option>
                <option value="PDAM">PDAM</option>
                <option value="SUMUR">SUMUR</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Memiliki Tempat_sampah</label>
                <select required name="tempat_sampah" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Mempunyai Saluran Air_limbah</label>
                <select required name="air_limbah" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Menempel Stiker_PAK</label>
                <select required name="stiker_pak" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Aktifitas UP2K</label>
                <select required name="upwk2" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Kriteria_rumah</label>
                <select required name="kriteria_rumah" class="form-control">
                <option value="">--Select--</option>
                <option value="SEHAT">SEHAT</option>
                <option value="TIDAKSEHAT">TIDAKSEHAT</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Aktifitas Dalam KUKL</label>
                <select required name="act_kukl" class="form-control">
                <option value="">--Select--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            </div>
            <div class="mb-3">
            <label>Pemanfaatan Lahan_Kerja</label>
                <select required name="lahan_kerja" class="form-control">
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
