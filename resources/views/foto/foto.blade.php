@extends('layouts.layouts')
@section('content')
<!-- Foto -->
<section id="foto" class="foto-detail" style="margin-top:80px" data-aos="zoom-in-up">
    <div class="container">
        <h2 class="section-title">Foto Kegiatan</h2>
        <div class="photo-grid">
            @foreach ($photos as $photo)
            <div class="photo-item"><img src="{{ asset('storage/public/photo/'. $photo->image) }}" class="img-fluid"
                    alt="">
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Foto -->
@endsection
