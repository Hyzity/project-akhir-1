@extends('layouts.frontend.app', [
    'title' => 'Ekstrakurikuler',
])
@section('content')

    <div class="container-fluid container" style="padding: 170px 0 0 0;">
        <h1
            style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid;">
            Ekstrakurikuler</h1>
    </div>

    <section class="container">
        <div class="container-fluid row featurette" style="padding: 0 20px 50px 80px;">
            <div class="col-md-9 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Olahraga</h2>
                <p class="lead">Senam pagi pada hari Sabtu dapat memberikan manfaat seperti meningkatkan energi,
                    memperbaiki mood, dan meningkatkan fleksibilitas. Ini juga bisa menjadi waktu untuk melepas stres dan
                    mempersiapkan tubuh untuk akhir pekan yang menyenangkan.</p>
            </div>
            <div class="col-md-3 order-md-1">
                <img src="img/bg/olahraga.png" <svg
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
            </div>
        </div>
    </section>

    <section>
        <div style="background-color: #FFE4B1;">
            <hr style="height: 50px;">
        </div>
    </section>

    <section class="container">
        <div class="container-fluid row featurette" style="padding: 0 20px 50px 80px;">
            <div class="col-md-9 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Keterampilan</h2>
                <p class="lead">Keterampilan di sekolah seperti membaca, menulis, dan berhitung membantu kita dalam
                    kehidupan
                    sehari-hari, seperti saat berbelanja, mengatur uang saku, atau bahkan memasak. Selain itu, belajar di
                    sekolah juga mengajarkan kita cara berinteraksi dengan orang lain, bekerja dalam tim, dan memecahkan
                    masalah, yang semuanya adalah keterampilan penting untuk sukses di masa depan. Jadi, dengan fokus dan
                    usaha
                    di sekolah, kamu sedang mempersiapkan diri untuk menghadapi tantangan dunia yang lebih besar nanti !</p>
            </div>
            <div class="col-md-3 order-md-1">
                <img src="img/bg/keterampilan.jpg" <svg
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
            </div>
        </div>
    </section>

    <section>
        <div style="background-color: #FFE4B1;">
            <hr style="height: 50px;">
        </div>
    </section>

    <section class="container">
        <div class="container-fluid row featurette" style="padding: 0 20px 50px 80px;">
            <div class="col-md-9 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Hari Spesial</h2>
                <p class="lead">Ada banyak hari-hari spesial yang diadakan di sekolah seperti fashion show guru dan siswa.
                    Fashion show di sekolah adalah acara di mana para siswa dapat menampilkan pakaian mereka di atas
                    panggung
                    untuk menunjukkan gaya dan kreativitas mereka. Ini adalah kesempatan untuk mengekspresikan diri melalui
                    busana dan menunjukkan kepada orang lain apa yang membuat mereka unik. Dalam fashion show ini, para
                    siswa
                    bisa merasa percaya diri dan bangga dengan penampilan mereka, sambil menikmati dukungan dari teman-teman
                    dan
                    komunitas sekolah.</p>
            </div>
            <div class="col-md-3 order-md-1">
                <img src="img/bg/hariSpesial.png" <svg
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
            </div>
        </div>
    </section>

@stop
