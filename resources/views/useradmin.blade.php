@extends('layout.mainadmin')
@section('titleadmin', 'KASANG LOPAK ALAI')
@section('page')
    <div class="h1">SELAMAT DATANG, {{ auth()->user()->name }}</div>
@endsection
