@extends('admin.layout.app')

@section('content')
{{-- ini adalah halaman produk --}}
<h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                           <th>Kode</th>
                                           <th>Nama</th>
                                           <th>Harga Jual</th>
                                           <th>Harga Beli</th>
                                           <th>Stok</th>
                                           <th>Minimal Stok</th>
                                           <th>Deskripsi</th>
                                           <th>Kategori Produk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($produk as $prod)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $prod->kode }}</td>
                                            <td>{{ $prod->nama }}</td>
                                            <td>{{ $prod->harga_jual }}</td>
                                            <td>{{ $prod->harga_beli }}</td>
                                            <td>{{ $prod->stok }}</td>
                                            <td>{{ $prod->min_stok }}</td>
                                            <td>{{ $prod->deskripsi }}</td>
                                            <td>{{ $prod->nama_kategori }}</td>
 
                                        </tr>
                                        @php
                                            $no++
                                        @endphp
                                         @endforeach
                                    </tbody>
                                </table>


@endsection