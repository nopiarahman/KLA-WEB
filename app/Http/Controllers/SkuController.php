<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkuController extends Controller
{
    public function index()
    {
        $data['srt_ket_usahas'] = \App\Srt_ket_usaha::paginate(100);
        $data['judul']  = "SURAT KETERANGAN USAHA";
        return view('sku/sku_index',$data);
    }

    public function tambah()
    {
        $data['srt_ket_usaha']      =  new \App\Srt_ket_usaha();
        $data['action']                 = 'SkuController@simpan';        
        $data['btn_submit']             = 'SIMPAN';
        $data['method']                 = "POST";
        return view('sku/sku_form',$data);
    }
    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,[
            'no'                => 'required',
            'nama'              => 'required',
            'tpt_tgl_lhr'       => 'required',
            'jenkel'            => 'required',
            'nik'               => 'required|unique:srt_ket_usahas,nik',
            'pekerjaan'         => '',
            'perihal'           => 'required',
            'tgl_keluar'        => 'required',
            ]);
     
        \App\Srt_ket_usaha::create($request->all());
        if (uniqid()) {
            // code...
        }
        return redirect('/sku')->with('pesan', 'Data berhasil disimpan!');
    }

    public function edit($id)
        {
           $data['srt_ket_usaha']     = \App\Srt_ket_usaha::findOrFail($id);        
           $data['method']     = "PUT";
           $data['btn_submit'] = "UPDATE";
           $data['action']     = array('SkuController@update', $id);
           return view('sku/sku_info',$data);        
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

        public function hapus($id)
        {
            $sku = \App\Srt_ket_usaha::findOrFail($id);    
            $path = $sku->path;
            @\Storage::delete($path);
            $sku->delete();         
            return redirect('/sku')->with('pesan','Data berhasil dihapus!');
        }


        public function cetak($id)
        {
          $data['srt_ket_usahas'] = \App\Srt_ket_usaha::findOrFail($id);
          $data['method']     = "PUT";
        return view('sku/sku_print',$data);        
        }
}
