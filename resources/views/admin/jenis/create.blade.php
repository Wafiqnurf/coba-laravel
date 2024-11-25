@extends('layouts.admin')

@section('content')
<div class="py-5" style="margin-top: 100px">
    <div class="container col-xl-8">
        {{--Navigasi--}}
        <div class="create d-flex">
            <a href="{{ route('jenis') }}">Product</a>
            <div class="mb-1"> | </div>
            <a href="#">Tambah Product</a>
        </div>

        <h4>Halaman Product</h4>

        <form action="{{ route('jenis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="">Nama Product</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    value="{{ old('judul') }}">
                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Pilih Photo</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Deskripsi Product</label>
                <textarea name="desc" id="summernote">
                        {{ old('desc') }}
                    </textarea>
                @error('desc')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>

    </div>
</div>
@endsection
