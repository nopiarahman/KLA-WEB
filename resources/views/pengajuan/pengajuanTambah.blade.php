@extends('layout.mainadmin')
@section('page')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font size="4" color="black">FORM TAMBAH PENGAJUAN SURAT</font></div>
                <div class="card-body">
                    {{ Form::model($pengajuan, array('url'=> ['pengajuanSimpan',$id->id], 'files' => true, 'method' => $method)) }}
                    <div class="form-group">
                        {{Form::label('tanggal', 'Tanggal pengajuan');}}
                        {{Form::date('tanggal',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    </div>
                    <div class="form-group">
                        {{Form::label('tanggal', 'Jenis Surat');}}
                        {{-- {{Form::select('jenis', array('sktm' => 'Surat Keterangan Tidak Mampu', 'sku' => 'Surat Keterangan Usaha','skb' => 'Surat Keterangan Biasa'),array('class'=>'form-control jenisSurat'));}} --}}
                        <select name="jenis" id="jenisSurat">
                            <option value="sktm">Surat Keterangan Tidak Mampu</option>
                            <option value="sku">Surat Keterangan Usaha</option>
                            <option value="skb">Surat Keterangan Domisili</option>
                        </select>
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                        <script>
                            document.getElementById('jenisSurat').onchange = changeListener;
                            
                            function changeListener(){
                            var value = this.value
                              console.log(value);
                              let cash = document.querySelector('.sku');
                              if (value == "sku"){
                                cash.className ='sku';
                            }else{
                                  cash.className ='sku d-none';

                              }
                              
                            }
                          
                          </script>
                    </div>
                    <div class="sku d-none">
                        <div class="form-group">
                            {{Form::label('resort', 'Resort ');}}
                            {{Form::text('resort',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('resort') }}</span>
                        </div>
                        <div class="form-group">
                            {{Form::label('perihal', 'Perihal ');}}
                            {{Form::text('perihal',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('perihal') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('deskripsi', 'deskripsi');}}
                        {{ Form::textarea('deskripsi',null,array('class'=>'form-control')) }}
                        <span class="text-danger">{{ $errors->first('dusun') }}</span>
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
