@extends('admin.layout.app')

@section('content')
{{-- ini adalah halaman produk --}}
<h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kategori Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Kategori Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                           <th>Kategori Produk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($kategori_produk as $katprod)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $katprod->nama_kategori }}</td>
 
                                        </tr>
                                        @php
                                            $no++
                                        @endphp
                                         @endforeach
                                    </tbody>
                                </table>


@endsection