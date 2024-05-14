@extends('layouts.frontend.app', [
    'title' => 'List Fasilitas',
])

@section('content')
    <section class="section-padding-100-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>List Fasilitas</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse ($fasilitas as $fas)
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="single-fasilitas mb-50 wow fadeInUp" data-wow-delay="250ms">
                            <div class="fasilitas-thumbnail">
                                @if ($fas->gambar)
                                    <img src="{{ asset('uploads/img/fasilitas') }}/{{ $fas->gambar }}" alt="Fasilitas Thumbnail">
                                @else
                                    <img src="{{ asset('img/fasilitas') }}/default.jpg" alt="Fasilitas Thumbnail">
                                @endif
                            </div>
                            <div class="fasilitas-content">
                                <h6 class="fasilitas-judul">{{ $fas->judul }}</h6>
                                <p class="fasilitas-deskripsi">{{ $fas->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>Tidak ada data fasilitas saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@stop
