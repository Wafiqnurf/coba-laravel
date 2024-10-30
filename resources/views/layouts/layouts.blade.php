<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/icons/images-removebg-preview.ico') }}">
    <title>UPTD BBH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    {{-- Summernote CSS di antara Head--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
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
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
