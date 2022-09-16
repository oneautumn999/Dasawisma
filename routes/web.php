<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\RTController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthenticatedSessionController::class, 'create']);

Route::middleware('auth','kelurahan')->group(function () {
    Route::get('dashboard/kelurahan',[KelurahanController::class, 'dashboard'])
            ->name('dashboard.kelurahan');
    Route::get('/daftar/rt',[KelurahanController::class,'daftarRT'])->name('daftar.rt');
    Route::get('/tambah/data/rt',[KelurahanController::class,'tambahRT'])->name('tambah.rt');

    Route::get('/detail/data/rt/{id}',[KelurahanController::class,'detailRT'])->name('detail.rt');
    Route::post('/store/rt',[KelurahanController::class,'storeRT'])->name('store.rt');
    Route::get('/rekap/data',[KelurahanController::class,'rekapData'])->name('rekap.data');
});


Route::middleware('auth','rt')->group(function () {
    Route::get('dashboard/rt',[RTController::class, 'dashboard'])
            ->name('dashboard.rt');
    Route::get('/daftar/keluarga',[RTController::class, 'daftarKeluarga'])
            ->name('daftar.keluarga');
    Route::get('/tambah/data/keluarga',[RTController::class,'tambahKeluarga'])->name('tambah.keluarga');
    Route::post('/store/keluarga',[RTController::class,'storeKeluarga'])->name('store.keluarga');
    Route::get('/detail/data/keluarga/{id}',[RTController::class,'detailKeluarga'])->name('detail.keluarga');
    Route::delete('/delete/data/keluarga/{id}',[RTController::class,'deleteKeluarga'])->name('delete.keluarga');
    
    Route::get('/daftar/warga',[RTController::class, 'daftarWarga'])->name('daftar.warga');
    Route::get('/tambah/data/warga',[RTController::class,'tambahWarga'])->name('tambah.warga');
    Route::post('/store/warga',[RTController::class,'storeWarga'])->name('store.warga');


    // Anggota Warga
    Route::get('/anggota/warga/{id}',[RTController::class,'anggotaWarga'])->name('anggotaWarga');
    Route::get('/warga/create',[RTController::class,'tambahAnggotaWarga'])->name('tambahAnggotaWarga');
    Route::post('/store/anggotaWarga/create',[RTController::class,'simpanAnggotaWarga'])->name('simpanAnggotaWarga');
    Route::delete('destroy/anggotaWarga/{id}',[RTController::class,'deleteAnggotWarga'])->name('deleteAnggotaWarga');
    Route::get('/detail/anggotaWarga/{id}',[RTController::class,'detailAnggotaWarga'])->name('detailAnggotaWarga');
    Route::get('/detail/Warga/{id}',[RTController::class,'detailWarga'])->name('detailWarga');
   
   
    // Daftar Kelahiran
    Route::get('/daftar/kelahiran',[RTController::class, 'daftarKelahiran'])->name('daftar.kelahiran');
    Route::get('/tambah/kelahiran',[RTController::class, 'tambahKelahiran'])->name('tambah.kelahiran');
    Route::post('/store/kelahiran',[RTController::class, 'storeKelahiran'])->name('store.kelahiran');
    Route::get('/detail/kelahiran/{id}',[RTController::class,'detailKelahiran'])->name('detail.kelahiran');
    Route::get('/delete/kelahiran/{id}',[RTController::class,'deleteKelahiran'])->name('delete.kelahiran');

    // Daftar Kematian
    Route::get('/daftar/kematian',[RTController::class, 'daftarkematian'])->name('daftar.kematian');
    Route::get('/tambah/kematian',[RTController::class, 'tambahkematian'])->name('tambah.kematian');
    Route::post('/store/kematian',[RTController::class, 'storekematian'])->name('store.kematian');
    Route::get('/detail/kematian/{id}',[RTController::class,'detailkematian'])->name('detail.kematian');
    Route::delete('/delete/kematian/{id}',[RTController::class,'deleteKematian'])->name('delete.kematian');

});


require __DIR__.'/auth.php';
