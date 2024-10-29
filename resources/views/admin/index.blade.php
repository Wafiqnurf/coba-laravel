<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>

<body>
    <section class="admin-dashboard">
        <div class="container">
            <h3 class="title">Halaman Dashboard Admin</h3>
            <p class="subtitle">Selamat datang di halaman dashboard admin</p>
            <div class="logout-container">
                @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
                @endauth
            </div>
            <div class="card-grid">
                <div class="card">
                    <img src="{{ asset('assets/images/berita1.jpg') }}" alt="" class="card-image">
                    <div class="card-content">
                        <h5 class="card-title">Blog Berita</h5>
                        <p class="card-text">Aur dan kelola berita kegiatan UPTD BBH</p>
                        <a href="{{ route('blog') }}" class="card-btn">Detail</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/images/berita2.jpg') }}" alt="" class="card-image">
                    <div class="card-content">
                        <h5 class="card-title">Foto Kegiatan</h5>
                        <p class="card-text">Aur dan kelola foto kegiatan UPTD BBH</p>
                        <a href="{{ route('photo') }}" class="card-btn">Detail</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/images/berita2.jpg') }}" alt="" class="card-image">
                    <div class="card-content">
                        <h5 class="card-title">Jenis Tanaman</h5>
                        <p class="card-text">Aur dan kelola Jenis Tanaman UPTD BBH</p>
                        <a href="{{ route('jenis') }}" class="card-btn">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
