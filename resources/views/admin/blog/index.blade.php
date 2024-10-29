@extends('layouts.layouts')

@section('content')
<div class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4>Halaman Blog Artikel</h4>
        <a href="{{route('blog.create')}}" class="btn btn-primary">Buat Berita</a>
        <a href="/dashboard" class="btn btn-success">Dashboard</a>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive py-3">
            <table class="table table-bordered">
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
                        <td><img src="{{ asset('storage/artikel/' . $artikel->image) }}" height="100"></td>
                        <td>{{ $artikel->judul }}</td>
                        <td>
                            <a href="{{ route('blog.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('blog.destroy', $artikel->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" onclick="alert('Apakah yakin akan di hapus ?')"
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