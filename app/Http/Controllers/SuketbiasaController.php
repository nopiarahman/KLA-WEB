<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuketbiasaController extends Controller
{
    public function index()
    {
        $data['srt_ket_biasas'] = \App\Srt_ket_biasa::paginate(100);
        $data['judul']  = "SURAT KETERANGAN";
        return view('suketbiasa/suketb_index', $data);
    }

    public function tambah()
    {
        $data['srt_ket_biasa']         =  new \App\Srt_ket_biasa();
        $data['action']         = 'SuketbiasaController@simpan';
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('suketbiasa/suketb_form', $data);
    }
    public function simpan(Request $request)
    {
        // dd($request);
        $validasi = $this->validate($request, [
            'tgl_keluar'        => 'required',
            'penduduk_id'        => 'required',
        ]);

        \App\Srt_ket_biasa::create($request->all());
        if (uniqid()) {
            // code...
        }
        return redirect('/suketb')->with('pesan', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $data['srt_ket_biasa']     = \App\Srt_ket_biasa::findOrFail($id);
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('SuketbiasaController@update', $id);
        return view('suketbiasa/suketb_info', $data);
    }
    public function update(Request $request, $id)
    {
        $suketb = \App\Srt_ket_biasa::findOrFail($id);
        $validasi = $this->validate($request, [
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

    public function hapus($id)
    {
        $suketb = \App\Srt_ket_biasa::findOrFail($id);
        $path = $suketb->path;
        @\Storage::delete($path);
        $suketb->delete();
        return redirect('/suketb')->with('pesan', 'Data berhasil dihapus!');
    }


    public function cetak($id)
    {
        $data['srt_ket_biasas'] = \App\Srt_ket_biasa::findOrFail($id);
        $data['method']     = "PUT";
        return view('suketbiasa/suketb_print', $data);
    }
}
