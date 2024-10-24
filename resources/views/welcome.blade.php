<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diatensi Care</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <nav id="navbar" class="navbar">
        <div class="logo">
            <img src="{{ asset('assets/images/healthcare.png') }}" alt="Diatensi Care Logo">
            <a href="#">Diatensi Care</a>
        </div>
        <div class="auth-links">
            <a href="/login"><span>Login</span></a> / <a href="/register">Sign Up</a>
        </div>
    </nav>

    <section id="hero" class="hero">
        <div class="content">
            <h1 class="title">Welcome to <span>Diatensi Care</span></h1>
            <p class="text">Kontrol kesehatan Anda dengan pemantauan dan perawatan terbaik</p>
            <button class="cta-button"><a href="">Konsultasi Sekarang</a></button>
        </div>
    </section>

    <section #id="feature" class="feature">
        <div class="container">
            <div class="row">
                <div class="card">
                    <img src="{{ asset('assets/images/document.png') }}" alt="Blood Sugar Icon">
                    <h3 class="title">Pemantauan Gula Darah</h3>
                    <p class="text">Pantau level gula darah Anda dengan teknologi terkini dan konsultasi ahli.</p>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/images/warning.png') }}" alt="Blood Pressure Icon">
                    <h3 class="title">Kontrol Tensi Darah</h3>
                    <p class="text">Atur tekanan darah Anda dengan program khusus dan peralatan modern.</p>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/images/stethoscope.png') }}" alt="Consultation Icon">
                    <h3 class="title">Konsultasi 24/7</h3>
                    <p class="text">Tim ahli kami siap membantu Anda mengelola gula darah dan tensi 24 jam sehari.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
