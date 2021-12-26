@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">Tambah Anggota Keluarga</font></div>
                <div class="card-body">
                    {{ Form::model($penduduk, array('url'=> ['simpan',$id->id], 'files' => true, 'method' => $method)) }}
                    <div class="form-group"> 
                        {{Form::label('nomorKK', 'Nomor KK');}}
                        {{ Form::text('nomorKK',$id->noKK,array('class'=>'form-control','autofocus','readonly')) }}
                        {{ Form::hidden('kartuKeluarga_id', $id->id)}}
                        <span class="text-danger">{{ $errors->first('nomorKK') }}</span>
                    </div>
                    <div class="form-group"> 
                        {{Form::label('kepala', 'Kepala Keluarga');}}
                        {{ Form::text('kepala',$id->namaKepala,array('class'=>'form-control','autofocus','readonly')) }}
                        <span class="text-danger">{{ $errors->first('nomorKK') }}</span>
                    </div>
                    
                        <div class="form-group">
                            {{Form::label('nik', 'NIK');}}
                            {{ Form::text('nik',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('nik') }}</span>
                        </div>
                        <div class="form-group">
                            {{Form::label('nama_lengkap', 'Nama Lengkap');}}
                            {{ Form::text('nama_lengkap',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                        </div>
                        <div class="form-group">
                            {{Form::label('tempatLahir', 'Tempat lahir');}}
                            {{ Form::text('tempatLahir',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('tempatLahir') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('tanggalLahir', 'Tanggal lahir');}}
                            {{ Form::date('tanggalLahir',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('tanggalLahir') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('jenisKelamin', 'Jenis Kelamin');}}
                            {{ Form::radio('jenisKelamin','Laki-laki',array('class'=>'form-control')) }} Laki-laki
                            {{ Form::radio('jenisKelamin','Perempuan',array('class'=>'form-control')) }} Perempuan
                            <span class="text-danger">{{ $errors->first('jenisKelamin') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('agama', 'Agama');}}
                            {{ Form::text('agama',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('kewarganegaraan', 'Kewarganegaraan');}}
                            {{ Form::text('kewarganegaraan',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('goldarah', 'Golongan darah');}}
                            {{ Form::text('goldarah',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('pendidikan', 'Pendidikan Terakhir');}}
                            {{ Form::text('pendidikan',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('pekerjaan', 'Pekerjaan');}}
                            {{ Form::text('pekerjaan',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('statusPerkawinan', 'Status Perkawinan');}}
                            {{ Form::text('statusPerkawinan',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('hubungan', 'Hubungan dalam keluarga');}}
                            {{ Form::text('hubungan',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                        </div>                        
                        <div class="form-group">
                            {{Form::label('alamat', 'Alamat');}}
                            {{ Form::textarea('alamat',null,array('class'=>'form-control')) }}
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

<!--
|--------------------------------------------------------------------------
| @copyrigt BanDotz
|--------------------------------------------------------------------------
| app.view
|--------------------------------------------------------------------------
|
-->
