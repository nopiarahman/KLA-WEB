<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdpendudukController extends Controller
{
     public function index()
    {
        $data['penduduks'] = \App\Penduduk::paginate(50);
        $data['judul']  = "PENDUDUK";
        return view('sekdes/sdpenduduk_index',$data);
    }

    public function tambah()
    {
        $data['penduduk']         =  new \App\Penduduk();
        $data['action']         = 'PendudukController@simpan';        
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('sekdes/sdpenduduk_form',$data);
    }

    public function edit($id)
        {
           $data['penduduk']     = \App\Penduduk::findOrFail($id);        
           $data['method']     = "PUT";
           $data['btn_submit'] = "UPDATE";
           $data['action']     = array('PendudukController@update', $id);
           return view('sekdes/sdpenduduk_info',$data);        
        }
}
