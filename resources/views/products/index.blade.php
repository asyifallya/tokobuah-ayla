@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Koleksi <span class="text-leaf">Buah Segar</span></h2>
        <p class="text-muted">Pilih buah favoritmu dan tambahkan ke keranjang.</p>
        <div class="mx-auto bg-success mt-2" style="width: 50px; height: 3px;"></div>
    </div>

    @if($fruits->count() > 0)
        <div class="row g-4">
            @foreach($fruits as $fruit)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden card-hover">
                    <img src="{{ $fruit->image }}" class="card-img-top" alt="{{ $fruit->name }}" style="height: 180px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="fw-bold mb-1">{{ $fruit->name }}</h6>
                        <p class="text-leaf fw-bold mb-2">Rp {{ number_format($fruit->price, 0, ',', '.') }}</p>
                        
                        <form action="{{ route('cart.add', $fruit->id) }}" method="POST">
    @csrf 
    <button type="submit" class="btn btn-leaf w-100 rounded-pill fw-bold">
        + Keranjang
    </button>
</form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="text-center">
            <p class="text-muted">Maaf, saat ini stok buah belum tersedia.</p>
        </div>
    @endif
</div>

<style>
    .card-hover { transition: 0.3s; }
    .card-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
</style>
@endsection