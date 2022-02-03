@extends('layout.mainadmin')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
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
                <a style="float:right;" href="{{  url('suketb/tambah') }}" class="btn btn-primary"><font size="2">TAMBAH DATA</font></a>

        <table class="table table-hover table-striped" id="table">
                    <thead class="text-center">
                        <tr >
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Alamat RT/RW </th>
                            <th>No Surat</th>
                            <th>Tanggal Keluar Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
        <tbody>
           @foreach ($srt_ket_biasas as $suketb)
             <tr>
                    <td><center>{{ $loop->iteration }}</center></td>
                    <td><center>{{ $suketb->penduduk->nama }}</center></td>
                    <td><center>Rt. {{ $suketb->penduduk->kartukeluarga->rt }}</center></td>
                    <td><center>{{ nomorSuratSKB($suketb->id) }}</center></td>
                    <td><center>{{ $suketb->tgl_keluar }}</center></td>
                    <td>
                    {{-- <center><a href="{{ url('suketb/edit/'.$suketb->id) }}"><i class="fa fa-pencil-square-o"></i>Info Surat</center> --}}
                    <a href="{{ url('suketb/cetak/'.$suketb->id) }}"><i class="fa fa-table"></i>Cetak Surat</center>
                        <button type="button" class="btn btn-sm btn-white text-danger border-danger" 
                            data-toggle="modal" 
                            data-target="#exampleModalCenter" 
                            data-id="{{$suketb->id}}" 
                            data-nama="{{$suketb->penduduk->nama}}">
                            <i class="fa fa-trash" aria-hidden="true" ></i> Hapus</button> 
                            </td>
                </tr> 
            @endforeach   
 
                </tbody>
                </table>


                {{ $srt_ket_biasas->links() }}
 
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


<!--
|--------------------------------------------------------------------------
| @copyrigt BanDotz
|--------------------------------------------------------------------------
| app.view
|--------------------------------------------------------------------------
|
-->