<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
class BeritaController extends Controller
{
    public function index(){
        $berita = berita::all();
        // dd($berita);
        return view ('berita/beritaIndex',compact('berita'));

    }
    public function create(){
        $data['penduduk']         =  new \App\berita();
        $data['action']         = 'BeritaController@simpan';        
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view ('berita/beritaTambah',$data);
    }
    public function simpan(Request $request){
        // dd($request);
        $validasi = $this->validate($request,[
            'tanggal'                     => 'required',
            'judul'                     => 'required',
            'isi'                  => 'required',
            'kategori'                  => 'required',
            ]);
        $requestData= $request->all();
        if ($request->hasFile('foto')) {
            $file_nama            = $request->file('foto')->store('public/berita/foto');
            $requestData['foto'] = $file_nama;
        } else {
            unset($requestData['foto']);
        }
        // dd($requestData);
        berita::create($requestData);
        return redirect()->route('berita')->with('status','Berita Berhasil ditambahkan');
    }
    public function destroy (Berita $id, Request $request){
        // dd($id);
        $id->delete();
        return redirect()->back()->with('status','Berita berhasil dihapus');
    }
}
