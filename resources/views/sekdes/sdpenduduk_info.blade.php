@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="5" color="black">FORM INFORMASI PENDUDUK</font>


                </div>
                <div class="card-body">
                    {{ Form::model($penduduk, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{ Form::label('RW', 'RW') }}
                            {{ Form::number('rw',null,array('class'=>'form-control','placeholder' => 'RW','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('rw') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('RT', 'RT') }}
                            {{ Form::number('rt',null,array('class'=>'form-control','placeholder' => 'RT','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('rt') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('DUSUN', 'DUSUN') }}
                            {{ Form::text('dusun',null,array('class'=>'form-control','placeholder' => 'DUSUN','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('ALAMAT', 'ALAMAT') }}
                            {{ Form::text('alamat',null,array('class'=>'form-control','placeholder' => 'ALAMAT','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('KODE KELUARGA', 'KODE KELUARGA') }}
                            {{ Form::text('kode_keluarga',null,array('class'=>'form-control','placeholder' => 'NO. KK/ KODE KELUARGA','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('kode_keluarga') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('KEPALA KELUARGA', 'KEPALA KELUARGA') }}
                            {{ Form::text('nm_kpl_keluarga',null,array('class'=>'form-control','placeholder' => 'NAMA KEPALA KELUARGA','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('nm_kpl_keluarga') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('NOMOR URUT KELUARGA', 'NOMOR URUT KELUARGA') }}
                            {{ Form::number('no_urut_keluarga',null,array('class'=>'form-control','placeholder' => 'NOMOR URUT KELUARGA','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('no_urut_keluarga') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('NIK', 'NIK') }}
                            {{ Form::text('nik',null,array('class'=>'form-control','placeholder' => 'NIK PENDUDUK','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('nik') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('NAMA', 'NAMA') }}
                            {{ Form::text('nm_anggota_keluarga',null,array('class'=>'form-control','placeholder' => 'NAMA PENDUDUK','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('nm_anggota_keluarga') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('Jenis Kelamin', 'JENIS KELAMIN') }}
                            <br>
                            {{ Form::radio('jenis_kelamin', 'LAKI-LAKI', true)}} Laki-Laki
                            {{ Form::radio('jenis_kelamin', 'PEREMPUAN', false)}} Perempuan
 
                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('hubungan', 'HUBUNGAN KELUARGA') }}
                            <br>
                            {{ Form::radio('hubungan', 'Kepala Keluarga', true)}} Kepala Keluarga
                            {{ Form::radio('hubungan', 'Istri', false)}} Istri
                            {{ Form::radio('hubungan', 'Anak Kandung', false)}} Anak Kandung
 
                            <span class="text-danger">{{ $errors->first('hubungan') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('TEMPAT LAHIR', 'TEMPAT LAHIR') }}
                            {{ Form::text('tpt_lahir',null,array('class'=>'form-control','placeholder' => 'TEMPAT LAHIR','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('tpt_lahir') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('TANGGAL LAHIR', 'TANGGAL LAHIR') }}
                            {{ Form::text('tgl_lahir',null,array('class'=>'form-control','placeholder' => 'TANGGAL LAHIR','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('tgl_lahir') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('USIA', 'USIA') }}
                            {{ Form::number('usia',null,array('class'=>'form-control','placeholder' => 'USIA PENDUDUK','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('usia') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('status', 'STATUS PERKAWINAN') }}
                            <br>
                            {{ Form::radio('status', 'Kawin', true)}} Kawin
                            {{ Form::radio('status', 'Belum Kawin', false)}} Belum Kawin
                            {{ Form::radio('status', 'Cerai Hidup', false)}} Cerai Hidup
                            {{ Form::radio('status', 'Cerai Mati', false)}} Cerai Mati
 
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('AGAMA', 'AGAMA') }}
                            {{ Form::text('agama',null,array('class'=>'form-control','placeholder' => 'AGAMA','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('goldarah', 'GOLONGAN DARAH') }}
                            <br>
                            {{ Form::radio('goldarah', 'Tidak Tahu', true)}} Tidak Tahu
                            {{ Form::radio('goldarah', 'A', false)}} A
                            {{ Form::radio('goldarah', 'B', false)}} B
                            {{ Form::radio('goldarah', 'AB', false)}} AB
                            {{ Form::radio('goldarah', 'O', false)}} O
 
                            <span class="text-danger">{{ $errors->first('goldarah') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('kewarganegaraan', 'KEWARGANEGARAAN') }}
                            <br>
                            {{ Form::radio('kewarganegaraan', 'Warga Negara Indonesia', true)}} WNI 
                            {{ Form::radio('kewarganegaraan', 'Warga Negara Asing', false)}} WNA
 
                            <span class="text-danger">{{ $errors->first('kewarganegaraan') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('ETNIS / SUKU', 'ETNIS / SUKU') }}
                            {{ Form::text('etnis_suku',null,array('class'=>'form-control','placeholder' => 'ETNIS / SUKU','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('etnis_suku') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('PENDIDIKAN TERAKHIR', 'PENDIDIKAN TERAKHIR') }}
                            {{ Form::text('pendidikan',null,array('class'=>'form-control','placeholder' => 'PENDIDIKAN TERAKHIR','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('pendidikan') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('PEKERJAAN', 'PEKERJAAN') }}
                            {{ Form::text('pekerjaan',null,array('class'=>'form-control','placeholder' => 'PEKERJAAN','autofocus','rows'=>'3',)) }}
                            <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                        </div>
                        
                        <a style="margin: 15px;" class="fa fa-home"  href="{{  url('/sdpenduduk') }}" class="btn btn-link"><font size="2">KEMBALI</font></a>

                    {!! Form::close() !!}
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