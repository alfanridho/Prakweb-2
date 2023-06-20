@extends('welcome.layout.app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
<h1>Detail Produk</h1>

@if ($produk)
    <p>ID: {{ $produk->id }}</p>
    <p>Nama: {{ $produk->nama }}</p>
    <p>Harga: {{ $produk->harga_jual }}</p>
    <!-- Tambahkan informasi lainnya yang ingin ditampilkan -->
@else
    <p>Produk tidak ditemukan.</p>
@endif
</div>

@endsection