<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perangkat;
class PerangkatController extends Controller
{
    public function index(){
        $perangkat = perangkat::all();
        // dd($perangkat);
        return view ('perangkat/perangkatIndex',compact('perangkat'));

    }
    public function create(){
        $data['perangkat']         =  new \App\perangkat();
        $data['action']         = 'PerangkatController@simpan';        
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view ('perangkat/perangkatTambah',$data);
    }
    public function simpan(Request $request){
        // dd($request);
        $validasi = $this->validate($request,[
            'nama'                     => 'required',
            'jabatan'                     => 'required',
            ]);
        $requestData= $request->all();
        if ($request->hasFile('foto')) {
            $file_nama            = $request->file('foto')->store('public/perangkat/foto');
            $requestData['foto'] = $file_nama;
        } else {
            unset($requestData['foto']);
        }
        // dd($requestData);
        perangkat::create($requestData);
        return redirect()->route('perangkat')->with('status','Perangkat Berhasil ditambahkan');
    }
    public function destroy ( perangkat $id, Request $request){
        // dd($id);
        $id->delete();
        return redirect()->back()->with('status','Perangkat berhasil dihapus');
    }
}
