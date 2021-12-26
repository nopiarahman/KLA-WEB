@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">FORM TAMBAH KK</font></div>
                <div class="card-body">
                    {{ Form::model($kk, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{Form::label('noKK', 'Nomor KK');}}
                            {{ Form::text('noKK',null,array('class'=>'form-control','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('rw') }}</span>
                        </div>
                        <div class="form-group">
                            {{Form::label('namaKepala', 'Nama Kepala Keluarga');}}
                            {{ Form::text('namaKepala',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>
                        <div class="form-group">
                            {{Form::label('alamat', 'Alamat Rumah');}}
                            {{ Form::text('alamat',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>
                        <div class="form-group">
                            {{Form::label('rt', 'RT');}}
                            {{ Form::text('rt',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('rw', 'RW');}}
                            {{ Form::text('rw',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('kelurahan', 'Kelurahan');}}
                            {{ Form::text('kelurahan',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('kecamatan', 'Kecamatan');}}
                            {{ Form::text('kecamatan',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('kabupaten', 'Kabupaten');}}
                            {{ Form::text('kabupaten',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('kodePos', 'Kode Pos');}}
                            {{ Form::text('kodePos',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('provinsi', 'Provinsi');}}
                            {{ Form::text('provinsi',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>                        
                        <a style="margin:15px;" class="fa fa-home"  href="{{  url('/kk') }}" class="btn btn-link"><font size="2">KEMBALI</font></a>
                        <button style="float: right" type="submit" class="btn btn-primary">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection