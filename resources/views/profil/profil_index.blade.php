@extends('layout.mainadmin')
@section('page')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >DATA {{ $judul }}</div>
                <div style="margin: 15px;">
                   <center><font size="5" color="#000" >UNTUK MENGUBAH ISI KLIK INFO PROFIL.</font></center>
                </div>
                <div class="card-body">
        <table class="table table-hover table-striped table-bordered" >
                    <thead class="text-center">
                        <tr >
                            <th>JUDUL</th>

                        </tr>
                    </thead>
        <tbody>
           @foreach ($profils as $prof)
             <tr>
                    
                    <td><center>{{ $prof->kategori }}</center></td>
                    <td><center><a href="{{ url('profil/edit/'.$prof->id) }}"><i class="fa fa-pencil-square-o"></i>Info Profil</center></td>
                    
                </tr> 
            @endforeach   
 
                </tbody>
                </table>
                {{ $profils->links() }}
 
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