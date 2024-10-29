@extends('layouts.layouts')
@section('content')
<!-- Foto -->
<section id="foto" class="foto-detail" data-aos="zoom-in-up">
    <div class="container">
        <div class="row-title">
            <div class="title">
                <h5>Foto Kegiatan</h5>
            </div>
            <a href="/foto" class="btn">Foto lainnya</a>
        </div>
        <div class="row">
            @foreach ($photos as $photo)
            <div class="card">
                <div class="image-link" href="{{ asset('storage/photo/'. $photo->image) }}">
                    <img src="{{ asset('storage/photo/'. $photo->image) }}" class="img-fluid" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Foto -->
@endsection
