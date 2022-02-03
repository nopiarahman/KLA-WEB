@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">FORM TAMBAH PERANGKAT</font></div>
                <div class="card-body">
                    {{ Form::model($perangkat, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <!-- <div class="form-group">
                            {{Form::label('tanggal', 'Tanggal Berita');}}
                            {{ Form::date('tanggal',null,array('class'=>'form-control','placeholder' => 'Tanggal','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('rw') }}</span>
                        </div> -->
                        <!-- <div class="form-group">
                            {{Form::label('kategori', 'Kategori Berita');}}
                            {{ Form::select('kategori',array('kepemudaan' => 'Kepemudaan', 'gotongRoyong' => 'Gotong-royong','keagamaan'=>'Keagamaan'),null,array('class'=>'form-control')); }}
                            <span class="text-danger">{{ $errors->first('rt') }}</span>
                        </div> -->
                        <div class="form-group">
                            {{Form::label('nama', 'Nama');}}
                            {{ Form::text('nama',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>
                        <div class="form-group">
                            {{Form::label('jabatan', 'Jabatan');}}
                            {{ Form::text('jabatan',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>
                        <div class="form-group">
                            {{Form::label('foto', 'Foto Perangkat');}}
                            {{ Form::file('foto',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('dusun') }}</span>
                        </div>

                        <a style="margin:15px;" class="fa fa-home"  href="{{  url('/perangkat') }}" class="btn btn-link"><font size="2">KEMBALI</font></a>

                        <button style="float: right" type="submit" class="btn btn-primary">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection