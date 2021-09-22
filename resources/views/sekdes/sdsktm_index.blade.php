@extends('layout.mainadmin')
@section('page')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >DATA {{ $judul }}</div>
                <div style="margin: 15px;">
                   <center><font size="5" color="#000" >UNTUK MELIHAT, MENGUBAH, DAN MENGHAPUS DATA LENGKAP SURAT SILAHKAN KLIK INFO SURAT.</font></center>
                </div>
                <div class="card-body">
        <table class="table table-hover table-striped table-bordered" >
                    <thead class="text-center">
                        <tr >
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Alamat RT/RW </th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>No Reg</th>
                            <th>Tanggal Keluar Surat</th>

                        </tr>
                    </thead>
        <tbody>
           @foreach ($srt_ket_tdk_mampus as $sktm)
             <tr>
                    <td><center>{{ $loop->iteration }}</center></td>
                    <td><center>{{ $sktm->nama }}</center></td>
                    <td><center>Rt. {{ $sktm->rt_rw }} Desa {{ $sktm->desa }} Kec. {{ $sktm->kec }} Kab. {{ $sktm->kab }}</center></td>
                    <td><center>{{ $sktm->tpt_tgl_lhr }}</center></td>
                    <td><center>{{ $sktm->no_reg }}</center></td>
                    <td><center>{{ $sktm->tgl_keluar }}</center></td>
                    <td><center><a href="{{ url('sdsktm/edit/'.$sktm->id) }}"><i class="fa fa-pencil-square-o"></i>Info Surat</center></td>
                    <td><center><a href="{{ url('sktm/cetak/'.$sktm->id) }}"><i class="fa fa-table"></i>Cetak Surat</center></td>
                </tr> 
            @endforeach   
 
                </tbody>
                </table>

                {{ $srt_ket_tdk_mampus->links() }}
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!--
|--------------------------------------------------------------------------
| @copyrigt BanDotz
|--------------------------------------------------------------------------
| app.view
|--------------------------------------------------------------------------
|
-->