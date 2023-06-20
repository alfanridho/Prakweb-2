@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 style="text-align: center">Selamat {{ Auth::user()->name }} berhasil melakukan registrasi</h3>
                <h5 style="text-align: center">Silahkan Logout dan Login Kembali</h5>
            </div>
        </div>
    </div>
</div>
@endsection
