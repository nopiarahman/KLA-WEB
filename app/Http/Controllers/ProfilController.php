<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data['profils'] = \App\Profil::paginate(100);
        $data['judul']  = "PROFIL";
        return view('profil/profil_index',$data);
    }

    public function tambah()
    {
        $data['profil']      =  new \App\Profil();
        $data['action']                 = 'ProfilController@simpan';        
        $data['btn_submit']             = 'SIMPAN';
        $data['method']                 = "POST";
        return view('profil/profil_info',$data);
    }
    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,[
            'kategori'          => 'required',
            'isi'              => '',
            ]);
     
        \App\Profil::create($request->all());
        if (uniqid()) {
            // code...
        }
        return redirect('/profil')->with('pesan', 'Data berhasil disimpan!');
    }



    public function edit($id)
        {
           $data['profil']     = \App\Profil::findOrFail($id);        
           $data['method']     = "PUT";
           $data['btn_submit'] = "UPDATE";
           $data['action']     = array('ProfilController@update', $id);
           return view('profil/profil_info',$data);        
        }
        public function update(Request $request, $id)
        {
            $profil = \App\Profil::findOrFail($id);
            $validasi = $this->validate($request,[
            'kategori'         => 'required',
            'isi'              => '',
            ]);
     
        $datafile = $profil->file;        
        
        $requestData           = $request->all();
     
        $profil->update($requestData);        
        return back()->with('pesan', 'Data berhasil diubah!');
        }

        public function cetak($id)
        {
          $data['profils'] = \App\Profil::findOrFail($id);
          $data['method']     = "PUT";
        return view('layout/main',$data);        
        }
}
