<?php

namespace App\Http\Controllers;

use App\Models\KK;
use App\Models\RT;
use App\Models\WARGA;
use App\Models\Anggota;
use App\Models\KELAHIRAN;
use App\Models\KEMATIAN;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KelurahanController extends Controller
{
    public function dashboard()
    {
        return view('Kelurahan.dashboard');
    }
    public function daftarRT()
    {
        $data = RT::all();
        return view('Kelurahan.daftarRT',compact('data'));
    }
    public function tambahRT()
    {
        return view('Kelurahan.TambahRT');
    }

    public function detailRT($id)
    {
        $data = RT::with('users')->where('id',$id)->first();
        return view('Kelurahan.detailRT',compact('data'));
    }

    public function storeRT(Request $request)
    {
        $insertUser = new User;
        $insertUser->name = $request->name;
        $insertUser->email = $request->email;
        $insertUser->password = Hash::make($request->password);
        $insertUser->roles = 'rt';
        $insertUser->save();


        $insertRT = new RT;
        $insertRT->provinsi = $request->provinsi;
        $insertRT->kecamatan = $request->kecamatan;
        $insertRT->kelurahan = $request->kelurahan;
        $insertRT->rt = $request->rt;
        $insertRT->rw = $request->rw;
        $insertRT->kabupaten = $request->kabupaten;
        $insertRT->alamat = $request->alamat;
        $insertRT->user_id = $insertUser->id;
        $insertRT->save();

        return  redirect()->route('daftar.rt');
    } 

    public function rekapData()
    {
        

        $getRw = DB::table('tbl_rt')->distinct('rw')->get();
        
        return view('Kelurahan.rekapData',compact('getRw'));
    }

    
}
