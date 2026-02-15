@extends('layout.app')
@section('content')
<h2 class="mb-4">Daftar Buah Segar</h2>
<div class="row">
    @foreach($fruits as $f)
    <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
            <img src="{{ $f->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $f->name }}</h5>
                <p class="text-success fw-bold">Rp {{ number_format($f->price) }}</p>
                <a href="{{ route('cart.add', $f->id) }}" class="btn btn-primary w-100">Tambah ke Keranjang</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection