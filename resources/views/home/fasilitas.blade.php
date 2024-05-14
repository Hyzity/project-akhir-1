@extends('layouts.frontend.app',[
'title' => 'Fasilitas',
])
@section('content')

<div class="container mt-5" style="padding: 170px 0 0 0;">
    <h2>Informasi Fasilitas Sekolah</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/300" alt="Ruang Kelas">
                <div class="card-body">
                    <h5 class="card-title">Ruang Kelas</h5>
                    <p class="card-text">Ruang kelas yang nyaman dan dilengkapi dengan fasilitas pembelajaran yang memadai.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/300" alt="Laboratorium">
                <div class="card-body">
                    <h5 class="card-title">Laboratorium</h5>
                    <p class="card-text">Laboratorium lengkap dengan peralatan dan bahan praktikum untuk mendukung pembelajaran sains.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/300" alt="Perpustakaan">
                <div class="card-body">
                    <h5 class="card-title">Perpustakaan</h5>
                    <p class="card-text">Perpustakaan dengan koleksi buku-buku bermutu untuk mendukung kegiatan belajar siswa.</p>
                </div>
            </div>
        </div>
    </div>
</div>


</div>