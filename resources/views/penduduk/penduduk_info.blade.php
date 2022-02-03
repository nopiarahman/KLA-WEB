@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">EDIT PENDUDUK</font></div>
                <div class="card-body">
                    {{ Form::model($penduduk, array('url'=> ['update',$id->id], 'files' => true, 'method' => $method)) }}
                    <div class="form-group">
                        {{Form::label('noKK', 'Nomor KK');}}
                        {{Form::text('noKK',$id->kartuKeluarga->noKK,array('class'=>'form-control','placeholder' => 'RW','disabled')) }}
                        <span class="text-danger">{{ $errors->first('noKK') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('Kepala Keluarga', 'Nama Kepala Keluarga');}}
                        {{Form::text('Kepala Keluarga',$id->kartuKeluarga->namaKepala,array('class'=>'form-control','disabled')) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('nik', 'NIK');}}
                        {{Form::text('nik',$id->nik,array('class'=>'form-control','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('nik') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('nama', 'Nama');}}
                        {{Form::text('nama',$id->nama,array('class'=>'form-control')) }}
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
                        {{Form::text('tempatLahir',$id->tempatLahir,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('tempatLahir') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('tanggalLahir', 'Tanggal Lahir');}}
                        {{Form::date('tanggalLahir',$id->tanggalLahir,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('tanggalLahir') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('agama', 'Agama');}}
                        {{Form::text('agama',$id->agama,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('agama') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('pendidikan', 'Pendidikan');}}
                        {{Form::text('pendidikan',$id->pendidikan,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('pendidikan') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('pekerjaan', 'Pekerjaan');}}
                        {{Form::text('pekerjaan',$id->pekerjaan,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('goldarah', 'Gol darah');}}
                        {{ Form::radio('goldarah', 'A', true)}} A
                        {{ Form::radio('goldarah', 'B', false)}} B
                        {{ Form::radio('goldarah', 'AB', false)}} AB
                        {{ Form::radio('goldarah', 'O', false)}} O
                        {{ Form::radio('goldarah', '-', false)}} Tidak Tahu
                        <span class="text-danger">{{ $errors->first('goldarah') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('status', 'Status Pernikahan');}}
                        {{Form::text('status',$id->status,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('hubungan', 'Hubungan Dalam Keluarga');}}
                        {{Form::text('hubungan',$id->hubungan,array('class'=>'form-control')) }}
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
                        {{Form::text('ayah',$id->ayah,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('ayah') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('ibu', 'ibu');}}
                        {{Form::text('ibu',$id->ibu,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('ibu') }}</span>
                    </div>

                        <a style="margin:15px;" class="fa fa-home"  href="{{  url('/anggotaKeluarga',['id'=>$id->kartuKeluarga->id]) }}" class="btn btn-link"><font size="2">KEMBALI</font></a>

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
