<?php

namespace App\Http\Controllers;
use App\kartuKeluarga;
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
        $validasi = $this->validate($request,[
            'nomorKK'                     => 'required',
            'namaKepala'                     => 'required',
            'alamat'                  => 'required',
            'rt'                  => 'required',
            ]);
        \App\kartuKeluarga::create($request->all());
        return redirect('kk')->with('pesan', 'Data berhasil disimpan!');
    }
}
