@extends('layouts.frontend.app',[
'title' => 'sejarah',
])
@section('content')

<div class="container my-5">
<div class="container-fluid" style="padding: 150px 0 30px 0;">
    <h1 style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid; background-color: white;">Visi dan Misi</h1>
</div>
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