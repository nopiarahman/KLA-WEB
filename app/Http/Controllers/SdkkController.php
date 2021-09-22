<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdkkController extends Controller
{
    public function index()
    {
        $data['penduduks'] = \App\Penduduk::paginate(100);
        $data['judul']  = "PENDUDUK";
        return view('sekdes/sdkk_index',$data);
    }
}
