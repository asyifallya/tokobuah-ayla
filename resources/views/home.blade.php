@extends('layouts.app')

@section('content')
<div class="hero-section" style="background: linear-gradient(135deg, #fafff5 0%, #ffffff 100%); padding: 100px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <span class="badge bg-soft-orange text-white mb-3 px-3 py-2 rounded-pill">🍎 100% Organik & Segar</span>
                <h1 class="display-3 fw-bold mb-4" style="line-height: 1.2;">
                    Nikmati Keajaiban <br><span style="color: var(--leaf-green)">Buah Segar</span> Setiap Hari
                </h1>
                <p class="lead text-muted mb-5">
                    Kami menyediakan berbagai macam buah pilihan langsung dari kebun dengan kualitas premium dan harga yang tetap bersahabat untuk kantong Anda.
                </p>
                <div class="d-flex gap-3">
                    <a href="/products" class="btn btn-leaf btn-lg shadow">Mulai Belanja Sekarang</a>
                    <a href="#featured" class="btn btn-outline-secondary btn-lg rounded-pill px-4">Lihat Produk</a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <img src="https://img.freepik.com/free-photo/vibrant-collection-fresh-fruit-leafy-greens-generative-ai_188544-12732.jpg" 
                     class="img-fluid rounded-4 shadow-lg" alt="Fresh Fruits">
            </div>
        </div>
    </div>
</div>

<div id="featured" class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Kenapa Memilih <span class="text-leaf">FreshMart?</span></h2>
        <div class="mx-auto bg-success mt-2" style="width: 60px; height: 4px; border-radius: 10px;"></div>
    </div>
    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="p-4 border-0 shadow-sm card h-100 rounded-4 hover-lift">
                <div class="mb-3 fs-1">🚚</div>
                <h5 class="fw-bold">Pengiriman Cepat</h5>
                <p class="text-muted small">Buah sampai di tangan Anda dalam kondisi tetap dingin dan segar.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border-0 shadow-sm card h-100 rounded-4 hover-lift">
                <div class="mb-3 fs-1">💰</div>
                <h5 class="fw-bold">Harga Terjangkau</h5>
                <p class="text-muted small">Kualitas premium tidak harus mahal. Kami berikan harga terbaik.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border-0 shadow-sm card h-100 rounded-4 hover-lift">
                <div class="mb-3 fs-1">🌟</div>
                <h5 class="fw-bold">Kualitas Terjamin</h5>
                <p class="text-muted small">Setiap buah melewati proses sortir ketat sebelum dikirim ke rumah Anda.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-lift { transition: 0.3s; }
    .hover-lift:hover { transform: translateY(-10px); }
    .bg-soft-orange { background-color: #f39c12; }
</style>
@endsection