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
                        <span class="text-danger">{{ $errors->first('noKK') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('Kepala Keluarga', 'Nama Kepala Keluarga');}}
                        {{Form::text('Kepala Keluarga',$id->namaKepala,array('class'=>'form-control','disabled')) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('nik', 'NIK');}}
                        {{Form::text('nik',null,array('class'=>'form-control','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('nik') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('nama', 'Nama');}}
                        {{Form::text('nama',null,array('class'=>'form-control')) }}
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
                        {{Form::text('tempatLahir',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('tempatLahir') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('tanggalLahir', 'Tanggal Lahir');}}
                        {{Form::date('tanggalLahir',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('tanggalLahir') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('agama', 'Agama');}}
                        {{ Form::radio('agama', 'Islam', false)}} Islam
                        {{ Form::radio('agama', 'Kristen Protestan', false)}} Kristen Protestan                       
                        {{ Form::radio('agama', 'Kristen Katolik', false)}} Kristen Katolik
                        {{ Form::radio('agama', 'Hindu', false)}} Hindu
                        {{ Form::radio('agama', 'Buddha', false)}} Buddha
                        {{ Form::radio('agama', 'Khonghucu', false)}} Khonghucu

                        <span class="text-danger">{{ $errors->first('agama') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('pendidikan', 'Pendidikan');}}
                        {{Form::text('pendidikan',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('pendidikan') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('pekerjaan', 'Pekerjaan');}}
                        {{Form::text('pekerjaan',null,array('class'=>'form-control')) }}
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
                        {{ Form::radio('status', 'Kawin', true)}} Kawin
                        {{ Form::radio('status', 'Belum Kawin', false)}} Belum Kawin
                        {{ Form::radio('status', 'Janda', false)}} Janda
                        {{ Form::radio('status', 'Duda', false)}} Duda
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('hubungan', 'Hubungan Dalam Keluarga');}}                        
                        {{ Form::radio('hubungan', 'Kepala Keluarga', true)}} Kepala Keluarga
                        {{ Form::radio('hubungan', 'Istri', false)}} Istri
                        {{ Form::radio('hubungan', 'Anak', false)}} Anak
                        {{ Form::radio('hubungan', 'Cucu', false)}} Cucu
                        {{ Form::radio('hubungan', 'Family Lain', false)}} Family Lain
                        {{ Form::radio('hubungan', 'Orang Tua', false)}} Orang Tua
                        
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
                        {{Form::text('ayah',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('ayah') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('ibu', 'ibu');}}
                        {{Form::text('ibu',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('ibu') }}</span>
                    </div>

                        <a style="margin:15px;" class="fa fa-home"  href="{{  url('/anggotaKeluarga',['id'=>$id->id]) }}" class="btn btn-link"><font size="2">KEMBALI</font></a>

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
