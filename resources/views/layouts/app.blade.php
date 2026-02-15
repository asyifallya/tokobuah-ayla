<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshMart - Toko Buah Segar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --leaf-green: #2ecc71;
            --dark-green: #27ae60;
            --soft-orange: #f39c12;
        }
        body { 
            font-family: 'Poppins', sans-serif; 
            background-color: #fcfcfc; 
            color: #2c3e50;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .navbar-brand { font-weight: 700; font-size: 1.5rem; color: var(--leaf-green) !important; }
        .nav-link { font-weight: 500; transition: 0.3s; }
        .nav-link:hover { color: var(--leaf-green) !important; }
        
        /* Custom Button */
        .btn-leaf {
            background-color: var(--leaf-green);
            color: white;
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 600;
            transition: 0.3s;
            border: none;
        }
        .btn-leaf:hover {
            background-color: var(--dark-green);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.3);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand" href="/">FRESH<span style="color: var(--soft-orange)">MART</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link px-3" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="/products">Daftar Buah</a></li>
                <li class="nav-item">
                    <a href="/cart" class="btn btn-outline-success border-2 rounded-pill position-relative ms-lg-3">
                        🛒 Keranjang
                        @if(session('cart'))
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ count(session('cart')) }}
                        </span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>