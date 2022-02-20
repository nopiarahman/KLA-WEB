<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profil;
use App\berita;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('useradmin');
    }
    public function sejarah(Request $request)
    {
        // dd($request);
        $profil = profil::first();
        return view('sejarah', compact('profil'));
    }
    public function geografis()
    {
        $profil = profil::all()->last();
        return view('sejarah', compact('profil'));
    }
    public function berita(berita $id)
    {

        return view('berita', compact('id'));
    }
}
