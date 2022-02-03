@extends('layout.mainadmin')
@section('page')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header" >DATA {{ $judul }}</div> --}}
                    {{-- Alert --}}
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
                <div style="margin: 15px;">
                   <center><font size="5" color="#000" >Perangkat Desa</font></center>
                </div>
                <div class="card-body">
                <a style="float:right;" href="{{  url('/tambahPerangkat') }}" class="btn btn-primary"><font size="2">TAMBAH DATA</font></a>

        <table class="table table-hover table-striped table-bordered" >
                    <thead class="text-center">
                        <tr >
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
        <tbody>
           @foreach ($perangkat as $p)
             <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td> <img src="{{Storage::url($p->foto) }}" alt="" width="100px"> </td>
                 
                    <td> <a href="{{ url('hapusPerangkat/'.$p->id) }}"> <i class="fa fa-eraser" aria-hidden="true"></i> Hapus </a></td>
                </tr> 
            @endforeach   
 
                </tbody>
                </table>


                {{-- {{ $penduduks->links() }} --}}
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

