@extends('layouts.navbar')

@section('content')
<section id="content" class="content">
    <div class="title" data-aos="zoom-in" data-aos-duration="1000">
        <h1>Kendalikan Gula Darah Dan Tensi Anda</h1>
    </div>
    <div class="container">
        <button class="button"><a href="{{route('catatan')}}">Cek Riwayat Kesehatan Anda</a></button>
        <div class="row">
            <div class="card" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="title-card">Pentingnya Kontrol
                    Gula Darah</h3>
                <p class="text">Gula darah yang tidak terkontrol dapat menyebabkan diabetes dan komplikasi serius
                    lainnya. Ketahui fakta penting:
                <ul>
                    <li>Gula darah normal puasa: 70-100 mg/dL</li>
                    <li>Gula darah 2 jam setelah makan: < 140 mg/dL</li>
                    <li>Pemeriksaan rutin HbA1c penting untuk
                        memonitor
                        kontrol gula darah jangka panjang</li>
                </ul>
                </p>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="title-card">Memahami Tensi Darah</h3>
                <p class="text">Tensi darah tinggi (hipertensi) sering disebut 'silent killer'. Pahami angka-angka
                    penting:
                <ul>
                    <li>Tensi normal: < 120/80 mmHg</li>
                    <li>Prehipertensi: 120-139/80-89 mmHg</li>
                    <li>Hipertensi: ≥ 140/90 mmHg</li>
                    <li>Periksa
                        tensi secara teratur, minimal sebulan sekali</li>
                </ul>
                </p>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <h3 class="title-card">Tips Menjaga
                    Gula Darah</h3>
                <p class="text">
                <ul>
                    <li>Konsumsi makanan rendah gula dan karbohidrat kompleks</li>
                    <li>Olahraga teratur, minimal 30 menit per hari, 5 kali seminggu</li>
                    <li>Jaga berat badan ideal</li>
                    <li>Hindari stres berlebihan</li>
                    <li>Tidur cukup, 7-9 jam per malam</li>
                    <li>Pantau gula darah secara rutin</li>

                </ul>
                </p>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="2500">
                <h3 class="title-card">Cara Mengendalikan
                    Tensi Darah</h3>
                <p class="text">
                <ul>
                    <li>Kurangi asupan garam (< 5 gram per hari)</li>
                    <li>Perbanyak konsumsi sayur dan buah</li>
                    <li>Lakukan aktivitas fisik secara teratur</li>
                    <li>Hindari alkohol dan rokok</li>
                    <li>Kelola stres dengan meditasi atau yoga</li>
                    <li>Konsumsi obat antihipertensi sesuai anjuran dokter</li>
                </ul>
                </p>
            </div>
        </div>
    </div>

</section>
@endsection
