@extends('layout.mainadmin')
@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection
@section('page')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <font size="4" color="black">FORM TAMBAH SURAT KETERANGAN KEMATIAN</font>
                    </div>
                    <div class="card-body">
                        {{ Form::model($suratKematian, ['action' => $action, 'files' => true, 'method' => $method]) }}
                        <div class="form-group">
                            {{ Form::label('tanggal', 'Tanggal Keluar Surat') }}
                            {{ Form::date('tanggalKeluar', null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('tanggalKeluar') }}</span>
                        </div>
                        <div class="form-group ">
                            {{ Form::label('penduduk_id', 'NIK Penduduk') }}
                            <select class="cari form-group form-control" name="penduduk_id"></select>
                            {{-- <input type="text" class="form-control @error('objek') is-invalid @enderror" name="objek" value="{{old('objek')}}"> --}}
                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
                            <script type="text/javascript">
                                $('.cari').select2({
                                    placeholder: 'CARI PENDUDUK',
                                    ajax: {
                                        url: '/cariPenduduk',
                                        dataType: 'json',
                                        delay: 250,
                                        processResults: function(data) {
                                            return {
                                                results: $.map(data, function(item) {
                                                    return {
                                                        text: item.nik + " " + item.nama,
                                                        /* memasukkan text di option => <option>namaSurah</option> */
                                                        id: item.id /* memasukkan value di option => <option value=id> */
                                                    }
                                                })
                                            };
                                        },
                                        cache: true
                                    }
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            {{ Form::label('tanggalMeninggal', 'Tanggal Kematian') }}
                            {{ Form::date('tanggalMeninggal', null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('tanggalMeninggal') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('di', 'Tempat') }}
                            {{ Form::text('di', null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('di') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('karena', 'Sebab') }}
                            {{ Form::text('karena', null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('karena') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('pelapor', 'Pelapor') }}
                            {{ Form::text('pelapor', null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('pelapor') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('hubungan', 'Hubungan') }}
                            {{ Form::text('hubungan', null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('hubungan') }}</span>
                        </div>
                        <a style="margin:15px;" class="fa fa-home" href="{{ url('/sktm') }}" class="btn btn-link">
                            <font size="2">KEMBALI</font>
                        </a>

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
