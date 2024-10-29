@extends('layouts.layouts')

@section('content')
<div class="blog-page">
    <div class="container">
        <div class="header">
            <h4 class="title">Halaman Blog Artikel</h4>
            <div class="actions">
                <a href="{{ route('blog.create') }}" class="btn btn-primary">Buat Berita</a>
                <a href="/dashboard" class="btn btn-secondary">Dashboard</a>
            </div>
        </div>

        @if (session()->has('success'))
        <div class="alert alert-success">
            <strong>Informasi!</strong> {{ session('success') }}
            <button class="close-btn" onclick="this.parentElement.style.display='none'">×</button>
        </div>
        @endif

        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach ($artikels as $artikel)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><img src="{{ asset('storage/public/artikel/' . $artikel->image) }}" class="article-image">
                        </td>
                        <td>{{ $artikel->judul }}</td>
                        <td>
                            <a href="{{ route('blog.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('blog.destroy', $artikel->id) }}" method="POST" class="inline-form">
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah yakin akan di hapus ?')"
                                    class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection