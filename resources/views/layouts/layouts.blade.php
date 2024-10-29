<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/icons/images-removebg-preview.ico') }}">
    <title>UPTD BBH</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- Content --}}
    @yield('content')
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>Navigasi</h3>
                    <ul>
                        <li>Home</li>
                        <li>Tentang Kami</li>
                        <li>Berita</li>
                        <li>Product</li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Sosial Media</h3>
                    <div class="social-icons">
                        <img src="/api/placeholder/24/24" alt="Facebook">
                        <img src="/api/placeholder/24/24" alt="Instagram">
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Kontak</h3>
                    <div class="contact-info">
                        <div>(022) 7911067</div>
                        <div>082377434837</div>
                        <div>Uptdbbh@gmail.com</div>
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Alamat</h3>
                    <p>Jl. Ir. Soekarno km.23 Jatinangor-Sumedang 45363</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
