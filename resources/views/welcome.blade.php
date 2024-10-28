<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diatensi Care</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <nav class="navbar">
        <img src="/api/placeholder/24/24" alt="Logo" class="logo">
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Tentang Kami</a>
            <a href="#">Berita</a>
            <a href="#">Product</a>
            <a href="#">Galeri</a>
        </div>
    </nav>

    <sevtion class="hero">
        <div class="hero-content">
            <h1>Selamat Datang</h1>
            <div class="subtitle">Di</div>
            <h1>UPTD Balai Benih Hrtikultura</h1>
            <p class="description">Disini kami menyediakan berbagai bibit dari tanaman hortikultura</p>
            <a href="#" class="cta-button">Hubungi Sekarang</a>
        </div>
    </sevtion>

    <section id="about" class="about">
        <h2 data-aos="fade-up" data-aos-duration="1000"><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('assets/images/1.jpg') }}" alt="Tentang Kami" />
            </div>

            <div class="content" data-aos="fade-left" data-aos-duration="1000">
                <h3>UPTD Balai Benih Hortikultura</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Exercitationem, nostrum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quod
                    placeat molestiae iure laborum cumque non odit culpa et porro.
                </p>
            </div>
        </div>
        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="{{ asset('assets/icons/product.png') }}" alt="Hasil Berkualitas Icon">
                </div>
                <h4 class="feature-title">Hasil Berkualitas</h4>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="{{ asset('assets/icons/sprout.png') }}" alt="Hasil Berkualitas Icon">
                </div>
                <h4 class="feature-title">Benih Berkualitas</h4>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="{{ asset('assets/icons/agriculture.png') }}" alt="Hasil Berkualitas Icon">
                </div>
                <h4 class="feature-title">Pemeliharaan Modern</h4>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="{{ asset('assets/icons/harvest.png') }}" alt="Hasil Berkualitas Icon">
                </div>
                <h4 class="feature-title">Tanaman Beragam</h4>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <section class="news-section">
        <h2 class="section-title">Berita UPTD BBH</h2>
        <div class="news-container">
            <div class="news-grid">
                <!-- News Card 1 -->
                <article class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/400/200" alt="News 1">
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Title</h3>
                        <p class="news-date">Tanggal</p>
                        <p class="news-description">Deskripsi</p>
                        <a href="#" class="news-link">Selengkapnya</a>
                    </div>
                </article>

                <!-- News Card 2 -->
                <article class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/400/200" alt="News 2">
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Title</h3>
                        <p class="news-date">Tanggal</p>
                        <p class="news-description">Deskripsi</p>
                        <a href="#" class="news-link">Selengkapnya</a>
                    </div>
                </article>

                <!-- News Card 3 -->
                <article class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/400/200" alt="News 3">
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Title</h3>
                        <p class="news-date">Tanggal</p>
                        <p class="news-description">Deskripsi</p>
                        <a href="#" class="news-link">Selengkapnya</a>
                    </div>
                </article>
            </div>

            <div class="more-news">
                <button class="more-news-btn">Berita Lainnya</button>
            </div>
        </div>
    </section>
</body>

</html>
