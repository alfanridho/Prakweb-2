@extends('layouts.app')
@section('content')
    <h2 style="text-align: center;">Halo {{ Auth::user()->name }} </h2>
    <h3 style="text-align: center;">Selamat Datang di Halaman Frontend</h3>
@endsection