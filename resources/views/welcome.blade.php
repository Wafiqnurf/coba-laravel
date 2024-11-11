@extends('layouts.layouts')

@section('content')
<sevtion class="hero">
    <div class="hero-content">
        <h1>Selamat Datang</h1>
        <div class="subtitle">Di</div>
        <h1> <span>UPTD Balai Benih Hrtikultura</span></h1>
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

<!-- Berita -->
<section id="berita">
    <div class="container py-5">
        <div class="header-berita text-center" data-aos="fade-up">
            <h2 class="fw-bold">Berita Kegiatan UPTD BBH</h2>
        </div>
        <div class="row py-3">
            @foreach ($artikels as $item )
            <div class="card" data-aos="zoom-in-up">
                <div class="card-img-holder">
                    <img src="{{ asset('storage/public/artikel/' . $item->image) }}">
                </div>
                <h3 class="blog-title">{{$item->judul}}</h3>
                <span class="blog-time">{{$item->create_at}}</span>
                <p class="deskripsi">{!! Str::limit(strip_tags($item->desc), 100) !!}</p>
                <div class="options">
                    <span>
                        #petanimodern
                    </span>
                    <a href="/detail/{{$item->slug}}">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="footer-berita text-center" data-aos="fade-up">
            <a href="/berita" class="btn">Berita Lainnya</a>
        </div>
    </div>
</section>
<!-- Berita End -->

<!-- Product -->
<section class="product-section" id="product">
    <h2 class="section-title">Product UPTD BBH</h2>
    <div class="product-grid">
        @foreach ($jenis as $jenis)
        <div class="product-card">
            <div class="product-image">
                <img src="{{ asset('storage/public/jenis/' . $jenis->image) }}" alt="">
            </div>
            <h3 class="product-title">{{ $jenis->judul }}</h3>
            <p class="product-description">{!! $jenis->desc !!}</p>
            <button class="button">Hubungi</button>
        </div>
        @endforeach
    </div>
</section>
<!-- Gallery Section -->
<section class="gallery-section" id="gallery">
    <div class="container">
        <h2 class="section-title">Foto Kegiatan</h2>
        <div class="photo-grid">
            @foreach ($photos as $photo)
            <div class="photo-item"><img src="{{ asset('storage/public/photo/'. $photo->image) }}" class="img-fluid"
                    alt="">
            </div>
            @endforeach
        </div>
        <button class="view-all"><a href="/foto">View All</a></button>
    </div>
</section>
@endsection
