<?php

namespace App\Http\Controllers;
use App\kartuKeluarga;
use App\penduduk;
use Illuminate\Http\Request;

class KkController extends Controller
{
    public function index()
    {
        $data['kk'] = kartuKeluarga::paginate(100);
        return view('kk/kk_index',$data);
    }
    public function create()
    {
        $data['kk']         =  new \App\kartuKeluarga();
        $data['action']         = 'KkController@simpan';        
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('kk/kk_form',$data);
    }
    public function simpan(Request $request)
    {
        // dd($request);
        $validasi = $this->validate($request,[
            'noKK'                     => 'required',
            'alamat'                  => 'required',
            'rt'                  => 'required',
            'rw'                  => 'required',
            'kelurahan'                  => 'required',
            'kecamatan'                  => 'required',
            'kabupaten'                  => 'required',
            'kodePos'                  => 'required',
            'provinsi'                  => 'required',
            ]);
        \App\kartuKeluarga::create($request->all());
        return redirect('kk')->with('pesan', 'Data berhasil disimpan!');
    }
    public function tambahAnggota(kartuKeluarga $id){
        // dd($id);
        $data['penduduk']         =  new \App\Penduduk();
        $data['action']         = 'PendudukController@simpan';        
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('penduduk/penduduk_form',compact('id'),$data);
    }
    public function anggotaKeluarga(kartuKeluarga $id){
        // dd($id->penduduk()->get());
        $penduduks =  Penduduk::where('kartu_keluarga_id',$id->id)->get();
        $data['judul']  = "PENDUDUK";
        return view('kk/anggotaKeluarga',$data,compact('id','penduduks'));
    }
    public function destroy(kartuKeluarga $id){
        if($id->penduduk()->first() != null){
            $id->penduduk()->delete();
        }
        $id->delete();
        return redirect('kk')->with('pesan', 'Data berhasil dihapus!');

    }
}
