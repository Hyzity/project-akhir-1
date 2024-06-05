@extends('layouts.frontend.app', [
    'title' => 'SD Negeri 173100 Tarutung',
])
@section('content')

    <title>SD Negeri 173100 Tarutung</title>

    <section class="welcome-section"
        style="display: flex; margin: 0; padding: 300px 150px 150px 150px; background-image: url('img/bg/bg1.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <h2 style="color: white;">Selamat Datang di</h2>
            <h1 style="color: white;">Sekolah Dasar Negeri 173100</h1>
            <h2 style="color: white;">Tarutung</h2>
            <h3 style="color: white;">Tapanuli Utara</h3>
            <button
                style="background-color: transparent; padding: 10px 20px; font-size: 16px; cursor: pointer; transition: background-color 0.1s ease; border-radius: 50px; margin-top: 30px; color: white; border: 1px solid white;">
                <a style="color: white; text-decoration: none;" href="/sejarah">Pelajari Lebih Lanjut <i
                        class="bi bi-arrow-right-circle"></i>
                </a>
            </button>
        </div>
        <div style="text-align: center; margin-top: 50px;">
            <img src="img/bg/taput.png" alt="" style="width: 200px;">
        </div>
    </section>


    <section class="statistics-section" style="background-color: #860000; text-align:center; padding: 10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="color: white;">
                        <div>
                            <h1 style="color: white; font-size: 80px;">12</h1>
                            <h6 style="color: white; ">Kelas Aktif</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="color: white;">
                        <div>
                            <h1 style="color: white; font-size: 80px;">16+</h1>
                            <h6 style="color: white;">Guru Pengajar</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="color: white;">
                        <div>
                            <h1 style="color: white; font-size: 80px;">1000+</h1>
                            <h6 style="color: white;">Alumni Sekolah</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="regular-page-area section-padding-100 mt-5 mb-4">
        <div class="container">
            <div style="text-align: center; margin: -100px 0 50px 0;">
                <h1>Prestasi Sekolah</h1>
            </div>
            <div class="card-container row">
                @foreach ($prestasi as $pres)
                    <div class="card col" style="width: 14rem; margin-right: 20px;">
                        <div class="card-img-container">
                            <img src="{{ asset('img/prestasi/' . $pres->gambar) }}" class="card-img-top"
                                alt="{{ $pres->gambar }}">
                        </div>
                        <div class="card-body">
                            <center>
                                <h5 class="card-title">- {{ $pres->judul }} -</h5>
                            </center>
                            <p class="card-text">{{ $pres->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>


            <div style="padding: 50px 50px 50px 50px; font-size: 20px;">
                <h2 style="text-align: center;font-weight: 700; margin: 0 0 25px 0;">Prestasi Akademik dan Non-Akademik</h2>
                <li>Kajurda Aski diraih oleh Rere Veronika Pagadara</li>
                <li>Juara 2 Marturiturian tingkat kabupaten diraih oleh Jeslyn Simarmata</li>
                <li>Heni Cahaya Lingga, Juara 1 lomba Bercerita Legenda Batak Toba</li>
                <li>Juara III LCC Tingkat Kecamatan diraih oleh Joel Panjaitan, Gita Putri Adelia Simarmata, Michaela
                    Araminta
                    Devina Sebayang</li>
                <li>Yansen Silaen mendapatkan kejuaraan musik dalam perlombaan " Music Instrumen Competation Categoti A" di
                    Medan
                </li>
                <li>Meraih medali emas pada Olimpiade Piala Hasri Ainum Habibie diraih oleh Gita Putri Adelia Simarmata dan
                    Joel
                    Zepanya Panjaitan serta mendapat penghargaan dari Bupati Tapanuli Utara</li>
                </ul>
            </div>
        </div>
        <section>
            <div class="container-fluid" style="background-color: #860000;">
                <div class="ps" style="text-align: center;">
                    <h1 style="color: white; padding: 25px 0;">Ekstrakurikuler</h1>
                </div>
                <div class="card-container row justify-content-center text-center" style="padding: 0 0 25px 0;">
                    <div class="col-md-3">
                        <div class="card" style="background-color: #860000; border-radius: 40px;">
                            <img src="img/bg/olahraga.png" alt="olahraga">
                            <div class="card-body">
                                <center>
                                    <h4 style="color: white;">- Olahraga -</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="background-color: #860000; border-radius: 40px;">
                            <img src="img/bg/keterampilan.jpg" alt="keterampilan">
                            <div class="card-body">
                                <center>
                                    <h4 style="color: white;">- Keterampilan -</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="background-color: #860000; border-radius: 40px;">
                            <img src="img/bg/hariSpesial.png" alt="harispesial">
                            <div class="card-body">
                                <center>
                                    <h4 style="color: white;">- Hari Spesial -</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="/ekstrakurikuler" class="btngor">Tampilkan lebih lanjut</a>
                </div>
            </div>
        </section>



    </div>

    @if ($pengumuman->count() > 0)
        <section class="upcoming-events section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h3>Pengumuman Terbaru</h3>
                        </div>
                    </div>
                </div>

                <div class="container">
                    @php
                        $sortedPengumuman = $pengumuman->sortByDesc('tgl')->take(2);
                    @endphp

                    <div class="row">
                        @foreach ($sortedPengumuman as $index => $pn)
                            <div class="col-12 col-md-6 col-lg-6 mb-4">
                                <div class="card wow fadeInUp" style="width: 100%;" data-wow-delay="250ms">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $pn->judul }}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $pn->tgl }}</h6>
                                        <p class="card-text">{{ $pn->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row">
                    <a href="{{ route('pengumuman') }}" class="alert alert-success alert-link mx-auto">Lihat Semua
                        Pengumuman</a>
                </div>
            </div>
        </section>
    @endif

    <style>
        .card-img-container {
            position: relative;
            width: 100%;
            padding-bottom: 133.33%;
            overflow: hidden;
        }

        .card-img-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-body {
            flex-grow: 1;
        }

        .btngor {
            border: 2px solid #fff;
            border-radius: 25px;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
        }

    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll('.card');
            let maxCardHeight = 0;

            cards.forEach(card => {
                const cardHeight = card.getBoundingClientRect().height;
                if (cardHeight > maxCardHeight) {
                    maxCardHeight = cardHeight;
                }
            });

            cards.forEach(card => {
                card.style.height = maxCardHeight + 'px';
            });
        });
    </script>

@stop
