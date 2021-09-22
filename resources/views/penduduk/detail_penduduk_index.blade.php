@extends('layout.mainadmin')
@section('page')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA {{ $judul }}</div>
                <div class="card-body">
        <table class="table table-hover table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>KETERANGAN</th>
                            <th>DETAIL DATA</th>
                        </tr>
                    </thead>
        <tbody>
           @foreach ($penduduks as $penduduk)
            <tr>
                    <td>{{ $penduduk->kode_keluarga }}</td>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->nm_anggota_keluarga }}</td>
                    <td>{{ $penduduk->jenis_kelamin }}</td>
                    <td>{{ $penduduk->tpt_lahir }}, {{ $penduduk->tgl_lahir }}</td>
                    <td>{{ $penduduk->pekerjaan }}</td>
                    <td> <a href="/profil"><i class="fa fa-pencil-square-o"></i>lihat detail</td>
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