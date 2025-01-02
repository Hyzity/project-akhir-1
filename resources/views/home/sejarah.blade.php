@extends('layouts.frontend.app',[
'title' => 'Sejarah - SDN 173100 Tarutung',
])
@section('content')
<div class="container my-5">
    <div class="container-fluid" style="padding: 150px 0 20px 0;">
        <h1 style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid; background-color: white;">Sejarah SDN 173100 Tarutung</h1>
    </div><br>
    <div class="row" style="padding-bottom: 50px;">
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
            <img src="img/bg/images.jpeg" class="img-responsive" style="margin-left: auto;margin-right: auto; margin-top: auto;margin-bottom: auto;width:75%;" alt="Sekolah diwaktu istirahat">
        </div>
    </div>

    <div class="row featurette">
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.335039991215!2d98.95690227396159!3d2.0216057979602033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6f45aab24873%3A0x8657c8f78b29948!2sSD%20N%20173100%20Tarutung!5e0!3m2!1sen!2sid!4v1717052898329!5m2!1sen!2sid" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
                </svg></iframe>
        </div>
        <div class="col-md-6"">
            <h2 class="featurette-heading fw-normal lh-1">Penjelasan Lokasi SD Negeri 173100 Tarutung</h2>
            <p style="font-size: 17px;"><strong style="font-weight: 700;">Alamat:</strong><br>
                SD Negeri 173100 Tarutung terletak di Jalan Sisingamangaraja, Kecamatan Tarutung, Kabupaten Tapanuli Utara, Provinsi Sumatera Utara, Indonesia.</p>
            <p style="font-size: 17px;"> <strong>Koordinat GPS:</strong><br>
                Latitude: 2.0216058<br>
                Longitude: 98.9569023</p>
            <p style="font-size: 17px;"><strong>Deskripsi Lokasi:</strong><br>
                Sekolah ini berada di pusat kota Tarutung, yang merupakan ibu kota Kabupaten Tapanuli Utara. Lokasinya cukup strategis, dikelilingi oleh fasilitas umum seperti pasar, rumah sakit, dan perkantoran pemerintahan.</p>
        </div>

    </div>
</div>

</div>

@stop