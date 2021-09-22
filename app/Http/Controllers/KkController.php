<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KkController extends Controller
{
    public function index()
    {
        $data['penduduks'] = \App\Penduduk::paginate(100);
        $data['judul']  = "PENDUDUK";
        return view('kk/kk_index',$data);
    }
}
