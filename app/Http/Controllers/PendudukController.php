<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kartuKeluarga;

class PendudukController extends Controller
{
    public function index()
    {
        $data['penduduks'] = \App\Penduduk::paginate(50);
        $data['judul']  = "PENDUDUK";
        return view('penduduk/penduduk_index',$data);
    }

    public function tambah()
    {
        $data['penduduk']         =  new \App\Penduduk();
        $data['action']         = 'PendudukController@simpan';        
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('penduduk/penduduk_form',$data);
    }

    public function simpan(Request $request,kartuKeluarga $id)
    {
        // dd($id);
        $validasi = $this->validate($request,[
            'nik'                     => 'required',
            'nama'                     => 'required',
            'jenis_kelamin'                  => 'required',
            'hubungan'                 => 'required',
            'tempatLahir'          => 'required',
            'goldarah'          => 'required',
            'tanggalLahir'        => 'required',
            'status'       => 'required',
            'agama'                    => 'required|unique:penduduks,nik',
            'kewarganegaraan'          => 'required',
            'pendidikan'               => 'required',
            'pekerjaan'              => 'required',
            'ayah'              => 'required',
            'ibu'                   => 'required',
            ]);
        $requestData = $request->all();
        $requestData['kartuKeluarga_id']=$id->id;
        \App\Penduduk::create($requestData);
        if (uniqid()) {
            // code...
        }
        return redirect('/penduduk')->with('pesan', 'Data berhasil disimpan!');
    }

    public function edit($id)
        {
           $data['penduduk']     = \App\Penduduk::findOrFail($id);        
           $data['method']     = "PUT";
           $data['btn_submit'] = "UPDATE";
           $data['action']     = array('PendudukController@update', $id);
           return view('penduduk/penduduk_info',$data);        
        }
        public function update(Request $request, $id)
        {
            $penduduk = \App\Penduduk::findOrFail($id);
            $validasi = $this->validate($request,[
            'rw'                     => 'required',
            'rt'                     => 'required',
            'dusun'                  => 'required',
            'alamat'                 => 'required',
            'kode_keluarga'          => 'required',
            'nm_kpl_keluarga'        => 'required',
            'no_urut_keluarga'       => 'required',
            'nik'                    => 'required',
            'nm_anggota_keluarga'    => 'required',
            'jenis_kelamin'          => 'required',
            'hubungan'               => 'required',
            'tpt_lahir'              => 'required',
            'tgl_lahir'              => 'required',
            'usia'                   => 'required',
            'status'                 => 'required',
            'agama'                  => 'required',
            'goldarah'               => 'required',
            'kewarganegaraan'        => 'required',
            'etnis_suku'             => '',
            'pendidikan'             => '',
            'pekerjaan'              => '',
                ]);
     
        $datafile = $penduduk->file;        
        
        $requestData           = $request->all();
     
        $penduduk->update($requestData);        
        return back()->with('pesan', 'Data berhasil diubah!');
        }

        public function hapus($id)
        {
            $penduduk = \App\Penduduk::findOrFail($id);    
            $path = $penduduk->path;
            @\Storage::delete($path);
            $penduduk->delete();         
            return redirect('/penduduk')->with('pesan','Data berhasil dihapus!');
        }
}
