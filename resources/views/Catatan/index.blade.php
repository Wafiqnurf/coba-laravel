@extends('layouts.navbar')

@section('content')
<section id="catatan" class="catatan">
    <div class="container">
        <div class="header">
            <h2>Riwayat Kesehatan</h2>
            <button class="add-note"><a href="{{ route('catatan.create') }}">Tambah Catatan</a></button>
        </div>

        <!-- Pemberitahuan Sukses (dihapus karena kita menggunakan SweetAlert2) -->
        {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
    </div>
    @endif --}}

    <div class="tabel">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Gula Darah</th>
                    <th>Tekanan Darah</th>
                    <th>Pesan Dokter</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $index => $record)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $record->tanggal }}</td>
                    <td>{{ $record->gula_darah }}</td>
                    <td>{{ $record->tensi }}</td>
                    <td>{{ $record->pesan_dokter }}</td>
                    <td>
                        <form action="{{ route('catatan.destroy', $record->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="grafik">
        <h2 class="graph-title">Grafik Gula dan Tekanan Darah</h2>
        <div class="grap">
            {!! $chart->container() !!}
        </div>
    </div>
    </div>
</section>

<!-- Chart -->
<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
@endsection
