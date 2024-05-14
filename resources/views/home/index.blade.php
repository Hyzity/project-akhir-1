@extends('layouts.frontend.app',[
'title' => 'Home',
])
@section('content')
<!-- ##### Hero Area Start ##### -->


<!-- ##### Hero Area End ##### -->

<section class="welcome-section" style="display: flex; margin: 0; padding: 300px 150px 150px 150px; background-image: url('img/bg/bg1.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <h2 style="color: white;">Selamat Datang di</h2>
        <h1 style="color: white;">Sekolah Dasar Negeri 173100</h1>
        <h2 style="color: white;">Tarutung</h2>
        <h3 style="color: white;">Tapanuli Utara</h3>
        <button style="background-color: transparent; padding: 10px 20px; font-size: 16px; cursor: pointer; transition: background-color 0.1s ease; border-radius: 50px; margin-top: 30px; color: white; border: 1px solid white;">
            <a style="color: white; text-decoration: none;" href="/tentangsekolah">Pelajari Lebih
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg><br>
                Lanjut
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
        <div class="container">
            <div class="card-container row">
                <div class="card col" style="width: 14rem; margin-right: 20px;">
                    <img src="imag/bg/joel.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">- Yansen Silaen -</h5>
                        <p class="card-text">Kejuaraan Musik Perlombaan "Music Instrument Competation Categori A" di Medan</p>
                    </div>
                </div>

                <div class="card col" style="width: 14rem; margin-right: 20px;">
                    <img src="img/bg/joel.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">- Joel Panjaitan -</h5>
                        <p class="card-text">Kejuaraan perlombaan "Science Competation Muara Foundation"</p>
                    </div>
                </div>

                <div class="card col" style="width: 14rem;">
                    <img src="img/bg/heni.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">- Heni Cahaya Lingga -</h5>
                        <p class="card-text">Kejuaraan perlombaan "Marturiturian" Tingkat Kabupaten Tapanuli Utara</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="padding: 50px 100px 50px 100px; font-size: 20px;">
            <h2 style="text-align: center;font-weight: 700; margin: 0 0 25px 0;">Prestasi Akademik dan Non-Akademik</h2>
            <li>Kajurda Aski diraih oleh Rere Veronika Pagadara</li>
            <li>Juara 2 Marturiturian tingkat kabupaten diraih oleh Jeslyn Simarmata</li>
            <li>Heni Cahaya Lingga, Juara 1 lomba Bercerita Legenda Batak Toba</li>
            <li>Juara III LCC Tingkat Kecamatan diraih oleh Joel Panjaitan, Gita Putri Adelia Simarmata, Michaela Araminta
                Devina Sebayang</li>
            <li>Yansen Silaen mendapatkan kejuaraan musik dalam perlombaan " Music Instrumen Competation Categoti A" di Medan
            </li>
            <li>Meraih medali emas pada Olimpiade Piala Hasri Ainum Habibie diraih oleh Gita Putri Adelia Simarmata dan Joel
                Zepanya Panjaitan serta mendapat penghargaan dari Bupati Tapanuli Utara</li>
            </ul>
        </div>
    </div>
    <section>
        <div class="container-fluid" style="background-color: #860000;">
            <div class="ps" style="text-align: center;">
                <h1 style="color: white; padding: 25px 0;">Ekstrakurikuler</h1>
            </div>
            <div class="card-container row justify-content-center" style="padding: 0 0 25px 0;">
                <div class="col-md-3">
                    <div class="card" style="background-color: #860000; border-radius: 40px;">
                        <img src="img/bg/ketrampilan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                                <h4>- Hari Spesial -</h4>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="background-color: #860000; border-radius: 40px;">
                        <img src="img/bg/ketrampilan.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <center>
                                <h4>- Keterampilan -</h4>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="background-color: #860000; border-radius: 40px;">
                        <img src="img/bg/ketrampilan.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <center>
                                <h4>- Hari Spesial -</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

@if($pengumuman->count() > 0)
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Pengumuman Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($pengumuman as $pn)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('img/bg') }}/pengumuman.png" alt="">
                        <h6 class="event-date">{{ $pn->tgl }} | BY : {{ $pn->user->name }}</h6>
                        <h4 class="event-title">{{ $pn->judul }}</h4>
                    </div>
                    <div>
                        <a href="{{ route('pengumuman.show',$pn->slug) }}" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <a href="{{ route('pengumuman') }}" class="alert alert-success alert-link mx-auto">Lihat Semua Pengumuman</a>
        </div>
    </div>
</section>
@endif

@if($artikel->count() > 0)
<!-- ##### Artikel ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Artikel Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($artikel as $art)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ $art->judul }}

                        <span class="badge badge-danger float-right">Author : {{ $art->user->name }}</span>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset($art->getThumbnail()) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                        <div class="card-text mt-3">
                            {!! Str::limit($art->deskripsi) !!}
                        </div>

                        <a href="{{ route('artikel.show',$art->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-primary float-right"></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <a href="{{ route('artikel') }}" class="alert alert-success alert-link mx-auto mt-3">Lihat Semua Artikel</a>
        </div>
    </div>
</section>
@endif

@stop