@extends('layouts.admin')

@section('content')
<div class="py-5" style="margin-top: 100px">
    <div class="container col-xl-8">
        {{--Navigasi--}}
        <div class="create d-flex">
            <a href="{{ route('blog') }}">Blog</a>
            <div class="mb-1"> | </div>
            <a href="#">Edit Artikel</a>
        </div>

        <h4>Halaman Edit Artikel</h4>

        <form action="{{ route('blog.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="">Maximum Judul Kegiatan</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    value="{{ old('judul',  $artikel->judul) }}">

                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Pilih Photo Kegiatan</label>
                <input type="hidden" name="old_image" value="{{$artikel->image}}">
                <div>
                    <img src="{{asset('storage/public/artikel/' . $artikel->image)}} " class="col-lg-4" alt="">
                </div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Artikel Haritac</label>
                <textarea name="desc" id="summernote">
                        {!!  $artikel->desc !!}
                    </textarea>
                @error('desc')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>

    </div>
</div>
@endsection
