<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\pengajuan;
use App\Srt_ket_tdk_mampu;
use App\Srt_ket_usaha;
use App\Srt_ket_biasa;
use App\penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function suratPendudukBaru()
    {
        $id=auth()->user()->penduduk;
        $pengajuan=pengajuan::where('penduduk_id',auth()->user()->penduduk->id)->get();
        return view ('pengajuan/pengajuanIndex',compact('pengajuan','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahPengajuan(penduduk $id)
    {
        $data['pengajuan']         =  new \App\pengajuan();
        $data['action']         = 'PendudukController@pengajuanSimpan';        
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('pengajuan/pengajuanTambah',compact('id'),$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pengajuanSimpan(Request $request,penduduk $id)
    {
        // dd($request);
        try {
            DB::beginTransaction();
            $validasi = $this->validate($request,[
                'tanggal'                     => 'required',
                'jenis'                     => 'required',
                ]);
            $requestData = $request->all();
            $requestData['status']='baru';
            $requestData['penduduk_id']=$id->id;
            pengajuan::create($requestData);

            DB::commit();
            return redirect()->route('suratPendudukBaru')->with('status','Pengajuan Berhasil Disimpan');
        }  catch (\Exception $ex) {
            dd($ex);
            DB::rollback();
            return redirect()->back()->with('error','Gagal. Pesan Error: '.$ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function pengajuan()
    {
        $pengajuan = pengajuan::all();
        return view('pengajuan/pengajuanAdmin',compact('pengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function lihatPengajuan(pengajuan $id)
    {
        // dd($id);
        $penduduk = $id->penduduk;

        return view('pengajuan/lihatPengajuan',compact('id','penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, r $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function hapusPengajuan(pengajuan $id)
    {
        $id->delete();
        return redirect()->back()->with('status','Pengajuan Berhasil Dihapus');
    }
    public function terimaPengajuan(Request $request, pengajuan $id){
        // dd($id);
        $requestData = $request->all();
        $requestData['tgl_keluar']=Carbon::now();   
        $requestData['penduduk_id']=$id->penduduk_id;   
        $id->update(['status'=>'diterima']);
        if($id->jenis==='sktm'){
            Srt_ket_tdk_mampu::create($requestData);
            return redirect()->route('sktm')->with('status','Data Berhasil DiSimpan');
        }elseif($id->jenis==='sku'){
            $requestData['perihal']=$id->perihal;
            $requestData['resort']=$id->resort;
            Srt_ket_usaha::create($requestData);
            return redirect()->route('sku')->with('status','Data Berhasil DiSimpan');
        }elseif($id->jenis==='skb'){
            Srt_ket_biasa::create($requestData);
            return redirect()->route('skb')->with('status','Data Berhasil DiSimpan');
        }
    }
    public function tolakPengajuan(Request $request, pengajuan $id){
        $id->update(['status'=>'ditolak']);
        return redirect()->route('pengajuanAdmin')->with('status','Pengajuan Berhasil Ditolak');

    }
}
