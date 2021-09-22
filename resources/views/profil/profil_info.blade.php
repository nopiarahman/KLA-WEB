@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">FORM UBAH ISI PROFIL</font></div>
                <div class="card-body">
                    {{ Form::model($profil, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{ Form::text('kategori',null,array('class'=>'form-control','placeholder' => 'JUDUL','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('kategori') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::textarea('isi',null,array('class'=>'form-control','placeholder' => 'Isi','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('isi') }}</span>
                        </div>

                        <a style="margin: 15px;" class="fa fa-home"  href="{{  url('/profil') }}" class="btn btn-link"><font size="2">KEMBALI</font></a>

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