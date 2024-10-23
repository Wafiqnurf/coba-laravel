@extends('layouts.navbar')

@section('content')
<!-- View -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<section id="tambah-catatan" class="tambah-catatan">
    <div class="container">
        <h1>Halaman Tambah Catatan</h1>
        <form action="{{route('catatan.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tanggal">Tanggal Pemeriksaan</label>
                <input type="date" id="tanggal" name="tanggal" required>
                @error('tanggal')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gula_darah">Gula Darah</label>
                <input type="text" id="gula_darah" name="gula_darah" required>
                @error('gula_darah')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tensi">Tekanan Darah</label>
                <input type="text" id="tensi" name="tensi" required>
                @error('tensi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pesan_dokter">Pesan Dokter</label>
                <textarea id="pesan_dokter" name="pesan_dokter"></textarea>
                @error('pesan_dokter')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</section>
@endsection
