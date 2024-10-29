@extends('layouts.layouts')
@section('content')
<section style="margin-top: 100px">
    <div class="container col-xl-8 py-5">
        <h3 class="fw-bold mb-2 text-center">Halaman Dashboard Admin</h3>
        <p class="text-center">Selamat datang di halaman dashboard admin</p>
        <div class="d-flex py-3">
            @auth
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
            @endauth
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/images/berita1.jpg') }} " class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Blog Berita</h5>
                        <p class="card-text">Aur dan kelola berita kegiatan UPTD BBH</p>
                        <a href="{{route('blog')}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/images/berita2.jpg') }} " class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Foto Kegiatan</h5>
                        <p class="card-text">Aur dan kelola foto kegiatan UPTD BBH</p>
                        <a href="{{route('photo')}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/images/berita2.jpg') }} " class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Tanaman</h5>
                        <p class="card-text">Aur dan kelola Jenis Tanaman UPTD BBH</p>
                        <a href="{{route('jenis')}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
