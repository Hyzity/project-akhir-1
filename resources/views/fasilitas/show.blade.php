@extends('layouts.frontend.app', [
'title' => 'Detail Fasilitas',
])

@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset('img/bg/fasilitas.png') }});">
    <div class="blog-details-headline">
        <h3>{{ $fasilitas->judul }}</h3>
    </div>
</div>

<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="blog-details-text">
                    <div class="fasilitas-thumbnail">
                        @if ($fasilitas->foto_fasilitas)
                        <img src="{{ asset('uploads/img/fasilitas/') }}/{{ $fasilitas->foto_fasilitas }}" alt="Foto Fasilitas"  alt="Foto Guru" style="width: 485px; height: 503px; border-radius: 20px; border: 4px solid #860000; margin: auto;">
                        @else
                        <img src="{{ asset('img/fasilitas') }}/default.jpg" alt="Foto Fasilitas" alt="Foto Guru" style="width: 485px; height: 503px; border-radius: 20px; border: 4px solid #860000; margin: auto;">
                        @endif
                    </div>
                    <div style="margin-left: 100px;">
                    <ul style="list-style-type: none; padding: 0;">
                    <li style="margin-bottom: 30px; color: white;"><strong>Judul:</strong> {{ $fasilitas->judul }}</li>
                    <li style="margin-bottom: 30px; color: white;"><strong>Deskripsi:</strong> {{ $fasilitas->deskripsi }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop