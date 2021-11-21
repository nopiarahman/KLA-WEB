@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">FORM TAMBAH PENDUDUK</font></div>
                <div class="card-body">
                    {{ Form::model($penduduk, array('url'=> ['simpan',$id->id], 'files' => true, 'method' => $method)) }}
                    <div class="form-group">
                        {{Form::label('noKK', 'Nomor KK');}}
                        {{Form::text('noKK',$id->noKK,array('class'=>'form-control','placeholder' => 'RW','disabled')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('nik', 'NIK');}}
                        {{Form::text('nik',null,array('class'=>'form-control','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('nama', 'Nama');}}
                        {{Form::text('nama',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('jenis_kelamin', 'jenis_kelamin');}}
                        {{ Form::radio('jenis_kelamin', 'Laki-Laki', true)}} Laki-Laki
                        {{ Form::radio('jenis_kelamin', 'Perempuan', false)}} Perempuan
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('tempatLahir', 'tempatLahir');}}
                        {{Form::text('tempatLahir',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('tanggalLahir', 'tanggalLahir');}}
                        {{Form::text('tanggalLahir',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('agama', 'agama');}}
                        {{Form::text('agama',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('pendidikan', 'pendidikan');}}
                        {{Form::text('pendidikan',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('pekerjaan', 'pekerjaan');}}
                        {{Form::text('pekerjaan',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('goldarah', 'goldarah');}}
                        {{ Form::radio('goldarah', 'A', true)}} A
                        {{ Form::radio('goldarah', 'B', false)}} B
                        {{ Form::radio('goldarah', 'AB', false)}} AB
                        {{ Form::radio('goldarah', 'O', false)}} O
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('status', 'status');}}
                        {{Form::text('status',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('hubungan', 'hubungan');}}
                        {{Form::text('hubungan',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('kewarganegaraan', 'kewarganegaraan');}}
                        {{ Form::radio('kewarganegaraan', 'Warga Negara Indonesia', true)}} WNI 
                        {{ Form::radio('kewarganegaraan', 'Warga Negara Asing', false)}} WNA
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('ayah', 'ayah');}}
                        {{Form::text('ayah',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('ibu', 'ibu');}}
                        {{Form::text('ibu',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('rw') }}</span>
                    </div>

                        <a style="margin:15px;" class="fa fa-home"  href="{{  url('/penduduk') }}" class="btn btn-link"><font size="2">KEMBALI</font></a>

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
