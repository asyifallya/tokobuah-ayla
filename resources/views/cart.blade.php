@extends('layout.app')

@section('content')
<div class="container">
    <h2>Keranjang Belanja</h2>
    <div class="row">
        <div class="col-md-8">
            <table class="table bg-white shadow-sm">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr>
                                <td>{{ $details['name'] }}</td>
                                <td>Rp {{ number_format($details['price']) }}</td>
                                <td>{{ $details['quantity'] }}</td>
                                <td>Rp {{ number_format($details['price'] * $details['quantity']) }}</td>
                                <td><a href="{{ route('cart.remove', $id) }}" class="btn btn-danger btn-sm">Hapus</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">Keranjang kosong</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h4>Checkout</h4>
                <hr>
                <form action="{{ route('checkout') }}" method="POST" id="main-checkout-form">
                    @csrf
                    <input type="hidden" name="total_price" value="{{ $total }}">
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>No HP</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Alamat Pengiriman</label>
                        <textarea name="address" class="form-control" required></textarea>
                    </div>
                    <h5>Total: Rp {{ number_format($total) }}</h5>
                    
                    <button type="submit" id="btn-proses-checkout" class="btn btn-success w-100 mt-3" {{ $total == 0 ? 'disabled' : '' }}>
                        Pesan Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Gunakan window.onload agar script jalan setelah semua elemen muncul
    window.onload = function() {
        const tombol = document.getElementById('btn-proses-checkout');
        const form = document.getElementById('main-checkout-form');

        if (tombol) {
            tombol.addEventListener('click', function(e) {
                // Cek apakah form sudah diisi (Nama, HP, Alamat)
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }

                // Hentikan pengiriman form otomatis
                e.preventDefault();

                // Munculkan Jam Pasir (Loading)
                Swal.fire({
                    title: 'Memproses Pesanan...',
                    text: 'Sedang menghubungi sistem FreshMart',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                    timer: 2000
                }).then(() => {
                    // Munculkan Centang Hijau
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Pesanan Anda segera diproses.',
                        confirmButtonColor: '#28a745',
                        confirmButtonText: 'Oke, Kirim!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Kirim data ke Controller Laravel
                            form.submit();
                        }
                    });
                });
            });
        }
    };
</script>
@endsection