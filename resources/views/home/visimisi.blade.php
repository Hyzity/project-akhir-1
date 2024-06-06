@extends('layouts.frontend.app',[
'title' => 'Visi Misi - SDN 173100 Tarutung',
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
                                Terwujudnya Sekolah yang Berbudaya Positif, Sehat, Ramah Anak sesuai dengan kodrat alam dan zaman peserta didik sehingga menjadi generasi penerus bangsa yang beriman, berakhlak mulia, berpengetahuan luas, kreatif, berwawasan global.
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
                                <li>1. Mewujudkan peserta didik yang berbudaya positif dengan menciptakan lingkungan belajar yang religius, nyaman, efektif, kreatif, berwawasan global, mandiri, gotong royong.</li>
                                <li>2. Mewujudkan sekolah sehat, berbhinneka, aman dan menyenangkan. </li>
                                <li>3. Mewujudkan kesempatan partisipasi daru peserta didik untuk berprestasi akademik dan non akademik. </li>
                                <li>4. Mendukung peningkatan kompetensi guru dengan megikuti pelatihan dan pengembangan profesional, memberkan penghargaan dan membuka kesempatan mengembangkan karir.</li>
                                <li>5. Membangun komunikasi efektif untuk program perlibatan sekolah dengan orang tua, masyarakan dan alumni.</li>
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