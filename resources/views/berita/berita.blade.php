@extends('layouts.layouts')
@section('content')
<!-- Berita -->
<section id="berita-berita">
    <div class="container">
        <div class="header-berita text-center" data-aos="fade-up">
            <h2 class="fw-bold">Berita Kegiatan UPTD BBH</h2>
        </div>
        <div class="row py-3">
            @foreach ($artikel as $item )
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
    </div>
</section>
<!-- Berita End -->
@endsection
