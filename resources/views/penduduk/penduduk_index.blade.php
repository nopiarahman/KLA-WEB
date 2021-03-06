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
                  <h3 class="text-center">DATA PENDUDUK</h3>
                <center><font size="2" color="#000" >UNTUK MELIHAT, MENGUBAH, DAN MENGHAPUS DATA INFORMASI LENGKAP PENDUDUK SILAHKAN KLIK INFO DETAIL</font></center>
                </div>
                
                <div class="card-body">
        <table class="table table-hover table-striped " id="table">
                    <thead class="text-center">
                        <tr >
                            <th>NO</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Pekerjaan</th>
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
                    <td>{{ $penduduk->pekerjaan }}</td>
                    <td> <a href="{{ url('edit/'.$penduduk->id) }}" class="btn btn-sm btn-white border-info"><i class="fa fa-pencil-square-o"></i>info detail </a>
                        <button type="button" class="btn btn-sm btn-white text-danger border-danger" 
                        data-toggle="modal" 
                        data-target="#exampleModalCenter" 
                        data-id="{{$penduduk->id}}" 
                        data-nama="{{$penduduk->nama}}">
                        <i class="fa fa-trash" aria-hidden="true" ></i> Hapus</button>
                    </td>
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
<!-- Modal Hapus-->
<div class="modal fade exampleModalCenter" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hapus Penduduk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post" id="formHapus">
            @method('delete')
            @csrf
            <p class="modal-text"></p>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Hapus </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#exampleModalCenter').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id') // Extract info from data-* attributes
      var nama = button.data('nama') 
      var modal = $(this)
      modal.find('.modal-text').text('Yakin ingin menghapus penduduk atas nama ' + nama+' ?')
      document.getElementById('formHapus').action='/hapus/'+id;
      })
    });
  </script>
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
