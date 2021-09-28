@extends('layout.mainadmin')
@section('page')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >DATA {{ $judul }}</div>
                <div style="margin: 15px;">
                   <center><font size="5" color="#000" >UNTUK MELIHAT, MENGUBAH, DAN MENGHAPUS DATA INFORMASI LENGKAP PENDUDUK SILAHKAN KLIK INFO DETAIL</font></center>
                </div>
                
                <div class="card-body">
                    <a style="float:right;" href="{{  url('/tambah') }}" class="btn btn-primary"><font size="2">TAMBAH DATA</font></a>
        <table class="table table-hover table-striped table-bordered" >
                    <thead class="text-center">
                        <tr >
                            <th>NO</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Pekerjaan</th>

                        </tr>
                    </thead>
        <tbody>
           @foreach ($penduduks as $penduduk)
             <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->nm_anggota_keluarga }}</td>
                    <td>{{ $penduduk->jenis_kelamin }}</td>
                    <td>{{ $penduduk->tpt_lahir }}, {{ $penduduk->tgl_lahir }}</td>
                    <td>{{ $penduduk->pekerjaan }}</td>
                    <td> <a href="{{ url('edit/'.$penduduk->id) }}"><i class="fa fa-pencil-square-o"></i>info detail</td>
                </tr> 
            @endforeach   
 
                </tbody>
                </table>


                {{ $penduduks->links() }}
 
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
