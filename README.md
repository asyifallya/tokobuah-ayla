# 🥑 FreshMart Solusi Belanja Buah Segar Digital
FreshMart adalah platform e-commerce berbasis web yang dirancang untuk memberikan pengalaman belanja buah premium secara daring. Aplikasi ini mengedepankan kemudahan navigasi, visual produk yang menarik, dan proses manajemen keranjang yang efisien.

Aplikasi ini dibangun menggunakan framework **Laravel 12**, **Tailwind CSS**, dan **Alpine.js** untuk menciptakan antarmuka yang responsif dan interaktif (low-friction shopping).

## 📸 Analisis Antarmuka & Fitur Utama
Berdasarkan implementasi antarmuka yang telah dibangun, berikut adalah fitur-fitur unggulannya:

## 📌 Demo Tampilan Aplikasi
🏠 Halaman Home
Halaman depan dirancang untuk langsung menarik perhatian pengguna dengan Copywriting yang kuat.

<img width="1901" height="938" alt="image" src="https://github.com/user-attachments/assets/3a7c15cf-60f3-4a31-91b9-de970660552d" />

## 🍎 Halaman Daftar Buah

<img width="1885" height="833" alt="image" src="https://github.com/user-attachments/assets/28db976e-30ff-415b-9f5b-bca90b19cd74" />

Menampilkan koleksi buah lengkap dengan:

Gambar produk

Nama produk

Harga

Tombol tambah ke keranjang

## 🛒 Halaman Keranjang
Fitur keranjang yang informatif untuk memantau pesanan sebelum checkout.

<img width="1888" height="831" alt="image" src="https://github.com/user-attachments/assets/2185cf77-56d9-4767-a864-d5882c957db4" />

Notifikasi Real-time: Pesan sukses (Contoh: "Alpukat Mentega berhasil ditambah!") muncul saat produk dimasukkan ke keranjang.

Ringkasan Pesanan: Perhitungan subtotal dan total harga secara otomatis.

Badge Keranjang: Indikator jumlah item (angka merah) pada ikon keranjang di navigasi atas.

Menampilkan:

Daftar produk yang dipilih

Harga per item

Jumlah

Subtotal

Total keseluruhan

Tombol checkout

## ⭐️ Section Keunggulan

Pengiriman Cepat

Harga Terjangkau

Kualitas Terjamin

## ✨ Fitur Utama
✅ Tampilan modern dan responsive

✅ Navigasi halaman (Home, Daftar Buah, Keranjang)

✅ Tambah produk ke keranjang

✅ Hitung subtotal dan total otomatis

✅ Notifikasi saat produk berhasil ditambahkan

✅ Badge jumlah item pada ikon keranjang

✅ UI bersih dan user-friend

Headline Dinamis: "Keajaiban Buah Segar Setiap Hari" yang menekankan kualitas produk.

Visualisasi Produk: Penggunaan gambar berkualitas tinggi untuk membangun kepercayaan pelanggan.

Call to Action (CTA): Tombol "Mulai Belanja Sekarang" untuk mengarahkan pengguna langsung ke katalog.

## Keunggulan Layanan (Value Proposition)
Seksi ini menjelaskan mengapa pelanggan harus memilih FreshMart:

<img width="1891" height="827" alt="image" src="https://github.com/user-attachments/assets/d5a3a0e5-9129-4578-972b-d2894901cf88" />

Pengiriman Cepat: Menjamin kondisi buah tetap dingin dan segar sampai di tujuan.

Harga Terjangkau: Strategi harga kompetitif tanpa mengurangi kualitas premium.

Kualitas Terjamin: Proses sortir ketat untuk setiap produk yang dikirim.

## Katalog Produk Interaktif
Menampilkan daftar buah dengan informasi harga yang jelas dan sistem interaksi cepat.

<img width="1919" height="950" alt="image" src="https://github.com/user-attachments/assets/e3274032-b98e-4ca3-8c37-17da3cd29cb4" />

Koleksi Buah Segar: Tampilan kartu (card) produk yang rapi (Contoh: Apel Fuji, Jeruk Sunkist, Alpukat Mentega).

Sistem Add-to-Cart: Tombol "+ Keranjang" yang terintegrasi dengan sistem session untuk penyimpanan pesanan sementara.

## 🧠 Struktur Logika (Alur Data)
Alur Pemilihan Produk (Create to Cart):
<img width="1536" height="1024" alt="image" src="https://github.com/user-attachments/assets/00887441-ee15-40f4-84d5-6eac6170bc44" />

Frontend: Pengguna mengklik tombol "+ Keranjang" pada produk pilihan.

Controller: CartController menangani request, memeriksa ketersediaan stok, dan memasukkan data ke dalam session atau tabel carts.

Feedback: Sistem memicu alert sukses dan memperbarui badge jumlah item di Navbar secara instan.

Manajemen Keranjang (Read & Update):

Sistem memanggil data dari database/session untuk menampilkan nama produk, harga satuan, jumlah, dan subtotal di halaman /keranjang.

## 🛠️ Detail Teknis (Tech Stack)
Framework: Laravel 12 (Arsitektur MVC).

Database: MySQL (Tabel users, products, categories, dan orders).

Frontend:

Tailwind CSS: Untuk desain UI yang bersih dan layout grid yang responsif.

Alpine.js: Mengelola interaksi ringan seperti notifikasi dismissible dan pembaruan UI tanpa reload.

Localization: Laravel Carbon untuk pengaturan waktu transaksi.

## 🔧 Panduan Instalasi
Jika Anda ingin menjalankan proyek FreshMart ini secara lokal:

Clone Repository:

Bash
git clone https://github.com/username/freshmart.git
cd freshmart
Install Dependencies:

Bash
composer install
npm install && npm run build
Setup Environment:

Salin .env.example menjadi .env.
Buat database bernama freshmart_db.
Sesuaikan konfigurasi database di .env.

Migrate & Seed:

Bash
php artisan key:generate
php artisan migrate --seed
Jalankan Aplikasi:

Bash
php artisan serve

## 📈 Pengembangan Selanjutnya

Beberapa fitur yang bisa ditambahkan:

🔐 Sistem login & register
💳 Integrasi payment gateway
📦 Sistem stok produk
📊 Dashboard admin
🧾 Riwayat transaksi
🌐 Backend menggunakan Laravel / Node.js
🗄 Database MySQL / MongoDB

## 👩‍💻 Author
Ayla / Asyifa
GitHub: https://github.com/asyifallya

## 📜 Lisensi
Project ini dibuat untuk kebutuhan pembelajaran dan pengembangan skill frontend.

## ⚠️ Troubleshooting
Gambar Produk Tidak Muncul: Pastikan Anda sudah menjalankan perintah php artisan storage:link agar file di folder storage dapat diakses secara publik.

**Error Session Keranjang:** Jika item keranjang hilang setelah refresh, pastikan SESSION_DRIVER pada .env diatur ke file atau database.

Dibuat dengan dedikasi untuk kesegaran harian Anda 🍏
