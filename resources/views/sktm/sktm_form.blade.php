@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">FORM TAMBAH SURAT KETERANGAN TIDAK MAMPU</font></div>
                <div class="card-body">
                    {{ Form::model($srt_ket_tdk_mampu, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group" hidden="" >
                            {{ Form::select('no', array('00' => 'sktm',
                            ), 'Psc',array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('no') }}</span>
                        </div>
                        
                        <div class="form-group">
                            {{ Form::text('nama',null,array('class'=>'form-control','placeholder' => 'NAMA PENDUDUK','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('jenkel', 'JENIS KELAMIN') }}
                            <br>
                            {{ Form::radio('jenkel', 'LAKI-LAKI', true)}} Laki-Laki
                            {{ Form::radio('jenkel', 'PEREMPUAN', false)}} Perempuan
 
                            <span class="text-danger">{{ $errors->first('jenkel') }}</span>
                        </div>
                        <div class="form-group">
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
                            {{ Form::text('agama',null,array('class'=>'form-control','placeholder' => 'AGAMA','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('pekerjaan',null,array('class'=>'form-control','placeholder' => 'PEKERJAAN','autofocus','rows'=>'3',)) }}
                            <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('rt_rw',null,array('class'=>'form-control','placeholder' => 'RT/RW','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('rt_rw') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('desa',null,array('class'=>'form-control','placeholder' => 'DESA','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('desa') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('kec',null,array('class'=>'form-control','placeholder' => 'KECAMATAN','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('kec') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('kab',null,array('class'=>'form-control','placeholder' => 'KABUPATEN','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('kab') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('no_reg',null,array('class'=>'form-control','placeholder' => 'NOMOR REGISTRASI','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('no_reg') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('tgl_reg',null,array('class'=>'form-control','placeholder' => 'TANGGAL REGISTRASI','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('tgl_reg') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('tgl_keluar',null,array('class'=>'form-control','placeholder' => 'TANGGAL DIKELUARKAN SURAT','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('tgl_keluar') }}</span>
                        </div>


                        <a style="margin:15px;" class="fa fa-home"  href="{{  url('/sktm') }}" class="btn btn-link"><font size="2">KEMBALI</font></a>

                        <button style="float: right" type="submit" class="btn btn-primary">{{ $btn_submit }}</button>
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