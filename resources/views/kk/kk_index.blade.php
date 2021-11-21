@extends('layout.mainadmin')
@section('page')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-12">
              @if (session('status'))
                <div class="alert alert-success alert-dismissible show fade">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  {{session ('status')}}
                </div>
              @endif
            </div>
          </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kartu Keluarga</div>
                <div class="card-body">
                    <a style="float:right;" href="{{  url('/tambahKK') }}" class="btn btn-primary"><font size="2">TAMBAH DATA</font></a>

        <table class="table table-sm table-hover table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                            
                            <th>NO. KK</th>
                            <th>Nama Kepala</th>
                            <th>Alamat</th>
                            <th>RT</th>
                            <th>Aksi    </th>
                        </tr>
                    </thead>
        <tbody>
           @foreach ($kk as $isiKK)
            <tr>
              <td>{{ $isiKK->noKK }}</td>
              <td>{{ $isiKK->namaKepala }}</td>
              <td>{{ $isiKK->alamat }}</td>
              <td>{{ $isiKK->rt }}</td>
              <td><a href="/tambahAnggota/{{$isiKK->id}}" class="btn btn-sm btn-white border-success">Anggota Keluarga</a></td>
            </tr>
            @endforeach   
                </tbody>
                </table>
 
                {{ $kk->links() }}
 
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