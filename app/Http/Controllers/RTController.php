<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\KELAHIRAN;
use App\Models\KEMATIAN;
use Illuminate\Http\Request;
use App\Models\KK;
use App\Models\RT;
use App\Models\WARGA;
use COM;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RTController extends Controller
{
    public function dashboard()
    {
        $totalKeluarga = KK::count();
        $totalWarga = WARGA::count();
        $totalKelahiran = DB::table('kelahiran')->count();
        $totalKematian = DB::table('kematian')->count();
        $data = KK::with('rt')->get();
        return view('RT.dashboard',compact('totalKeluarga','totalKematian','totalWarga','totalKelahiran','data'));
    }

    public function daftarKeluarga()
    {
        $rt= RT::where('user_id', AUTH::user()->id)->first();
        $getUserID =  $rt->id;
        $data = KK::with('rt')->where('user_id',$getUserID)->get();
        return view('RT.Keluarga.daftarKeluarga',compact('data'));
    }
    public function tambahKeluarga()
    {
        $dataKepalaKeluarga = WARGA::where('Status_kk','KepalaRumahTangga')->select('id','nama_kepalakk')->get();
        $getRw = DB::table('tbl_rt')->distinct('rw')->get();
        return view('RT.Keluarga.TambahKeluarga',compact('dataKepalaKeluarga','getRw'));
    }

    public function detailKeluarga($id)
    {
        // $data = KK::where('id',$id)->first();
        $data = KK::with('rt')->where('id',$id)->first();
        $getAlamat = RT::where('user_id',$data->user_id)->first();
        return view('RT.Keluarga.detailKeluarga',compact('data','getAlamat'));
    }

    public function storeKeluarga(Request $request)
    {
        // $data = RT::where('id',Auth::user()->id)->first();
        $insertKK = new KK;
        $insertKK->jumlah_kk = $request->jumlah_kk;
        $insertKK->jumlah_pus = $request->jumlah_pus;
        $insertKK->jumlah_wus = $request->jumlah_wus;
        $insertKK->jumlah_buta = $request->jumlah_buta;
        $insertKK->jumlah_ibuhamil = $request->jumlah_ibuhamil;
        $insertKK->jumlah_menyusui = $request->jumlah_menyusui;
        $insertKK->jumlah_lansia = $request->jumlah_lansia;
        $insertKK->jumlah_kebutuhanusus = $request->jumlah_kebutuhanusus;
        $insertKK->jumlah_stunting = $request->jumlah_stunting;
        $insertKK->makanan_pokok = $request->makanan_pokok;
        $insertKK->jamban_klrg = $request->jamban_klrg;
        $insertKK->sumber_air = $request->sumber_air;
        $insertKK->tempat_sampah = $request->tempat_sampah;
        $insertKK->air_limbah = $request->air_limbah;
        $insertKK->stiker_pak = $request->stiker_pak;
        $insertKK->upwk2 = $request->upwk2;
        $insertKK->kriteria_rumah = $request->kriteria_rumah;
        $insertKK->act_kukl = $request->act_kukl;
        $insertKK->lahan_kerja = $request->lahan_kerja;
        $insertKK->rw = $request->rw;
        $insertKK->user_id = $request->user_id;

        $insertKK->save();

        return  redirect()->route('daftar.keluarga');
    }

    public function deleteKeluarga($id)
    {
        KK::where('id',$id)->delete();
        return back();
    }
    
    public function daftarWarga()
    {
        $rt= RT::where('user_id', AUTH::user()->id)->first();
        $getUserID =  $rt->id;
        $data = WARGA::with('rt')->where('Status_kk','KepalaRumahTangga')->where('user_id',$getUserID)->get();
        return view('RT.Warga.daftarWarga',compact('data'));
    }

    public function tambahWarga()
    {
        $getRw = DB::table('tbl_rt')->distinct('rw')->get();
        return view('RT.Warga.TambahWarga',compact('getRw'));
    }
    public function detailWarga($id)
    {
        $data = WARGA::with('rt')->where('Status_kk','KepalaRumahTangga')->where('id',$id)->first();
       
        return view('RT.Warga.detailWarga',compact('data'));
    }

    public function storeWarga(Request $request)
    {
        $getRT = RT::where('user_id',Auth::user()->id)->first();
        // dd($getRT);
        
        // dd($request);
        $insertWARGA = new WARGA;
        $insertWARGA->Status_kk = $request->Status_kk;
        $insertWARGA->nama_kepalakk = $request->nama_kepalakk;
        $insertWARGA->noregis = $request->noregis;
        $insertWARGA->noktp = $request->noktp;
        $insertWARGA->kader = $request->kader;
        $insertWARGA->jenis_kelamin = $request->jenis_kelamin;
        $insertWARGA->tempat_lahir = $request->tempat_lahir;
        $insertWARGA->tanggal_lahir = $request->tanggal_lahir;
        $insertWARGA->status_perkawinan = $request->status_perkawinan;
        $insertWARGA->agama = $request->agama;
        $insertWARGA->alamat = $request->alamat;
        $insertWARGA->pendidikan = $request->pendidikan;
        $insertWARGA->pekerjaan = $request->pekerjaan;
        $insertWARGA->posyandu = $request->posyandu;
        $insertWARGA->program_bkb = $request->program_bkb;
        $insertWARGA->tabungan = $request->tabungan;
        $insertWARGA->paud = $request->paud;
        $insertWARGA->akseptor_kb = $request->akseptor_kb;
        $insertWARGA->kelompok_bljr = $request->kelompok_bljr;
        $insertWARGA->koperasi = $request->koperasi;
        $insertWARGA->disabilitas = $request->disabilitas;
        $insertWARGA->asuransi = $request->asuransi;
        $insertWARGA->jenis_asuransi = $request->jenis_asuransi;
        $insertWARGA->kegiatan_warga = $request->kegiatan_warga;
        $insertWARGA->keluarga_harapn = $request->keluarga_harapn;
        $insertWARGA->keluarga_harapn = $request->keluarga_harapn;
        $insertWARGA->rw = $request->rw;
        $insertWARGA->user_id = $getRT->id;
        $insertWARGA->provinsi = $getRT->provinsi;
        $insertWARGA->kabupaten = $getRT->kabupaten;
        $insertWARGA->kecamatan = $getRT->kecamatan;
        $insertWARGA->kelurahan = $getRT->kelurahan;
        $insertWARGA->rt = $getRT->rt;
        $insertWARGA->save();

        return  redirect()->route('daftar.warga');
    }
    
    public function anggotaKeluarga()
    {
        $data = ANGGOTA::with('rt')->get();
        return view('RT.Warga.Anggota.daftarAnggota',compact('data'));
    }

    public function daftarKelahiran()
    {
        $rt= RT::where('user_id', AUTH::user()->id)->first();
        $getUserID =  $rt->id;
        $data = KELAHIRAN::get()->where('user_id',$getUserID);
        return view('RT.Kelahiran.daftarKelahiran',compact('data'));
    }
    public function tambahKelahiran()
    {
        $getNama = WARGA::all();
        $getRw = DB::table('tbl_rt')->distinct('rw')->get();
        
        return view('RT.Kelahiran.TambahKelahiran',compact('getNama','getRw'));
    }

    public function storeKelahiran(Request $request)
    {
        $insertKELAHIRAN = new KELAHIRAN;
        $insertKELAHIRAN->nama_ibu = $request->nama_ibu;
        $insertKELAHIRAN->status = $request->status;
        $insertKELAHIRAN->nama_bayi = $request->nama_bayi;
        $insertKELAHIRAN->jenis_kelamin = $request->jenis_kelamin;
        $insertKELAHIRAN->tanggal_lahir = $request->tanggal_lahir;
        $insertKELAHIRAN->akte = $request->akte;
        $insertKELAHIRAN->user_id = $request->user_id;
        $insertKELAHIRAN->rw = $request->rw;
        $insertKELAHIRAN->save();

        return  redirect()->route('daftar.kelahiran');
    }

    public function detailKelahiran($id)
    {
        $getKelahiran = KELAHIRAN::where('id',$id)->first();
        $getUserID =  $getKelahiran->user_id;
        $getAlamat = RT::where('id',$getUserID)->first();
        return view('RT.Kelahiran.detailKelahiran',compact('getKelahiran','getAlamat'));
    }

    public function deleteKelahiran(Request $request,$id)
    {
       KELAHIRAN::where('id',$id)->delete();
       return back();
    }

    // Detail Anggota Warga 

    public function anggotaWarga($id)
    {
        // $rt= U::where('user_id', AUTH::user()->id)->first();
        // $getUserID =  $rt->id;
        $data = DB::table('anggota')->where('warga_id',AUTH::user()->id)->get();
       
        $getKepalaKeluarga = WARGA::where('id',$id)->first();
        return view('RT.Warga.anggotaKeluarga',compact('data','getKepalaKeluarga'));
    }

    public function tambahAnggotaWarga()
    {
        $getRw = DB::table('tbl_rt')->distinct('rw')->get();

        return view('RT.Warga.TambahAnggotaWarga',compact('getRw'));
    }

    public function simpanAnggotaWarga(Request $request)
    {
        // dd($request);
        $getRT = RT::where('user_id',Auth::user()->id)->first();

        $data = $request->all();
        $data['provinsi'] = $getRT->provinsi;
        $data['kabupaten'] = $getRT->kabupaten;
        $data['kecamatan'] = $getRT->kecamatan;
        $data['kelurahan'] = $getRT->kelurahan;
        $data['rt'] = $getRT->rt;
        $data['warga_id'] = Auth::user()->id;
        Anggota::create($data);
        return  redirect()->route('daftar.warga');
    }

    // Delete Anggota Warga
    public function deleteAnggotWarga(Request $request,$id)
    {
        DB::table('anggota')->where('id',$id)->delete();
        return back();
    }

    //Detail Anggota Warga
    public function detailAnggotaWarga($id)
    {
        $data = DB::table('anggota')->where('id',$id)->first();
        return view('RT.Warga.detailAnggotaWarga',compact('data'));
    }

    // Fitur Kematian
    public function daftarKematian()
    {
        $rt= RT::where('user_id', AUTH::user()->id)->first();
        $getUserID =  $rt->id;

        $data = KEMATIAN::all()->where('user_id',$getUserID);        ;
        return view('RT.Kematian.index',compact('data'));
    }

    public function tambahKematian()
    {
        $getRw = DB::table('tbl_rt')->distinct('rw')->get();
        return view('RT.Kematian.tambah',compact('getRw'));
    }

    public function storekematian(Request $request)
    {
        $data = $request->all();
        KEMATIAN::create($data);
        return back();
    }

    public function deleteKematian(Request $request,$id)
    {
        KEMATIAN::where('id',$id)->delete();
        return back();
    }
}