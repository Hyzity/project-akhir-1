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
                            @if ($fasilitas->gambar)
                                <img src="{{ asset('uploads/img/fasilitas/') }}/{{ $fasilitas->gambar }}" alt="Foto Fasilitas">
                            @else
                                <img src="{{ asset('img/fasilitas') }}/default.jpg" alt="Foto Fasilitas">
                            @endif
                        </div>
                        <p><strong>Judul:</strong> {{ $fasilitas->judul }}</p>
                        <p><strong>Deskripsi:</strong> {{ $fasilitas->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
