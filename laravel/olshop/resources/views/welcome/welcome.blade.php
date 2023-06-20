@extends('welcome.layout.app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach ($produk as $p)
        <div class="col mb-5">
            <div class="card h-100">
                <img class="card-img-top"
                    src="{{ asset('assets/online-shop-logo-template-design-illustration-vector.jpg') }}"
                    alt="...">
                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder">{{ $p->nama }}</h5>
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <span class="text-muted">{{ $p->kode }}</span>
                        </div>
                        <span class="text-muted">{{ $p->harga_jual }}</span>
                    </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                            <a href="{{ url('detail/'.$p->id) }}"
                                class="btn btn-warning">
                                <i class="fas fa-eye fa-beat"></i>
                            </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection