<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>UPTD Balai Benih Hortikultura Jatinangor - Pengembangan Benih Hortikultura Berkualitas</title>
    <meta name="title" content="UPTD Balai Benih Hortikultura Jatinangor - Pengembangan Benih Hortikultura Berkualitas">
    <meta name="description"
        content="UPTD Balai Benih Hortikultura Jatinangor melayani pengembangan dan distribusi benih hortikultura berkualitas untuk Jawa Barat. Hubungi kami di (022) 7911067">
    <meta name="keywords"
        content="balai benih hortikultura, benih hortikultura, UPTD BBH, benih berkualitas, Jatinangor, Sumedang">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesia">
    <meta name="author" content="UPTD Balai Benih Hortikultura">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://uptdbalaibenihhortikultural.com/">
    <meta property="og:title" content="UPTD Balai Benih Hortikultura Jatinangor">
    <meta property="og:description"
        content="Pusat pengembangan dan distribusi benih hortikultura berkualitas untuk Jawa Barat">
    <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://uptdbalaibenihhortikultural.com/">
    <meta property="twitter:title" content="UPTD Balai Benih Hortikultura Jatinangor">
    <meta property="twitter:description"
        content="Pusat pengembangan dan distribusi benih hortikultura berkualitas untuk Jawa Barat">
    <meta property="twitter:image" content="{{ asset('assets/icons/ic-logo.png') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/icons/images-removebg-preview.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/icons/apple-touch-icon.png') }}">

    <!-- Dynamic Meta Tags for Article Pages -->
    @if (Request::segment(1) == 'detail')
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $artikel->judul }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($artikel->content), 160) }}">
    <meta property="og:url" content="{{ url('/detail/' . $artikel->slug) }}">
    <meta property="article:published_time" content="{{ $artikel->created_at }}">
    <meta property="article:modified_time" content="{{ $artikel->updated_at }}">
    @if ($artikel->image)
    <meta property="og:image" content="{{ asset('storage/public/artikel/' . $artikel->image) }}">
    @else
    <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}">
    @endif
    <title>{{ $artikel->judul }} - UPTD Balai Benih Hortikultura</title>
    @endif

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css">

    <!-- AOS ANIMATION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "UPTD Balai Benih Hortikultura",
        "url": "https://uptdbalaibenihhortikultural.com",
        "logo": "{{ asset('assets/icons/ic-logo.png') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-22-7911067",
            "contactType": "customer service",
            "email": "Uptdbbh@gmail.com"
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Ir. Soekarno km.23",
            "addressLocality": "Jatinangor",
            "addressRegion": "Sumedang",
            "postalCode": "45363",
            "addressCountry": "ID"
        },
        "sameAs": [
            "https://facebook.com/UPTDBBHJatinangor",
            "https://instagram.com/uptd_bbh_jatinangor"
        ]
    }
    </script>
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
                        <img src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook">
                        <img src="{{ asset('assets/icons/instagram.png') }}" alt="Instagram">
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
    <!-- Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>


    <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
        });
    });
    </script>

    <!-- AOS ANIMATION -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
