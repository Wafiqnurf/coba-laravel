@extends('layouts.layouts')
@section('content')
<section id="detail" class="about" style="margin-top:50px" class="py-5">
    <div class="bar mb-3">
        <a href="/">Home</a>/ <a href="/berita">Berita</a> / <a href="">{{$artikel->judul}}</a>
    </div>

    <div class="row">
        <div class="detail-img" data-aos="fade-right" data-aos-duration="1000">
            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" alt="Tentang Kami" />
        </div>

        <div class="content" data-aos="fade-left" data-aos-duration="1000">
            <h3>{{$artikel->judul}}</h3>
            <p>
                {!! $artikel->desc !!}

            </p>

        </div>
    </div>
</section>
@endsection
