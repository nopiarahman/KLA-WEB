<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SktmController extends Controller
{
    public function index()
    {
        $data['srt_ket_tdk_mampus'] = \App\Srt_ket_tdk_mampu::get();
        $data['judul']  = "SURAT KETERANGAN TIDAK MAMPU";
        return view('sktm/sktm_index',$data);
    }

    public function tambah()
    {
        $data['srt_ket_tdk_mampu']      =  new \App\Srt_ket_tdk_mampu();
        $data['action']                 = 'SktmController@simpan';        
        $data['btn_submit']             = 'SIMPAN';
        $data['method']                 = "POST";
        return view('sktm/sktm_form',$data);
    }
    public function simpan(Request $request)
    {
        // dd($request);
        $validasi = $this->validate($request,[
            'tgl_keluar'                => 'required',
            'penduduk_id'                => 'required',
            ]);
     
        \App\Srt_ket_tdk_mampu::create($request->all());
        if (uniqid()) {
            // code...
        }
        return redirect('/sktm')->with('pesan', 'Data berhasil disimpan!');
    }

    public function edit($id)
        {
           $data['srt_ket_tdk_mampu']     = \App\Srt_ket_tdk_mampu::findOrFail($id);        
           $data['method']     = "PUT";
           $data['btn_submit'] = "UPDATE";
           $data['action']     = array('SktmController@update', $id);
           return view('sktm/sktm_info',$data);        
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

        public function hapus($id)
        {
            $sktm = \App\Srt_ket_tdk_mampu::findOrFail($id);    
            $path = $sktm->path;
            @\Storage::delete($path);
            $sktm->delete();         
            return redirect('/sktm')->with('pesan','Data berhasil dihapus!');
        }


        public function cetak($id)
        {
          $data['srt_ket_tdk_mampus'] = \App\Srt_ket_tdk_mampu::findOrFail($id);
          $data['method']     = "PUT";
        return view('sktm/sktm_print',$data);        
        }



}
