@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><font size="4" color="black">PENGAJUAN SURAT</font></div>
                <div class="card-body">
                    <div class="form-group">
                        {{Form::label('tanggal', 'Tanggal pengajuan');}}
                        {{Form::date('tanggal',$id->tanggal,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('tanggal', 'Jenis Surat');}}
                        {{Form::text('jenis', $id->jenis,array('class'=>'form-control'));}}
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    </div>
                    @if($id->jenis=="sku")
                    <div class="form-group">
                        {{Form::label('tanggal', 'Resort');}}
                        {{Form::text('jenis', $id->resort,array('class'=>'form-control'));}}
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('tanggal', 'Perihal');}}
                        {{Form::text('jenis', $id->perihal,array('class'=>'form-control'));}}
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    </div>
                    @endif
                    <div class="form-group">
                        {{Form::label('deskripsi', 'deskripsi');}}
                        {{ Form::textarea('deskripsi',$id->deskripsi,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('dusun') }}</span>
                    </div>
                        <button style="float: right" type="submit" class="btn btn-danger">TOLAK PENGAJUAN</button>
                        <button style="float: right" type="button" class="btn btn-primary text-white" 
                        data-toggle="modal" 
                        data-target="#exampleModalCenter" 
                        data-id="{{$id->id}}" 
                        data-nama="{{$id->penduduk->nama}}">
                        <i class="fa fa-check" aria-hidden="true"></i> TERIMA PENGAJUAN</button>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><font size="4" color="black">DATA PENDUDUK</font></div>
                <div class="card-body">
                    {{ Form::model($penduduk, array('url'=> ['update',$id->id], 'files' => true)) }}
                    <div class="form-group">
                        {{Form::label('noKK', 'Nomor KK');}}
                        {{Form::text('noKK',$penduduk->kartuKeluarga->noKK,array('class'=>'form-control','placeholder' => 'RW','disabled')) }}
                        <span class="text-danger">{{ $errors->first('noKK') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('Kepala Keluarga', 'Nama Kepala Keluarga');}}
                        {{Form::text('Kepala Keluarga',$penduduk->kartuKeluarga->namaKepala,array('class'=>'form-control','disabled')) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('nik', 'NIK');}}
                        {{Form::text('nik',$penduduk->nik,array('class'=>'form-control','autofocus','disabled')) }}
                        <span class="text-danger">{{ $errors->first('nik') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('nama', 'Nama');}}
                        {{Form::text('nama',$penduduk->nama,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('jenis_kelamin', 'Jenis Kelamin');}}
                        {{ Form::radio('jenis_kelamin', 'Laki-Laki', true)}} Laki-Laki
                        {{ Form::radio('jenis_kelamin', 'Perempuan', false)}} Perempuan
                        <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('tempatLahir', 'Tempat Lahir');}}
                        {{Form::text('tempatLahir',$penduduk->tempatLahir,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('tempatLahir') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('tanggalLahir', 'Tanggal Lahir');}}
                        {{Form::date('tanggalLahir',$penduduk->tanggalLahir,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('tanggalLahir') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('agama', 'Agama');}}
                        {{Form::text('agama',$penduduk->agama,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('agama') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('pendidikan', 'Pendidikan');}}
                        {{Form::text('pendidikan',$penduduk->pendidikan,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('pendidikan') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('pekerjaan', 'Pekerjaan');}}
                        {{Form::text('pekerjaan',$penduduk->pekerjaan,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('goldarah', 'Gol darah');}}
                        {{ Form::radio('goldarah', 'A', true)}} A
                        {{ Form::radio('goldarah', 'B', false)}} B
                        {{ Form::radio('goldarah', 'AB', false)}} AB
                        {{ Form::radio('goldarah', 'O', false)}} O
                        <span class="text-danger">{{ $errors->first('goldarah') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('status', 'Status Pernikahan');}}
                        {{Form::text('status',$penduduk->status,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('hubungan', 'Hubungan Dalam Keluarga');}}
                        {{Form::text('hubungan',$penduduk->hubungan,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('hubungan') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('kewarganegaraan', 'Kewarganegaraan');}}
                        {{ Form::radio('kewarganegaraan', 'Warga Negara Indonesia', true)}} WNI 
                        {{ Form::radio('kewarganegaraan', 'Warga Negara Asing', false)}} WNA
                        <span class="text-danger">{{ $errors->first('kewarganegaraan') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('ayah', 'ayah');}}
                        {{Form::text('ayah',$penduduk->ayah,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('ayah') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('ibu', 'ibu');}}
                        {{Form::text('ibu',$penduduk->ibu,array('class'=>'form-control','disabled')) }}
                        <span class="text-danger">{{ $errors->first('ibu') }}</span>
                    </div>

                        {{-- <a style="margin:15px;" class="fa fa-home"  href="{{  url('/anggotaKeluarga',['id'=>$id->kartuKeluarga->id]) }}" class="btn btn-link"><font size="2">KEMBALI</font></a> --}}

                        {{-- <button style="float: right" type="submit" class="btn btn-primary"></button> --}}
                    {!! Form::close() !!}
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
          <h5 class="modal-title" id="exampleModalLongTitle">Terima Pengajuan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post" id="formHapus">
            @csrf
            <p class="modal-text"></p>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary"> <i class="fa fa-check" aria-hidden="true"></i> Terima </button>
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
      modal.find('.modal-text').text('Yakin ingin Pengajuan atas nama ' + nama+' ?')
      document.getElementById('formHapus').action='/terimaPengajuan/'+id;
      })
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
