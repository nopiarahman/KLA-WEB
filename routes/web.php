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
Route::get('/', function () {	
    $berita=berita::all()->take(3);
    // dd($berita);
    return view('index',compact('berita'));


});

Auth::routes();

Route::group(['middleware' => 'web'],function (){

    Route::auth();
});

Route::group(['middleware' => ['web','auth']], function()
{
    Route::get('/home', 'HomeController@index');
    Route::get('/home',function(){
        if (Auth::user()->admin == 0) {
            return view('useradmin');
        } else {
            return view('usersekdes');
        }
    });


    //berita
    route::get('berita','BeritaController@index')->name('berita');
    route::get('tambahBerita','BeritaController@create');
    route::post('beritaSimpan','BeritaController@simpan');
    route::get('hapusBerita/{id}','BeritaController@destroy');
    //Profil

    Route::get('profil','ProfilController@index');
    Route::get('profil/tambah','ProfilController@tambah');  
    Route::post('profil/simpan','ProfilController@simpan');
    Route::get('profil/edit/{id}','ProfilController@edit');  
    Route::put('profil/update/{id}','ProfilController@update');
    Route::get('profil/hapus/{id}', 'ProfilController@hapus');
    Route::get('profil/cetak/{id}', 'ProfilController@cetak');



    //Penduduk

    Route::get('penduduk','PendudukController@index');
    Route::get('tambah','PendudukController@tambah');  
    Route::post('simpan/{id}','PendudukController@simpan')->name('pendudukSimpan');
    Route::get('edit/{id}','PendudukController@edit');  
    Route::put('update/{id}','PendudukController@update');
    Route::delete('hapusKK/{id}', 'KkController@destroy');

    //KartuKeluarga

    Route::get('kk','KkController@index');
    Route::get('tambahKK','KkController@create');
    Route::post('kk/simpan','KkController@simpan');
    Route::get('tambahAnggota/{id}','KkController@tambahAnggota');
    Route::get('anggotaKeluarga/{id}','KkController@anggotaKeluarga')->name('anggotaKeluarga');
    
    //Surat Keterangan Biasa

    Route::get('suketb','SuketbiasaController@index');
    Route::get('suketb/tambah','SuketbiasaController@tambah');  
    Route::post('suketb/simpan','SuketbiasaController@simpan');
    Route::get('suketb/edit/{id}','SuketbiasaController@edit');  
    Route::put('suketb/update/{id}','SuketbiasaController@update');
    Route::get('suketb/hapus/{id}', 'SuketbiasaController@hapus');
    Route::get('suketb/cetak/{id}', 'SuketbiasaController@cetak');

    //Surat Keterangan Tidak Mampu

    Route::get('sktm','SktmController@index');
    Route::get('sktm/tambah','SktmController@tambah');  
    Route::post('sktm/simpan','SktmController@simpan');
    Route::get('sktm/edit/{id}','SktmController@edit');  
    Route::put('sktm/update/{id}','SktmController@update');
    Route::get('sktm/hapus/{id}', 'SktmController@hapus');
    Route::get('sktm/cetak/{id}', 'SktmController@cetak');

    //Surat Keterangan Tidak Mampu

    Route::get('sku','SkuController@index');
    Route::get('sku/tambah','SkuController@tambah');  
    Route::post('sku/simpan','SkuController@simpan');
    Route::get('sku/edit/{id}','SkuController@edit');  
    Route::put('sku/update/{id}','SkuController@update');
    Route::get('sku/hapus/{id}', 'SkuController@hapus');
    Route::get('sku/cetak/{id}', 'SkuController@cetak');

    //#LAPORAN
    //Penduduk
    Route::get('lpenduduk','lpendudukController@index');
    //Surat
    Route::get('lsurat','lsuratController@index');

    
    //Sekdes Penduduk
    Route::get('sdpenduduk','SdpendudukController@index');
    Route::get('sd/edit/{id}','SdpendudukController@edit');

    //Sekdes KK
    Route::get('sdkk','SdkkController@index');

    //Sekdes SKB
    Route::get('sdskb','SdskbController@index');
    Route::get('sdskb/edit/{id}','SdskbController@edit');
    Route::put('sdskb/update/{id}','SdskbController@update');

    //Sekdes SKTM
    Route::get('sdsktm','SdsktmController@index');
    Route::get('sdsktm/edit/{id}','SdsktmController@edit');
    Route::put('sdsktm/update/{id}','SdsktmController@update');

    //Sekdes SKU
    Route::get('sdsku','SdskuController@index');
    Route::get('sdsku/edit/{id}','SdskuController@edit');
    Route::put('sdsku/update/{id}','SdskuController@update');
   
});





//<!--
//|--------------------------------------------------------------------------
//| @copyrigt BanDotz
//|--------------------------------------------------------------------------
//| app.view
//|--------------------------------------------------------------------------
//|
//-->