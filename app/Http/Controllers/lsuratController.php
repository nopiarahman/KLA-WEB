<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lsuratController extends Controller
{
    public function index()
    {
    $data['srt_ket_biasas'] = \App\Srt_ket_biasa::all();
    $data['srt_ket_tdk_mampus'] = \App\Srt_ket_tdk_mampu::all();
    $data['srt_ket_usahas'] = \App\Srt_ket_usaha::all();
    return view('laporan/lsurat',$data);
    }
}
