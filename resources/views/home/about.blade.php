@extends('layouts.frontend.app',[
'title' => 'About',
])
@section('content')
<div class="container" style="padding-top: 200px;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid; background-color:#F8F4EC;">
    <div class="container text-center judul">
        <h1>SD Negeri 173100 Tarutung</h1>
    </div>
    <div class="container"><br>
        <div class="row">
            <div class="col capt">
                <p>
                    SD Negeri 173100 Tarutung adalah sebuah sekolah SD negeri yang berlokasi di Jl. Pemuda Tarutung,
                    Kab. Tapanuli Utara.
                </p>
                <p>
                    SD negeri ini pertama kali berdiri pada tahun 1956. Sekarang SD Negeri 173100 Tarutung memakai
                    panduan kurikulum belajar pemerintah yaitu SD 2013. SD Negeri 173100 Tarutung berada di bawah
                    naungan kepala sekolah dengan nama Sukaratny Nainggolan dan operator sekolah Mincen Saragih.
                </p>
            </div>
            <div class="col text-center">
                <img src="img/bg/bg1.jpg" class="img-responsive" style="margin-left: auto;margin-right: auto; margin-top: auto;margin-bottom: auto;width:75%;" alt="Sekolah diwaktu istirahat">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <section id="visi-misi">
            <div class="row" style="background-color: #F8F9D7;">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="card-body">
                            <h2 class="card-title">Visi <span class="text-muted">Kami</span></h2>
                            <p>
                                <strong>Visi:</strong> <br>
                                Menjadi institusi terdepan yang menghasilkan tenaga kesehatan profesional, inovatif, dan beretika, berkontribusi dalam meningkatkan kualitas kesehatan masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="card-body">
                            <h2 class="card-title">Misi <span>Kami</span></h2>
                            <p>
                                <strong>Misi:</strong> <br>
                            <ul>
                                <li>1. Menyelenggarakan pendidikan kesehatan yang berkualitas dan berorientasi pada kebutuhan masyarakat.</li>
                                <li>2. Melakukan penelitian yang inovatif untuk pengembangan ilmu pengetahuan dan teknologi di bidang kesehatan.</li>
                                <li>3. Mengabdikan ilmu dan keterampilan kepada masyarakat melalui layanan kesehatan yang profesional.</li>
                                <li>4. Membangun jejaring kerjasama dengan berbagai pihak untuk meningkatkan kualitas pendidikan, penelitian, dan pengabdian kepada masyarakat.</li>
                                <li>5. Mengembangkan sumber daya manusia yang kompeten, berkarakter, dan memiliki jiwa kepemimpinan.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- CSS inline untuk efek hover -->
    <style>
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
    <div class="container" style="background-color: #F8F9D7;"><br>
        <div class="row featurette" style="background-color: white;">
            <div class="col capt">
                <div class="container">
                    <h2>Akreditasi SD Negeri 173100 Tarutung</h2>
                </div>
                SD Negeri 173100 Tarutung memiliki akreditasi grade A dengan nilai 91 (akreditasi tahun 2019) dari
                BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah.
            </div>
            <div class="col" style="border: 1px #333 solid;padding: 20px;font-size: 20px;font-size: 20px;">
                <div class="row">
                    <div class="col">
                        <h2 class="nilai-akreditas" style=" height: 45px;width: 45px;background-color: green;border-radius: 50%;display: inline-block;color: white;font-size: 24px;text-align: center;line-height: 45px;margin-left: 20px">A</h2>
                    </div>
                    <div class="col">
                        <p><b>91/100</b> Nilai Akreditas</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Isi:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 98%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">98/100</div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Proses:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 93%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">93/100</div>
                        </div>
                    </div>
                </div>

                <div class="row space-dikit">
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Kelulusan:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 96%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">96/100</div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Pendidik:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 74%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">74/100</div>
                        </div>
                    </div>
                </div>

                <div class="row space-dikit">
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Sarana Prasarana:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">83/100</div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Pengelolaan:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95/100</div>
                        </div>
                    </div>
                </div>

                <div class="row space-dikit">
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Sarana Pembiayaan:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">83/100</div>
                        </div>
                    </div>
                    <div class="col">
                        <small>Dari: BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah</small>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="row featurette">
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.335039991215!2d98.95690227396159!3d2.0216057979602033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6f45aab24873%3A0x8657c8f78b29948!2sSD%20N%20173100%20Tarutung!5e0!3m2!1sen!2sid!4v1717052898329!5m2!1sen!2sid" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
                </svg></iframe>
        </div>
        <div class="col-md-6">
            <h2 class="featurette-heading fw-normal lh-1">Lokasi</h2>
            <p class="lead">&nbsp &nbsp lokasi yang</p>
        </div>

    </div>

</div>

@stop