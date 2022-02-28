<?php

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
use App\berita;
use App\perangkat;
use App\profil;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $berita = berita::all()->take(3);
    $profil = profil::all();
    $perangkat = perangkat::all();
    // dd($profil);
    return view('index', compact('berita', 'profil', 'perangkat'));
});

Route::get('/sejarah', 'HomeController@sejarah')->name('sejarah');
Route::get('/geografis', 'HomeController@geografis')->name('geografis');
Route::get('/berita/{id}', 'HomeController@berita')->name('berita');
Auth::routes();

// Route::group(['middleware' => 'web'], function () {

//     Route::auth();
// });

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/home', function () {
        if (Auth::user()->admin == 0) {
            return view('useradmin');
        } else {
            return view('usersekdes');
        }
    });


    //berita
    route::get('berita', 'BeritaController@index')->name('berita');
    route::get('tambahBerita', 'BeritaController@create');
    route::post('beritaSimpan', 'BeritaController@simpan');
    route::get('hapusBerita/{id}', 'BeritaController@destroy');

    //perangkat
    route::get('perangkat', 'PerangkatController@index')->name('perangkat');
    route::get('tambahPerangkat', 'PerangkatController@create');
    route::post('perangkatSimpan', 'PerangkatController@simpan');
    route::get('hapusPerangkat/{id}', 'PerangkatController@destroy');
    //Profil

    Route::get('profil', 'ProfilController@index');
    Route::get('profil/tambah', 'ProfilController@tambah');
    Route::post('profil/simpan', 'ProfilController@simpan');
    Route::get('profil/edit/{id}', 'ProfilController@edit');
    Route::put('profil/update/{id}', 'ProfilController@update');
    Route::get('profil/hapus/{id}', 'ProfilController@hapus');
    Route::get('profil/cetak/{id}', 'ProfilController@cetak');

    // Pengajuan Admin
    Route::get('/pengajuanAdmin', 'PengajuanController@pengajuan')->name('pengajuanAdmin');


    //Penduduk

    Route::get('penduduk', 'PendudukController@index');
    Route::get('tambah', 'PendudukController@tambah');
    Route::post('simpan/{id}', 'PendudukController@simpan')->name('pendudukSimpan');
    Route::get('edit/{id}', 'PendudukController@edit');
    Route::put('update/{id}', 'PendudukController@update');
    Route::delete('hapusKK/{id}', 'KkController@destroy');


    //KartuKeluarga

    Route::get('kk', 'KkController@index');
    Route::get('tambahKK', 'KkController@create');
    Route::post('kk/simpan', 'KkController@simpan');
    Route::get('tambahAnggota/{id}', 'KkController@tambahAnggota');
    Route::get('anggotaKeluarga/{id}', 'KkController@anggotaKeluarga')->name('anggotaKeluarga');

    //Surat Keterangan Biasa

    Route::get('suketb', 'SuketbiasaController@index')->name('skb');
    Route::get('suketb/tambah', 'SuketbiasaController@tambah');
    Route::post('suketb/simpan', 'SuketbiasaController@simpan');
    Route::get('suketb/edit/{id}', 'SuketbiasaController@edit');
    Route::put('suketb/update/{id}', 'SuketbiasaController@update');
    Route::get('suketb/hapus/{id}', 'SuketbiasaController@hapus');
    Route::get('suketb/cetak/{id}', 'SuketbiasaController@cetak');

    //Surat Keterangan Tidak Mampu

    Route::get('sktm', 'SktmController@index')->name('sktm');
    Route::get('sktm/tambah', 'SktmController@tambah');
    Route::post('sktm/simpan', 'SktmController@simpan');
    Route::get('sktm/edit/{id}', 'SktmController@edit');
    Route::put('sktm/update/{id}', 'SktmController@update');
    Route::get('sktm/hapus/{id}', 'SktmController@hapus');
    Route::delete('hapusSKTM/{id}', 'SktmController@hapus');
    Route::get('sktm/cetak/{id}', 'SktmController@cetak');

    //Surat Keterangan Tidak Mampu

    Route::get('sku', 'SkuController@index')->name('sku');
    Route::get('sku/tambah', 'SkuController@tambah');
    Route::post('sku/simpan', 'SkuController@simpan');
    Route::get('sku/edit/{id}', 'SkuController@edit');
    Route::put('sku/update/{id}', 'SkuController@update');
    Route::get('sku/hapus/{id}', 'SkuController@hapus');
    Route::get('sku/cetak/{id}', 'SkuController@cetak');


    Route::get('suratKematian', 'SuratKematianController@index')->name('suratKematian');
    Route::get('kematian/tambah', 'SuratKematianController@create');
    Route::post('kematian/simpan', 'SuratKematianController@simpan');
    Route::get('kematian/cetak/{id}', 'SuratKematianController@cetak');
    Route::delete('kematian/hapus/{id}', 'SuratKematianController@destroy');

    //#LAPORAN
    //Penduduk
    Route::get('lpenduduk', 'lpendudukController@index');
    //Surat
    Route::get('lsurat', 'lsuratController@index');


    //Sekdes Penduduk
    Route::get('sdpenduduk', 'SdpendudukController@index');
    Route::get('sd/edit/{id}', 'SdpendudukController@edit');

    //Sekdes KK
    Route::get('sdkk', 'SdkkController@index');

    //Sekdes SKB
    Route::get('sdskb', 'SdskbController@index');
    Route::get('sdskb/edit/{id}', 'SdskbController@edit');
    Route::put('sdskb/update/{id}', 'SdskbController@update');

    //Sekdes SKTM
    Route::get('sdsktm', 'SdsktmController@index');
    Route::get('sdsktm/edit/{id}', 'SdsktmController@edit');
    Route::put('sdsktm/update/{id}', 'SdsktmController@update');

    //Sekdes SKU
    Route::get('sdsku', 'SdskuController@index');
    Route::get('sdsku/edit/{id}', 'SdskuController@edit');
    Route::put('sdsku/update/{id}', 'SdskuController@update');

    /* Penduduk */

    Route::get('cariPenduduk', 'PendudukController@cariPenduduk');
    Route::get('dataDiri', 'PendudukController@dataDiri');
    Route::get('kartuKeluarga', 'PendudukController@kartuKeluarga')->name('kartuKeluarga');
    Route::get('suratPendudukBaru', 'PengajuanController@suratPendudukBaru')->name('suratPendudukBaru');
    Route::get('suratPendudukSelesai', 'PengajuanController@suratPendudukSelesai')->name('suratPendudukSelesai');
    Route::get('tambahPengajuan/{id}', 'PengajuanController@tambahPengajuan')->name('tambahPengajuan');
    Route::post('pengajuanSimpan/{id}', 'PengajuanController@pengajuanSimpan')->name('pengajuanSimpan');
    Route::get('lihatPengajuan/{id}', 'PengajuanController@lihatPengajuan')->name('lihatPengajuan');
    Route::post('terimaPengajuan/{id}', 'PengajuanController@terimaPengajuan')->name('terimaPengajuan');
    Route::get('tolakPengajuan/{id}', 'PengajuanController@tolakPengajuan')->name('tolakPengajuan');
    Route::delete('hapusPengajuan/{id}', 'PengajuanController@hapusPengajuan')->name('hapusPengajuan');
});





//<!--
//|--------------------------------------------------------------------------
//| @copyrigt BanDotz
//|--------------------------------------------------------------------------
//| app.view
//|--------------------------------------------------------------------------
//|
//-->