<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lpendudukController extends Controller
{
    public function index()
    {
    $data['penduduks'] = \App\Penduduk::all();
    $data['judul']  = "PENDUDUK";
    return view('laporan/lpenduduk',$data);
    }
    
}
