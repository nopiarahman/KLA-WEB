<?php

namespace App\Http\Controllers;

use App\suratKematian;
use Illuminate\Http\Request;

class SuratKematianController extends Controller
{
    public function index()
    {
        $data['suratKematian'] = \App\suratKematian::all();
        $data['judul']  = "SURAT KEMATIAN";
        return view('kematian/index', $data);
        // return view('kematian/index');
        dd($data);
    }
    public function create()
    {
        $data['suratKematian']         =  new \App\suratKematian();
        $data['action']         = 'SuratKematianController@simpan';
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('kematian/create', $data);
    }
    public function simpan(Request $request)
    {
        // dd($request);
        $validasi = $this->validate($request, [
            'tanggalMeninggal'        => 'required',
            'tanggalKeluar'        => 'required',
        ]);

        \App\suratKematian::create($request->all());
        // if (uniqid()) {
        //     // code...
        // }
        return redirect('/suratKematian')->with('pesan', 'Data berhasil disimpan!');
    }
    public function cetak($id)
    {
        $sk = \App\suratKematian::findOrFail($id);
        // $data['method']     = "PUT";
        return view('kematian/cetak', compact('sk'));
    }
    public function destroy(suratKematian $id)
    {
        $id->delete();
        return redirect('/suratKematian')->with('pesan', 'Data berhasil dihapus!');
    }
}
