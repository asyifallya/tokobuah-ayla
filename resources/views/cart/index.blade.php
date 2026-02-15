@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">🛒 Keranjang Belanja</h2>

    {{-- Notifikasi Sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('cart') && count(session('cart')) > 0)
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm p-3 mb-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp
                            @foreach(session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $details['image'] }}" width="50" class="rounded me-3">
                                            <span class="fw-bold">{{ $details['name'] }}</span>
                                        </div>
                                    </td>
                                    <td>Rp {{ number_format($details['price'], 0, ',', '.') }}</td>
                                    <td>{{ $details['quantity'] }}</td>
                                    <td class="fw-bold text-success">Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</td>
                                    <td>
                                        {{-- Form Hapus Produk --}}
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            {{-- ID dikirim lewat sini, bukan lewat route(...) --}}
                                            <input type="hidden" name="id" value="{{ $id }}">
                                            <button type="submit" class="btn btn-sm btn-outline-danger">✕</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm p-4 bg-light">
                    <h5 class="fw-bold mb-3">Ringkasan Pesanan</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Total:</span>
                        <span class="h4 fw-bold text-success">Rp {{ number_format($total, 0, ',', '.') }}</span>
                    </div>
                    <a href="#" class="btn btn-primary w-100">Checkout (Belum Siap)</a>
                </div>
            </div>
        </div>
    @else
        <div class="text-center py-5">
            <p class="text-muted">Keranjang Anda masih kosong.</p>
            <a href="/" class="btn btn-success">Mulai Belanja</a>
        </div>
    @endif
</div>
@endsection