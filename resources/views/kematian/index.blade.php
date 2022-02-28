@extends('layout.mainadmin')
@section('head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('page')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">DATA {{ $judul }}</div>
                    <div style="margin: 15px;">
                        <center>
                            <font size="5" color="#000">UNTUK MELIHAT, MENGUBAH, DAN MENGHAPUS DATA LENGKAP SURAT SILAHKAN
                                KLIK INFO SURAT.</font>
                        </center>
                    </div>
                    <div class="card-body">
                        <a style="float:right;" href="{{ url('kematian/tambah') }}" class="btn btn-primary">
                            <font size="2">TAMBAH DATA</font>
                        </a>

                        <table class="table table-hover table-striped" id="table">
                            <thead class="text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Tanggal Kematian</th>
                                    <th>Umur</th>
                                    <th>Tanggal Keluar Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suratKematian as $sk)
                                    <tr>
                                        <td>
                                            <center>{{ $loop->iteration }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $sk->penduduk->nama }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $sk->tanggalMeninggal }}</center>
                                        </td>
                                        <td>
                                            {{ cekUmur($sk->penduduk->tanggalLahir, $sk->tanggalMeninggal) }} Tahun
                                        </td>
                                        <td>
                                            <center>{{ $sk->tanggalKeluar }}</center>
                                        </td>
                                        <td>
                                            {{-- <center><a href="{{ url('suketb/edit/'.$suketb->id) }}"><i class="fa fa-pencil-square-o"></i>Info Surat</center> --}}
                                            <a href="{{ url('kematian/cetak/' . $sk->id) }}"><i
                                                    class="fa fa-table"></i>Cetak Surat</a>
                                            <button type="button" class="btn btn-sm btn-white text-danger border-danger"
                                                data-toggle="modal" data-target="#exampleModalCenter"
                                                data-id="{{ $sk->id }}" data-nama="{{ $sk->penduduk->nama }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Hapus-->
    <div class="modal fade exampleModalCenter" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus Surat Kematian</h5>
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
        $(document).ready(function() {
            $('#exampleModalCenter').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                var nama = button.data('nama')
                var modal = $(this)
                modal.find('.modal-text').text('Yakin ingin menghapus surat atas nama ' + nama + ' ?')
                document.getElementById('formHapus').action = '/kematian/hapus/' + id;
            })
        });
    </script>
@endsection
@section('script')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $('#table').DataTable({
            "pageLength": 25,
            "language": {
                "decimal": "",
                "emptyTable": "Tidak ada data tersedia",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                "infoFiltered": "(difilter dari _MAX_ total data)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Menampilkan _MENU_ data",
                "loadingRecords": "Loading...",
                "processing": "Processing...",
                "search": "Cari:",
                "zeroRecords": "Tidak ada data ditemukan",
                "paginate": {
                    "first": "Awal",
                    "last": "Akhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
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
