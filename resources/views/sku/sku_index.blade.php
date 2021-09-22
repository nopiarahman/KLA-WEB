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
                            <th>Tempat, Tanggal Lahir</th>
                            <th>NIK</th>
                            <th>Alamat RT/RW </th>
                            <th>Tanggal Keluar Surat</th>

                        </tr>
                    </thead>
        <tbody>
           @foreach ($srt_ket_usahas as $sku)
             <tr>
                    <td><center>{{ $loop->iteration }}</center></td>
                    <td><center>{{ $sku->nama }}</center></td>
                    <td><center>{{ $sku->tpt_tgl_lhr }}</center></td>
                    <td><center>{{ $sku->nik }}</center></td>
                    <td><center>Rt. {{ $sku->rt_rw }} Desa {{ $sku->desa }} Kec. {{ $sku->kec }} Kab. {{ $sku->kab }}</center></td>
                    <td><center>{{ $sku->tgl_keluar }}</center></td>
                    <td><center><a href="{{ url('sku/edit/'.$sku->id) }}"><i class="fa fa-pencil-square-o"></i>Info Surat</center></td>
                    <td><center><a href="{{ url('sku/cetak/'.$sku->id) }}"><i class="fa fa-table"></i>Cetak Surat</center></td>
                </tr> 
            @endforeach   
 
                </tbody>
                </table>

                <a style="float:right;" href="{{  url('sku/tambah') }}" class="btn btn-primary"><font size="2">TAMBAH DATA</font></a>

                {{ $srt_ket_usahas->links() }}
 
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