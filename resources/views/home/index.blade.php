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
    </section>


    <section class="statistics-section" style="background-color: #860000; text-align:center; padding: 10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="color: white;">
                        <div>
                            <h1 style="color: white; font-size: 80px;">@count('nama_kelas')</h1>
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


    <section class="upcoming-events space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Pengumuman Terbaru</h3>
                    </div>
                </div>
            </div>
            @if ($pengumuman->count() > 0)

                <div class="container">
                    @php
                        $sortedPengumuman = $pengumuman->sortByDesc('tgl')->take(3);
                    @endphp

                    <div class="row d-flex flex-warp justify-content-center">
                        @foreach ($sortedPengumuman as $index => $pn)
                            <div class="col">
                                <a href="{{ route('pengumuman.show', $pn->id) }}">
                                    <div class="card border-dark mb-3 wow fadeInUp card-center">
                                        <div class="card-body text-dark">
                                            <h5 class="card-title">{{ $pn->judul }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">{{ $pn->tgl }}</h6>
                                            <button type="button" class="btn btn-success">Selengkapnya</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="row space">
                        <a href="{{ route('pengumuman') }}" class="alert alert-success alert-link mx-auto">Lihat Semua
                            Pengumuman</a>
                    </div>
            @endif
        </div>
    </section>

    <section class="upcoming-events">
        <div class="container">
            <div class="section-heading">
                <h3>Prestasi Sekolah</h3>
            </div>
            <div class="row d-flex flex-warp justify-content-center">
                @foreach ($prestasi as $pres)
                    <div class="col-md-3 wow fadeInUp" style="width: 100%; height: 100%;">
                        <div class="card mb-3">
                            <a href="{{ route('prestasi.show', $pres->id) }}">
                                <div class="card-img-container">
                                    <img class="card-img-top" src="{{ asset('img/prestasi/' . $pres->gambar) }}"
                                        alt="Gambar Prestasi">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $pres->judul }}</h5>
                                    <hr>
                                    <p class="card-text">
                                        {!! Str::limit($pres->deskripsi) !!}
                                    </p>
                                    <button type="button" class="btn btn-success">Selengkapnya</button>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row space">
                <a href="{{ route('prestasi') }}" class="alert alert-success alert-link mx-auto">Lihat Semua
                    Prestasi</a>
            </div>

        </div>
    </section>

    <style>
        .space {
            padding: 30px;
        }

        .card-img-container {
            position: relative;
            width: 100%;
            padding-bottom: 75%;
            /* 3:4 aspect ratio */
            overflow: hidden;
        }

        .card-img-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
    </style>



@stop
