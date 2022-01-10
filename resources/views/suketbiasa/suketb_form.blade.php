@extends('layout.mainadmin')
@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection
@section('page')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">FORM TAMBAH SURAT KETERANGAN DOMISILI</font></div>
                <div class="card-body">
                    {{ Form::model($srt_ket_biasa, array('action' => $action, 'files' => true, 'method' => $method)) }}
                    <div class="form-group">
                        {{Form::label('tanggal', 'Tanggal pengajuan');}}
                        {{Form::date('tgl_keluar',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    </div>
                    {{-- {{Form::select('penduduk_id',array('class'=>'cari, form-control'));}}
                    <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                </div> --}}
                <div class="form-group ">
                        {{Form::label('penduduk_id', 'NIK Penduduk')}}
                        <select class="cari form-group form-control" name="penduduk_id"></select>
                        {{-- <input type="text" class="form-control @error('objek') is-invalid @enderror" name="objek" value="{{old('objek')}}"> --}}
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
                        <script type="text/javascript">
                            $('.cari').select2({
                                                placeholder:'CARI PENDUDUK',
                                                ajax: {
                                                url: '/cariPenduduk',
                                                dataType: 'json',
                                                delay: 250,
                                                processResults: function (data) {
                                                    return {
                                                    results:  $.map(data, function (item) {
                                                        return {
                                                        text: item.nik+" "+item.nama,/* memasukkan text di option => <option>namaSurah</option> */
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