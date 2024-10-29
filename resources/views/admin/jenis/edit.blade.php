@extends('layouts.layouts')

@section('content')
<div class="py-5" style="margin-top: 100px">
    <div class="container col-xl-8">
        {{--Navigasi--}}
        <div class="create d-flex">
            <a href="{{ route('jenis') }}">Blog</a>
            <div class="mb-2"> | </div>
            <a href="#">Edit Jenis Tanaman</a>
        </div>

        <h4>Halaman Edit Jenis Tanaman</h4>

        <form action="{{ route('jenis.update', $jenis->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="">Judul Kegiatan</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    value="{{ old('judul',  $jenis->judul) }}">

                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Pilih Photo Jenis Tanaman</label>
                <input type="hidden" name="old_image" value="{{$jenis->image}}">
                <div>
                    <img src="{{asset('storage/public/jenis/' . $jenis->image)}} " class="col-lg-4" alt="">
                </div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Deskripsi Jenis Tanaman</label>
                <textarea name="desc" id="summernote">
                        {!!  $jenis->desc !!}
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
