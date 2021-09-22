@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">FORM INFO SURAT KETERANGAN BIASA</font>

                </div>
                <div class="card-body">
                    {{ Form::model($srt_ket_biasa, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group" hidden="" >
                            {{ Form::label('JENIS SURAT', 'JENIS SURAT') }}
                            {{ Form::select('no', array('00' => 'Surat Keterangan Biasa',
                            ), 'Psc',array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('no') }}</span>
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('NAMA ', 'NAMA ') }}
                            {{ Form::text('nama',null,array('class'=>'form-control','placeholder' => 'NAMA PENDUDUK','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('Tempat, Tanggal Lahir', 'Tempat, Tanggal Lahir') }}
                            {{ Form::text('tpt_tgl_lhr',null,array('class'=>'form-control','placeholder' => 'TEMPAT TANGGAL LAHIR','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('tpt_tgl_lhr') }}</span>
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
                            {{ Form::label('jenkel', 'JENIS KELAMIN') }}
                            <br>
                            {{ Form::radio('jenkel', 'LAKI-LAKI', true)}} Laki-Laki
                            {{ Form::radio('jenkel', 'PEREMPUAN', false)}} Perempuan
 
                            <span class="text-danger">{{ $errors->first('jenkel') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('goldar', 'GOLONGAN DARAH') }}
                            <br>
                            {{ Form::radio('goldar', '-', true)}} Tidak Tahu
                            {{ Form::radio('goldar', 'A', false)}} A
                            {{ Form::radio('goldar', 'B', false)}} B
                            {{ Form::radio('goldar', 'AB', false)}} AB
                            {{ Form::radio('goldar', 'O', false)}} O
 
                            <span class="text-danger">{{ $errors->first('goldarah') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('NIK PENDUDUK ', 'NIK PENDUDUK ') }}
                            {{ Form::text('nik',null,array('class'=>'form-control','placeholder' => 'NIK PENDUDUK','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('nik') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('AGAMA ', 'AGAMA ') }}
                            {{ Form::text('agama',null,array('class'=>'form-control','placeholder' => 'AGAMA','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('PEKERJAAN ', 'PEKERJAAN ') }}
                            {{ Form::text('pekerjaan',null,array('class'=>'form-control','placeholder' => 'PEKERJAAN','autofocus','rows'=>'3',)) }}
                            <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('RT/RW ', 'RT/RW ') }}
                            {{ Form::text('rt_rw',null,array('class'=>'form-control','placeholder' => 'RT/RW','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('rt_rw') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('ALAMAT ', 'ALAMAT ') }}
                            {{ Form::text('alamat',null,array('class'=>'form-control','placeholder' => 'ALAMAT','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('TANGGAL SURAT KELUAR ', 'TANGGAL SURAT KELUAR ') }}
                            {{ Form::text('tgl_keluar',null,array('class'=>'form-control','placeholder' => 'TANGGAL DIKELUARKAN SURAT','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('tgl_keluar') }}</span>
                        </div>


                        <a style="margin:15px;" class="fa fa-home"  href="{{  url('/sdskb') }}" class="btn btn-link"><font size="2">KEMBALI</font></a>

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