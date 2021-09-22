<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdskbController extends Controller
{
    public function index()
    {
        $data['srt_ket_biasas'] = \App\Srt_ket_biasa::paginate(100);
        $data['judul']  = "SURAT KETERANGAN";
        return view('sekdes/sdskb_index',$data);
    }

    public function tambah()
    {
        $data['srt_ket_biasa']         =  new \App\Srt_ket_biasa();
        $data['action']         = 'SdskbController@simpan';        
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('sekdes/sdskb_form',$data);
    }
    public function edit($id)
        {
           $data['srt_ket_biasa']     = \App\Srt_ket_biasa::findOrFail($id);        
           $data['method']     = "PUT";
           $data['btn_submit'] = "UPDATE";
           $data['action']     = array('SdskbController@update', $id);
           return view('sekdes/sdskb_info',$data);        
        }

        public function update(Request $request, $id)
        {
            $suketb = \App\Srt_ket_biasa::findOrFail($id);
            $validasi = $this->validate($request,[
            'no'                => 'required',
            'nama'              => 'required',
            'tpt_tgl_lhr'       => 'required',
            'status'            => 'required',
            'jenkel'            => 'required',
            'goldar'            => '',
            'nik'               => 'required',
            'agama'             => 'required',
            'pekerjaan'         => '',
            'tgl_keluar'        => 'required',
            ]);
     
        $datafile = $suketb->file;        
        
        $requestData           = $request->all();
     
        $suketb->update($requestData);        
        return back()->with('pesan', 'Data berhasil diubah!');
        }
}
