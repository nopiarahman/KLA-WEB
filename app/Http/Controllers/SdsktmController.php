<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdsktmController extends Controller
{
    public function index()
    {
        $data['srt_ket_tdk_mampus'] = \App\Srt_ket_tdk_mampu::paginate(100);
        $data['judul']  = "SURAT KETERANGAN TIDAK MAMPU";
        return view('sekdes/sdsktm_index',$data);
    }

    public function tambah()
    {
        $data['srt_ket_tdk_mampu']      =  new \App\Srt_ket_tdk_mampu();
        $data['action']                 = 'SdsktmController@simpan';        
        $data['btn_submit']             = 'SIMPAN';
        $data['method']                 = "POST";
        return view('sekdes/sdsktm_form',$data);
    }
    public function edit($id)
        {
           $data['srt_ket_tdk_mampu']     = \App\Srt_ket_tdk_mampu::findOrFail($id);        
           $data['method']     = "PUT";
           $data['btn_submit'] = "UPDATE";
           $data['action']     = array('SdsktmController@update', $id);
           return view('sekdes/sdsktm_info',$data);        
        }
        public function update(Request $request, $id)
        {
            $sktm = \App\Srt_ket_tdk_mampu::findOrFail($id);
            $validasi = $this->validate($request,[
            'no'                => 'required',
            'nama'              => 'required',
            'jenkel'            => 'required',
            'tpt_tgl_lhr'       => 'required',
            'status'            => 'required',
            'agama'             => 'required',
            'pekerjaan'         => '',
            'tgl_keluar'        => 'required',
            ]);
     
        $datafile = $sktm->file;        
        
        $requestData           = $request->all();
     
        $sktm->update($requestData);        
        return back()->with('pesan', 'Data berhasil diubah!');
        }
}
