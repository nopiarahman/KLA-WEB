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
                            
                            <th>NO. KK</th>
                            <th>Nama</th>
                            <th>Status Hubungan</th>
                            <th>URUTAN KELUARGA</th>
                        </tr>
                    </thead>
        <tbody>
           @foreach ($penduduks as $penduduk)
            <tr>
            <td>{{ $penduduk->kode_keluarga }}</td>
                    <td>{{ $penduduk->nm_anggota_keluarga }}</td>
                    <td>{{ $penduduk->hubungan }}</td>
                    <td><center>{{ $penduduk->no_urut_keluarga }}</center></td>
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
