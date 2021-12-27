<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kartuKeluarga;
use App\Penduduk;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    public function index()
    {
        $data['penduduks'] = \App\Penduduk::paginate(50);
        $data['judul']  = "PENDUDUK";
        return view('penduduk/penduduk_index',$data);
    }

    public function tambah()
    {
        $data['penduduk']         =  new \App\Penduduk();
        $data['action']         = 'PendudukController@simpan';        
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('penduduk/penduduk_form',$data);
    }

    public function simpan(Request $request,kartuKeluarga $id)
    {
        try {
            DB::beginTransaction();

            $sandi = Carbon::parse($request->tanggalLahir)->isoFormat('DDMMYY');
            $requestUser ['name'] = $request->nama;
            $requestUser ['username'] = $request->nik;
            $requestUser ['admin'] = 0;
            $requestUser ['email'] = $request->email;
            $requestUser ['password'] = Hash::make($sandi);
            $requestUser ['role'] = 'penduduk';
            User::create($requestUser);
            $cekUser = user::where('username',$request->nik)->first();
            $validasi = $this->validate($request,[
                'nik'                     => 'required',
                'nama'                     => 'required',
                'jenis_kelamin'                  => 'required',
                'hubungan'                 => 'required',
                'tempatLahir'          => 'required',
                'goldarah'          => 'required',
                'tanggalLahir'        => 'required',
                'status'       => 'required',
                'agama'                    => 'required|unique:penduduks,nik',
                'kewarganegaraan'          => 'required',
                'pendidikan'               => 'required',
                'pekerjaan'              => 'required',
                'ayah'              => 'required',
                'ibu'                   => 'required',
                ]);
            $requestData = $request->all();
            $requestData['kartu_keluarga_id']=$id->id;
            $requestData['user_id']=$cekUser->id;
            // dd($requestData);
            
            \App\Penduduk::create($requestData);
            if (uniqid()) {
                // code...
            }
            $penduduks = [];
            if($id->penduduk){
                $penduduks =  $id->penduduk->all();
            }
            DB::commit();
            return redirect()->route('anggotaKeluarga',compact('id','penduduks'));
        } catch (\Exception $ex) {
            dd($ex);
            DB::rollback();
            return redirect()->back()->with('error','Gagal. Pesan Error: '.$ex->getMessage());
        }
    }

    public function edit(Penduduk $id){
        $data['penduduk']     = $id;        
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('PendudukController@update', $id);
        // dd($id);
        return view('penduduk/penduduk_info',compact('id'),$data);        
    }
    public function update(Request $request, Penduduk $id){
    $validasi = $this->validate($request,[
        'nik'                     => 'required',
        'nama'                     => 'required',
        'jenis_kelamin'                  => 'required',
        'hubungan'                 => 'required',
        'tempatLahir'          => 'required',
        'goldarah'          => 'required',
        'tanggalLahir'        => 'required',
        'status'       => 'required',
        'agama'                    => 'required',
        'kewarganegaraan'          => 'required',
        'pendidikan'               => 'required',
        'pekerjaan'              => 'required',
        'ayah'              => 'required',
        'ibu'                   => 'required',
        ]);
    $requestData = $request->all();
    $id->update($requestData);        
    return back()->with('pesan', 'Data berhasil diubah!');
    }
    public function hapus($id)
    {
        $penduduk = \App\Penduduk::findOrFail($id);    
        $path = $penduduk->path;
        @\Storage::delete($path);
        $penduduk->delete();         
        return redirect()->back()->with('pesan','Data berhasil dihapus!');
    }
    public function dataDiri(){
        $id = Penduduk::where('user_id',auth()->user()->id)->first();
        $penduduk = $id;
        // dd($penduduk);
        return view('penduduk/dataDiri',compact('id','penduduk'));        
    }
    public function kartuKeluarga(){
        $user = Penduduk::where('user_id',auth()->user()->id)->first();
        $penduduks = Penduduk::where('kartu_keluarga_id',$user->kartu_keluarga_id)->get();
        $id = kartuKeluarga::find($penduduks->first()->kartu_keluarga_id);
        return view('penduduk/kartuKeluarga',compact('id','penduduks'));        
    }
}
