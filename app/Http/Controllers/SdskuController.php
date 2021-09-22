<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdskuController extends Controller
{
    public function index()
    {
        $data['srt_ket_usahas'] = \App\Srt_ket_usaha::paginate(100);
        $data['judul']  = "SURAT KETERANGAN USAHA";
        return view('sekdes/sdsku_index',$data);
    }

    public function tambah()
    {
        $data['srt_ket_usaha']      =  new \App\Srt_ket_usaha();
        $data['action']                 = 'SdskuController@simpan';        
        $data['btn_submit']             = 'SIMPAN';
        $data['method']                 = "POST";
        return view('sekdes/sdsku_form',$data);
    }
    public function edit($id)
        {
           $data['srt_ket_usaha']     = \App\Srt_ket_usaha::findOrFail($id);        
           $data['method']     = "PUT";
           $data['btn_submit'] = "UPDATE";
           $data['action']     = array('SdskuController@update', $id);
           return view('sekdes/sdsku_info',$data);        
        }
        public function update(Request $request, $id)
        {
            $sku = \App\Srt_ket_usaha::findOrFail($id);
            $validasi = $this->validate($request,[
            'no'                => 'required',
            'nama'              => 'required',
            'tpt_tgl_lhr'       => 'required',
            'jenkel'            => 'required',
            'nik'               => 'required',
            'pekerjaan'         => '',
            'perihal'           => 'required',
            'tgl_keluar'        => 'required',
            ]);
     
        $datafile = $sku->file;        
        
        $requestData           = $request->all();
     
        $sku->update($requestData);        
        return back()->with('pesan', 'Data berhasil diubah!');
        }
}
