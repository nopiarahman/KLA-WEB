@extends('layout.mainadmin')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('page')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >DATA Penduduk</div>

                <div style="margin: 15px;">
                    <center><font size="5" color="#000" >
                        Anggota Keluarga {{$id->namaKepala}}
                </font></center>
                    <center><font size="5" color="#000" >
                        Nomor Kartu Keluarga {{$id->noKK}}
                </font></center>
                </div>
                
                <div class="card-body">
                    {{-- <a style="float:right;" href="{{  url('/tambahAnggota',['id'=>$id->id]) }}" class="btn btn-primary mb-4"><font size="2">TAMBAH ANGGOTA KELUARGA</font></a> --}}
        <table class="table table-hover table-striped" id="table">
                    <thead class="text-center">
                        <tr >
                            <th>NO</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Hubungan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
        <tbody>
           @foreach ($penduduks as $penduduk)
             <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->nama }}</td>
                    <td>{{ $penduduk->jenis_kelamin }}</td>
                    <td>{{ $penduduk->tempatLahir }}, {{ $penduduk->tanggalLahir }}</td>
                    <td>{{ $penduduk->hubungan }}</td>
                    <td> 
                        <a href="{{ url('edit/'.$penduduk->id) }}" class="btn btn-sm btn-white border-info "><i class="fa fa-pencil-square-o"></i>info detail </a>
                        
                    </td>
                </tr> 
            @endforeach   
 
                </tbody>
                </table>
                {{-- <a href="{{url('kk')}}" class="btn btn-secondary"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali</a> --}}
 
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" >
    $('#table').DataTable({
      "pageLength":     25,
      "language": {
        "decimal":        "",
        "emptyTable":     "Tidak ada data tersedia",
        "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 data",
        "infoFiltered":   "(difilter dari _MAX_ total data)",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "Menampilkan _MENU_ data",
        "loadingRecords": "Loading...",
        "processing":     "Processing...",
        "search":         "Cari:",
        "zeroRecords":    "Tidak ada data ditemukan",
        "paginate": {
            "first":      "Awal",
            "last":       "Akhir",
            "next":       "Selanjutnya",
            "previous":   "Sebelumnya"
        },
        }
    });
</script>
@endsection
